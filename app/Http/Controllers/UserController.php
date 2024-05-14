<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forum;
use Illuminate\Validation\ValidationException;
use App\Models\Comment;
use App\Models\Reply;
use App\Models\Info;
use App\Models\Member;
use App\Models\Resident;
use App\Models\Events;
use App\Models\IndigencyRequest;
use App\Rules\AgeMatchesBirthday;
use App\Rules\UniqueNameCombinationaddmember;
use App\Rules\UniqueNameCombinationupdate;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    public function index(Request $request)
{
    // Retrieve user ID from request input or session
    $userId = $request->input('userId') ?: $request->session()->get('userId');

    Log::info('User ID retrieved:', ['userId' => $userId]);
    
    if (!$userId) {
        return response()->json(['error' => 'User ID not provided'], 400);
    }

    // Store user ID in session for future requests
    $request->session()->put('userId', $userId);

    // Retrieve user data using the provided user ID
    $user = Resident::where('reg_number', $userId)->first();

    if (!$user) {
        return response()->json(['error' => 'User not found'], 404);
    }

    // Return JSON or view based on request
    if ($request->expectsJson()) {
        return response()->json(['user' => $user]);
    } else {
        return view('user.index', ['user' => $user]);
    }
}


    public function event(Request $request)
    {
    return view('user.events');
    }

    public function profile()
    {
        return view('user.profile');
    }
    public function profile_user(Request $request)
    {
        // Retrieve user ID from the session
        $userId = $request->session()->get('userId');
    
        if (!$userId) {
            return response()->json(['error' => 'User ID not found in session'], 400);
        }
        Log::info('User ID retrieved:', ['userId' => $userId]);
        // Retrieve user data using the user ID
        $user = Resident::where('reg_number', $userId)->first();
    
        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }
    
        // Return user profile data
        return response()->json(['user' => $user]);
    }
    

    
    public function getImage()
    {
        $info = Info::first(); // Assuming you want to retrieve the first image
        if ($info && $info->logo) {
            // If the $info object exists and the logo property is not empty
            return response()->json(['logo' => $info->logo]);
        } else {
            // If no image is found
            return response()->json(['error' => 'No image found'], 404);
        }
    }
    public function getProjects()
{
    $projects = Events::where('Type_of_event', 'Project')
    ->where('status', 'Active')
    ->get();

    return response()->json(['projects' => $projects]);
}
public function getNewsAndEvents()
{
    // Assuming 'News' and 'Event' are differentiated by 'Type_of_event'
    $newsEvents = Events::whereIn('Type_of_event', ['Announcement', 'Event'])
                        ->where('status', 'Active')
                        ->get();

    return response()->json(['events' => $newsEvents]);
}

public function updateProfile(Request $request) {
    // Validation rules for the input data
    $rules = [
        'lname' => ['required','regex:/^[a-zA-Z\s ]+$/', new UniqueNameCombinationupdate],
        'fname' => ['required','regex:/^[a-zA-Z\s ]+$/', new UniqueNameCombinationupdate],
        'mname' => ['nullable','regex:/^[a-zA-Z\s ]+$/', new UniqueNameCombinationupdate],
        'ext' => ['nullable','regex:/^[a-zA-Z\s ]+$/', new UniqueNameCombinationupdate],
'address' => 'required|regex:/^[a-zA-Z0-9 .,()-]*$/',
'household' => 'required',
'Birth' => 'required',
'birthday' => 'required|date',
'age' => ['required', 'numeric', 'min:15', new AgeMatchesBirthday],
'cnum' => 'required|regex:/[0-9]{2}-[0-9]{3}-[0-9]{4}/',
'gender' => 'required|in:Male,Female',
'civil' => 'required|in:Single,Widowed,Married',
'citizenship' => 'required|regex:/^[a-zA-Z\s]+$/',
'occupation' => 'required|regex:/^[a-zA-Z\s]+$/',
'owner' => 'required|in:May-Ari,Nangungupahan,Nakatira sa may Ari,Nakikitira sa Nangungupahan,Informal Settler',
'ownername' => 'required|regex:/^[a-zA-Z\s .,]+$/',
'numberoffam' => 'required|integer|min:0',
'proofofowner' => $request->hasFile('proofofowner') ? 'required|image|mimes:png,jpg,jpeg|max:2048' : '',
    'image_filenme' => $request->hasFile('image_filenme') ? 'required|mimes:png,jpg,jpeg|max:50000' : '',

        // Add validation rules for other fields here
    ];

    // Validate the input data
    $validator = Validator::make($request->all(), $rules);

    // If validation fails, return error response
    if ($validator->fails()) {
        return response()->json(['errors' => $validator->errors()], 400);
    }

    // Get the registration number from the request
    $reg_number = $request->input('reg_number');

    // Find the user by registration number
    $user = Resident::where('reg_number', $reg_number)->first();

    if ($user) {
        // Update user data
        $user->fname = $request->input('fname');
        $user->lname = $request->input('lname');
        $user->mname = $request->input('mname');
        $user->ext = $request->input('ext');
        $user->address = $request->input('address');
        $user->household = $request->input('household');
        $user->Birth = $request->input('Birth');
        $user->birthday = $request->input('birthday');
        $user->age = $request->input('age');
        $user->cnum = $request->input('cnum');
        $user->gender = $request->input('gender');
        $user->civil = $request->input('civil');
        $user->citizenship = $request->input('citizenship');
        $user->occupation = $request->input('occupation');
        $user->owner_type = $request->input('owner');
        $user->owner_name = $request->input('ownername');
        $user->number_of_family = $request->input('numberoffam');
        // Update other fields similarly
        if ($request->hasFile('proofofowner')) {
            $proofofowner = $request->file('proofofowner');
            $proofofownerName = $proofofowner->getClientOriginalName();
            $proofofowner->move(public_path('residentprofile'), $proofofownerName);
            $user->proof_of_owner = $proofofownerName;
        }
    
        if ($request->hasFile('image_filenme')) {
            $image2x2 = $request->file('image_filenme');
            $image2x2Name = $image2x2->getClientOriginalName();
            $image2x2->move(public_path('residentprofile'), $image2x2Name);
            $user->image_filename = $image2x2Name;
        }
        $indicateIf = [];

        if ($request->has('employed') && $request->input('employed') !== null) {
            $indicateIf[] = $request->input('employed');
        }
        
        if ($request->has('unemployed') && $request->input('unemployed') !== null) {
            $indicateIf[] = $request->input('unemployed');
        }
        
        if ($request->has('PWD') && $request->input('PWD') !== null) {
            $indicateIf[] = $request->input('PWD');
        }
        
        if ($request->has('OFW') && $request->input('OFW') !== null) {
            $indicateIf[] = $request->input('OFW');
        }
        
        if ($request->has('soloparent') && $request->input('soloparent') !== null) {
            $indicateIf[] = $request->input('soloparent');
        }
        
        if ($request->has('OSY') && $request->input('OSY') !== null) {
            $indicateIf[] = $request->input('OSY');
        }
        
        if ($request->has('student') && $request->input('student') !== null) {
            $indicateIf[] = $request->input('student');
        }
        
        if ($request->has('OSC') && $request->input('OSC') !== null) {
            $indicateIf[] = $request->input('OSC');
        }
        
        if (empty($indicateIf)) {
            return response()->json(['error' => 'At least one checkbox must be checked'], 400);
        }
        
        // Convert the array of checkbox values into a string
        $indicateIfString = implode(',', $indicateIf);
        
        // Update the user model with the checkbox values
        $user->indicate_if = $indicateIfString;
        $user->save();
        
        return response()->json(['success' => 'User profile updated successfully']);
        
    } else {
        // Return error response if user not found
        return response()->json(['error' => 'User not found'], 404);
    }
}
public function store(Request $request)
    {
        // Validate request data
        $validatedData = $request->validate([
            'lname' => ['required', 'regex:/^[a-zA-Z\s]+$/', new UniqueNameCombinationupdate],
            'fname' => ['required', 'regex:/^[a-zA-Z\s]+$/', new UniqueNameCombinationupdate],
            'mname' => ['nullable', 'regex:/^[a-zA-Z\s]+$/', new UniqueNameCombinationupdate],
            'ext' => ['nullable', 'regex:/^[a-zA-Z\s]+$/', new UniqueNameCombinationupdate],
            'household' => 'required',
            'birthplace' => 'required',
            'birthday' => 'required|date',
            'age' => ['required', 'numeric', new AgeMatchesBirthday],
            'gender' => 'required|in:Male,Female',
            'civil_status' => 'required|in:Single,Married,Widowed',
            'citizenship' => 'required|string|max:255',
            'occupation' => 'required|string|max:255',
            'profile2x2' => 'required|image|mimes:jpeg,png,jpg|max:50000',
        ], [
            'lname.required' => 'The last name field is required.',
            'lname.regex' => 'The last name field must contain only letters and spaces.',
            'fname.required' => 'The first name field is required.',
            'fname.regex' => 'The first name field must contain only letters and spaces.',
            'mname.regex' => 'The middle name field must contain only letters and spaces.',
            'ext.regex' => 'The extension field must contain only letters and spaces.',
            'lname.unique_name_combinationupdate' => 'The combination of name fields already exists.',
            'fname.unique_name_combinationupdate' => 'The combination of name fields already exists.',
            'mname.unique_name_combinationupdate' => 'The combination of name fields already exists.',
            'ext.unique_name_combinationupdate' => 'The combination of name fields already exists.',
            'household.required' => 'The household field is required.',
            'Birth.required' => 'The place of birth field is required.',
            'birthday.required' => 'The birthday field is required.',
            'birthday.date' => 'The birthday must be a valid date.',
            'age.required' => 'The age field is required.',
            'age.numeric' => 'The age must be a number.',
            'gender.required' => 'The gender field is required.',
            'gender.in' => 'The gender field must be either Male or Female.',
            'civil_status.required' => 'The civil status field is required.',
            'civil_status.in' => 'The civil status field must be one of: Single, Married, Widowed.',
            'citizenship.required' => 'The citizenship field is required.',
            'citizenship.max' => 'The citizenship field must not exceed :max characters.',
            'occupation.required' => 'The occupation field is required.',
            'occupation.max' => 'The occupation field must not exceed :max characters.',
            'profile2x2.required' => 'The profile picture field is required.',
            'profile2x2.image' => 'The profile picture must be an image.',
            'profile2x2.mimes' => 'The profile picture must be a file of type: jpeg, png, jpg.',
            'profile2x2.max' => 'The profile picture may not be greater than :max kilobytes.',
        ]);
        
        $userId = $request->session()->get('userId');
        // Store the data in the database
        try {
        $member = new Member();
        $member->reg_num = $userId;
        $member->lname = $request->lname;
        $member->fname = $request->fname;
        $member->mname = $request->mname;
        $member->ext = $request->ext;
        $member->household = $request->household;
        $member->birthplace = $request->birthplace;
        $member->birthday = $request->birthday;
        $member->age = $request->age;
        $member->gender = $request->gender;
        $member->civil_status = $request->civil_status;
        $member->citizenship = $request->citizenship;
        $member->occupation = $request->occupation;

        // Handle file upload
        if ($request->hasFile('profile2x2')) {
            $file = $request->file('profile2x2');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);
            $member->profile2x2 = $filename;
        }
        $indicateIf = [];

        if ($request->has('employed') && $request->input('employed') !== null) {
            $indicateIf[] = $request->input('employed');
        }
        
        if ($request->has('unemployed') && $request->input('unemployed') !== null) {
            $indicateIf[] = $request->input('unemployed');
        }
        
        if ($request->has('PWD') && $request->input('PWD') !== null) {
            $indicateIf[] = $request->input('PWD');
        }
        
        if ($request->has('OFW') && $request->input('OFW') !== null) {
            $indicateIf[] = $request->input('OFW');
        }
        
        if ($request->has('soloparent') && $request->input('soloparent') !== null) {
            $indicateIf[] = $request->input('soloparent');
        }
        
        if ($request->has('OSY') && $request->input('OSY') !== null) {
            $indicateIf[] = $request->input('OSY');
        }
        
        if ($request->has('student') && $request->input('student') !== null) {
            $indicateIf[] = $request->input('student');
        }
        
        if ($request->has('OSC') && $request->input('OSC') !== null) {
            $indicateIf[] = $request->input('OSC');
        }
        
        if (empty($indicateIf)) {
            return response()->json(['error' => 'At least one checkbox must be checked'], 400);
        }
        
        // Convert the array of checkbox values into a string
        $indicateIfString = implode(',', $indicateIf);
        
        // Update the user model with the checkbox values
        $member->indicate_if = $indicateIfString;
        $member->save();

        return response()->json(['message' => 'Member added successfully'], 200);
     }catch (\Exception $e) {
        // Log the error for debugging
        Log::error($e);

        // Return error response
        return response()->json(['error' => 'Failed to add member. Please try again later.'], 500);
    }
    }
    public function displayMembers()
    {
        $members = Member::all(); // Assuming Member is your model for members

        return response()->json($members);
    }
    public function destroy($id)
{
    try {
        $member = Member::findOrFail($id);
        $member->delete();
        
        return response()->json(['success' => 'Member deleted successfully'], 200);
    } catch (\Exception $e) {
        return response()->json(['error' => 'Failed to delete member'], 500);
    }
}
public function edit($id)
{
    $member = Member::findOrFail($id);
    return $member;
}
public function update(Request $request) {
    // Validation rules for the input data
    $rules = [
        'lname' => ['required','regex:/^[a-zA-Z\s ]+$/', new UniqueNameCombinationaddmember],
        'fname' => ['required','regex:/^[a-zA-Z\s ]+$/', new UniqueNameCombinationaddmember],
        'mname' => ['nullable','regex:/^[a-zA-Z\s ]+$/', new UniqueNameCombinationaddmember],
        'ext' => ['nullable','regex:/^[a-zA-Z\s ]+$/', new UniqueNameCombinationaddmember],
        'household' => 'required',
        'Birth' => 'required',
        'birthday' => 'required|date',
        'age' => ['required', 'numeric', 'min:15', new AgeMatchesBirthday],
        'gender' => 'required|in:Male,Female',
        'civil_status' => 'required|in:Single,Widowed,Married',
        'citizenship' => 'required|regex:/^[a-zA-Z\s]+$/',
        'occupation' => 'required|regex:/^[a-zA-Z\s]+$/',
        'profile2x2' => $request->hasFile('profile2x2') ? 'required|mimes:png,jpg,jpeg|max:50000' : '',
    ];

    // Validate the input data
    $validator = Validator::make($request->all(), $rules);

    // If validation fails, return error response
    if ($validator->fails()) {
        return response()->json(['errors' => $validator->errors()], 400);
    }

    // Get the registration number from the request
    $id = $request->input('id');

    // Find the user by registration number
    $user = Member::where('id', $id)->first();
    $userId = $request->session()->get('userId');
    if ($user) {
        $user->fname = $request->input('fname');
        $user->lname = $request->input('lname');
        $user->mname = $request->input('mname');
        $user->ext = $request->input('ext');
        $user->reg_num = $userId;
        $user->household = $request->input('household');
        $user->birthplace = $request->input('Birth');
        $user->birthday = $request->input('birthday');
        $user->age = $request->input('age');
        $user->gender = $request->input('gender');
        $user->civil_status = $request->input('civil_status');
        $user->citizenship = $request->input('citizenship');
        $user->occupation = $request->input('occupation');
        // Update user data
        $user->fill($request->except(['profile2x2']));

        if ($request->hasFile('profile2x2')) {
            $image2x2 = $request->file('profile2x2');
            $image2x2Name = $image2x2->getClientOriginalName();
            $image2x2->move(public_path('uploads'), $image2x2Name);
            $user->profile2x2 = $image2x2Name;
        }

        $indicateIf = [];

        if ($request->has('employed') && $request->input('employed') !== null) {
            $indicateIf[] = $request->input('employed');
        }
        
        if ($request->has('unemployed') && $request->input('unemployed') !== null) {
            $indicateIf[] = $request->input('unemployed');
        }
        
        if ($request->has('PWD') && $request->input('PWD') !== null) {
            $indicateIf[] = $request->input('PWD');
        }
        
        if ($request->has('OFW') && $request->input('OFW') !== null) {
            $indicateIf[] = $request->input('OFW');
        }
        
        if ($request->has('soloparent') && $request->input('soloparent') !== null) {
            $indicateIf[] = $request->input('soloparent');
        }
        
        if ($request->has('OSY') && $request->input('OSY') !== null) {
            $indicateIf[] = $request->input('OSY');
        }
        
        if ($request->has('student') && $request->input('student') !== null) {
            $indicateIf[] = $request->input('student');
        }
        
        if ($request->has('OSC') && $request->input('OSC') !== null) {
            $indicateIf[] = $request->input('OSC');
        }
        
        if (empty($indicateIf)) {
            return response()->json(['error' => 'At least one checkbox must be checked'], 400);
        }
        
        // Convert the array of checkbox values into a string
        $indicateIfString = implode(',', $indicateIf);
        
        // Update the user model with the checkbox values
        $user->indicate_if = $indicateIfString;
        $user->save();

        return response()->json(['success' => 'Member profile updated successfully']);
    } else {
        // Return error response if user not found
        return response()->json(['error' => 'User not found'], 404);
    }
}
public function certificate()
{
return view('user.certificate');
}

public function submitRequestindignecy(Request $request)
{
    $userId = $request->session()->get('userId');
    
    if (!$userId) {
        return response()->json(['error' => 'User ID not found in session'], 400);
    }
    Log::info('User ID retrieved:', ['userId' => $userId]);
    // Retrieve user data using the user ID
    $user = Resident::where('reg_number', $userId)->first();
    $email = $user->email;
    // Validate the incoming request data
    $validatedData = $request->validate([
        'voters' => 'required',
        'name' => 'required',
        'copy' => 'required|min:0|max:5',
        'purpose' => 'required',
        'otherpurpose' => 'nullable',
        'requirements' => $request->hasFile('requirements') ? 'required|mimes:pdf|max:50000' : ''
    ]);

    // Save the data to the database
    $requestModel = new IndigencyRequest();
    $requestModel->email = $email;
    $requestModel->reg_num = $user->reg_number; // Assuming 'reg_number' is the correct field
    $requestModel->voters = $validatedData['voters'];
    $requestModel->name = $validatedData['name'];
    $requestModel->copy = $validatedData['copy'];
    $requestModel->purpose = $validatedData['purpose'];
    $requestModel->otherpurpose = $validatedData['otherpurpose'];
    if ($request->hasFile('requirements')) {
        $file = $request->file('requirements');
        $originalFilename = $file->getClientOriginalName(); // Get the original filename
        $filename = 'File_'. $file->getClientOriginalExtension();
        $file->move(public_path('Files_Requirements'), $filename);
        $requestModel->requirements = $originalFilename; // Store the original filename
    }
    $requestModel->save();

    // Return a response
    return response()->json(['success' => 'Indigency request submitted successfully']);
}

public function getRelatedData(Request $request)
{
    $regNumber = $request->session()->get('userId');
    $resident = Resident::where('reg_number', $regNumber)->first();
    Log::info('Resident ID retrieved:', ['userId' => $resident]);

    // Assuming you have a relationship between Resident and Members
    // Assuming 'members' is the name of the relationship method
    $members = Member::where('reg_num', $regNumber)->get();
    Log::info('Members ID retrieved:', ['userId' => $members]);


    // Define an empty array to store full names
    $fullNames = [];

    // Add full name of resident
    $fullNames[] = $resident->lname . ', ' . $resident->fname . ' ' . $resident->mname . ' ' . $resident->ext;

    // Add full names of members
    foreach ($members as $member) {
        $fullNames[] = $member->lname . ', ' . $member->fname . ' ' . $member->mname . ' ' . $member->ext;
    }

    Log::info('Retrieved Names:', ['names' => $fullNames]);

    return response()->json($fullNames);
}

}

?>