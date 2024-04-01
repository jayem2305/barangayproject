<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Rules\AgeMatchesBirthday;
use App\Rules\agematchesbirthdaymember;
use App\Rules\CheckAtLeastOneCheckbox;
use Illuminate\Support\Facades\Log;
use App\Models\Resident;
use App\Models\Member;


class AuthController extends Controller
{
public function login(){
    return view("auth.login");
}
function loginPost(Request $request){
    $request->validate([
        "email" => "required",
        "password" => "required",
    ]);
    $credentials = $request->only("email","password");
    if(Auth::attempt($credentials)){
        return redirect()->intended(route("home"));
    }
    return redirect(route("login"))->with("error ","Login failed");
}
function register(){
    return view("auth.register");
}

function registerPost(Request $request){
    return view('auth.register');
  
    }
    function step1(Request $request){
  // Define validation rules
  $rules = [
    'lname' => 'required|regex:/^[a-zA-Z\s ]+$/',
    'fname' => 'required|regex:/^[a-zA-Z\s ]+$/',
    'mname' => 'nullable|regex:/^[a-zA-Z\s ]+$/',
    'ext' => 'nullable|regex:/^[a-zA-Z\s .]+$/',
    'address' => 'required|regex:/^[a-zA-Z0-9 .,()-]*$/',
    'household' => 'required',
    'Birth' => 'required',
    'birthday' => 'required|date',
    'age' => ['required', 'numeric', 'min:15', new AgeMatchesBirthday],
    'cnum' => 'required|regex:/[0-9]{2}-[0-9]{3}-[0-9]{4}/',
    'gender' => 'required|in:Male,Female',
    'civil' => 'required|in:Single,Widowed,Married',
    'citizenship' => 'required|regex:/^[a-zA-Z\s ]+$/',
    'occupation' => 'required|regex:/^[a-zA-Z\s ]+$/',
    'email' => 'required|email',
    'password' => 'required|min:8|regex:/^(?=.*[a-zA-Z0-9 ])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]+$/',
    'employed' => new CheckAtLeastOneCheckbox(['employed', 'unemployed']),
    'PWD' => new CheckAtLeastOneCheckbox(['PWD', 'OFW']),
    'soloparent' => new CheckAtLeastOneCheckbox(['soloparent', 'OSY']),
    'student' => new CheckAtLeastOneCheckbox(['student', 'OSC']),
];

$messages = [
    'lname.required' => 'The last name field is required.',
    'lname.regex' => 'The last name field should contain only letters and spaces.',

    'fname.required' => 'The first name field is required.',
    'fname.regex' => 'The first name field should contain only letters and spaces.',

    'mname.regex' => 'The middle name field should contain only letters and spaces.',

    'ext.regex' => 'The extension field should contain only letters, spaces, dots, and commas.',

    'address.required' => 'The address field is required.',
    'address.regex' => 'The address field should contain only alphanumeric characters, spaces, dots, commas, hyphens, and parentheses.',

    'household.required' => 'The household field is required.',

    'Birth.required' => 'The birth date field is required.',

    'birthday.required' => 'The birthday field is required.',
    'birthday.date' => 'The birthday must be a valid date.',

    'age.required' => 'The age field is required.',
    'age.numeric' => 'The age must be a number.',
    'age.min' => 'The age must be at least :min.',

    'cnum.required' => 'The contact number field is required.',
    'cnum.regex' => 'The contact number must be in the format XX-XXX-XXXX.',

    'gender.required' => 'The gender field is required.',
    'gender.in' => 'The gender must be either Male or Female.',

    'civil.required' => 'The civil status field is required.',
    'civil.in' => 'The civil status must be Single, Widowed, or Married.',

    'citizenship.required' => 'The citizenship field is required.',
    'citizenship.regex' => 'The citizenship field should contain only letters and spaces.',

    'occupation.required' => 'The occupation field is required.',
    'occupation.regex' => 'The occupation field should contain only letters and spaces.',

    'email.required' => 'The email field is required.',
    'email.email' => 'The email must be a valid email address.',

    'password.required' => 'The password field is required.',
    'password.min' => 'The password must be at least :min characters long.',
    'password.regex' => 'The password must contain at least one letter, one number, and one special character.',

    'employed.required' => 'Please select at least one option for employment.',
    'unemployed.required' => 'Please select at least one option for employment.',

    'PWD.required' => 'Please select at least one option for special condition.',
    'OFW.required' => 'Please select at least one option for special condition.',

    'soloparent.required' => 'Please select at least one option for special condition.',
    'OSY.required' => 'Please select at least one option for special condition.',

    'student.required' => 'Please select at least one option for special condition.',
    'OSC.required' => 'Please select at least one option for special condition.',
];
$validator = Validator::make($request->all(), $rules,$messages);
if ($validator->fails()) {
    return response()->json(['errors' => $validator->errors()], 422);
}
// Validation passed, proceed with your logic
$data = $request->all();

$data_step1 = $validator->validated();
// Remove 'proofofowner' from the data since we've stored the file name separately
$request->session()->put('step1', $data_step1);

// Further processing, if needed
return response()->json(['status' => 'success']);
    }
    // Other logic...
 

    public function step2(Request $request)
    {
        // Define the base validation rules with custom error messages
        $baseRules = [
            'owner' => 'required|in:May-Ari,Nangungupahan,Nakatira sa may Ari,Nakikitira sa Nangungupahan,Informal Settler',
            'ownername' => 'required|regex:/^[a-zA-Z\s .,]+$/',
            'numberoffam' => 'required|integer|min:0',
        ];
    
        // Custom error messages for each rule
        $customMessages = [
            'owner.required' => 'Please select an owner type.',
            'owner.in' => 'Invalid owner type selected.',
            'ownername.required' => 'Please enter the owner name.',
            'ownername.regex' => 'Owner name should contain only letters and spaces.',
            'numberoffam.required' => 'Please enter the number of family members.',
            'numberoffam.integer' => 'Number of family members should be a valid integer.',
            'numberoffam.min' => 'Number of family members should be at least :min.',
           
        ];
    
        // Get the request data
        $requestData = $request->all();
    
        // If owner is May-Ari, remove proofofowner from the required rules
        if (isset($requestData['owner']) && $requestData['owner'] === 'May-Ari') {
            $rules = $baseRules;
        } else {
            $rules = array_merge($baseRules, [
                'proofofowner' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            ]);
        }
    
        // Validate the incoming data with custom messages
        $validatedData = Validator::make($requestData, $rules, $customMessages);
    
        if ($validatedData->fails()) {
            // Return errors with custom messages if validation fails
            return response()->json(['errors' => $validatedData->errors()], 422);
        }
    
        // If validation passes, proceed with your logic
        // Handle the uploaded file
        if ($request->hasFile('proofofowner')) {
            $file = $request->file('proofofowner');
            $fileName = time() . '_' . $file->getClientOriginalName();
            // Move the uploaded file to public/residentprofile folder
            $file->move(public_path('residentprofile'), $fileName);
            // Save $fileName in your database or use it as needed
            // Store only the file name or path in the session
            $request->session()->put('proofofowner_filename', $fileName);
        }
    
        // Store validated data in the session or database if needed
        $data_step2 = $validatedData->validated();
        // Remove 'proofofowner' from the data since we've stored the file name separately
        unset($data_step2['proofofowner']);
        $request->session()->put('step2', $data_step2);
    
        // Return the success response
        return response()->json(['status' => 'NEXTSTEP']);
    }
    
    
    public function storeMember(Request $request)
    {
        // Validate the incoming request data
        $validatedDatamemnber = $request->validate([
            'lname_member' => 'required|regex:/^[a-zA-Z\s .]+$/',
            'fname_member' => 'required|regex:/^[a-zA-Z\s .]+$/',
            'mname_member' => 'nullable|regex:/^[a-zA-Z\s .]+$/',
            'ext_member' => 'nullable|regex:/^[a-zA-Z\s .]+$/',
            'household_member' => 'required|regex:/^[a-zA-Z\s .]+$/',
            'birth_member' => 'required',
            'bday_member' => 'required|date',
            'age_member' => ['required', 'numeric'],
            'gender_member' => 'required|in:Male,Female',
            'civil_member' => 'required|in:Single,Widowed,Married',
            'citizenship_member' => 'required|regex:/^[a-zA-Z\s ]+$/',
            'occupation_member' => 'required|regex:/^[a-zA-Z\s ]+$/',
            'employed_member' => new CheckAtLeastOneCheckbox(['employed', 'unemployed']),
            'PWD_member' => new CheckAtLeastOneCheckbox(['PWD', 'OFW']),
            'soloparent_member' => new CheckAtLeastOneCheckbox(['soloparent', 'OSY']),
            'student_member' => new CheckAtLeastOneCheckbox(['student', 'OSC']),
            'id_member' => 'required|mimes:pdf,png,jpg,jpeg|max:2048',
            'pic_member' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            // Add more validation rules for other fields as needed
        ]);
    
        // If validation fails, return JSON response with errors
        $validatormember = Validator::make($request->all(), $validatedDatamemnber);
        if ($validatormember->fails()) {
            return response()->json(['errors' => $validatormember->errors()], 422);
        }
    
        // Handle uploaded ID file
        if ($request->hasFile('id_member')) {
            $idFile = $request->file('id_member');
            $idFileName = time() . '_' . $idFile->getClientOriginalName();
            // Move the uploaded ID file to public/residentprofile folder
            $idFile->move(public_path('residentprofile'), $idFileName);
            // Store the file name in the session
            $request->session()->put('id_member_filename', $idFileName);
        }
    
        // Handle uploaded picture file
        if ($request->hasFile('pic_member')) {
            $picFile = $request->file('pic_member');
            $picFileName = time() . '_' . $picFile->getClientOriginalName();
            // Move the uploaded picture file to public/residentprofile folder
            $picFile->move(public_path('residentprofile'), $picFileName);
            // Store the file name in the session
            $request->session()->put('pic_member_filename', $picFileName);
        }
    
        // Store validated data in the session or database if needed
        $data_addmember = $validatormember->validated();
        // Remove 'id_member' and 'pic_member' from the data since we've stored the file names separately
        unset($data_addmember['id_member']);
        unset($data_addmember['pic_member']);
        $request->session()->put('addmember', $data_addmember);
    
        // Return a JSON response indicating successful addition of member
        return response()->json(['status' => "Member_Added"]);
    }
    

    public function laststep(Request $request)
    {
        $validatedData = $request->validate([
            'voterscert' => 'required|mimes:pdf,png,jpg,jpeg|max:50000', 
            'idv' => 'required|mimes:pdf,png,jpg,jpeg|max:50000',
            'pic' => 'required|mimes:png,jpg,jpeg|max:50000',
        ]);
    
        // Move the uploaded files to the desired folder and store their names
        if ($request->hasFile('voterscert')) {
            $votersCertificate = $request->file('voterscert');
            if ($votersCertificate->isValid()) {
                $votersCertificateName = time() . '_' . $votersCertificate->getClientOriginalName();
                $votersCertificate->move(public_path('residentprofile'), $votersCertificateName);
                $request->session()->put('voters_filename', $votersCertificateName);
            } else {
                return response()->json(['error' => 'Invalid votersCertificate file.'], 422);
            }
        } else {
            return response()->json(['error' => 'votersCertificate file is required.'], 422);
        }
    
        if ($request->hasFile('idv')) {
            $valid = $request->file('idv');
            if ($valid->isValid()) {
                $validName = time() . '_' . $valid->getClientOriginalName();
                $valid->move(public_path('residentprofile'), $validName);
                $request->session()->put('valid_id_filename', $votersCertificateName);
            } else {
                return response()->json(['error' => 'Invalid valid file.'], 422);
            }
        } else {
            return response()->json(['error' => 'valid file is required.'], 422);
        }
    
        if ($request->hasFile('pic')) {
            $twobytwo = $request->file('pic');
            if ($twobytwo->isValid()) {
                $twobytwoName = time() . '_' . $twobytwo->getClientOriginalName();
                $twobytwo->move(public_path('residentprofile'), $twobytwoName);
                $request->session()->put('image_filename', $votersCertificateName);
            } else {
                return response()->json(['error' => 'Invalid twobytwo file.'], 422);
            }
        } else {
            return response()->json(['error' => 'twobytwo file is required.'], 422);
        }
    
       // Generate reg_number in the format REG_DATE_AutoIncrement
    $dateToday = now()->format('Ymd');
    $latestResident = Resident::latest('id')->first();
    $lastId = $latestResident ? $latestResident->id : 0;
    $newId = $lastId + 1;
    $regNumber = "REG_{$dateToday}_{$newId}";

    // Create a new Resident instance and store in the database
    $resident = new Resident();
    $resident->reg_number = $regNumber;
    $resident->lname = $request->session()->get('step1.lname');
    $resident->fname = $request->session()->get('step1.fname');
    $resident->mname = $request->session()->get('step1.mname');
    $resident->ext = $request->session()->get('step1.ext');
    $resident->address = $request->session()->get('step1.address');
    $resident->household = $request->session()->get('step1.household');
    $resident->Birth = $request->session()->get('step1.Birth');
    $resident->birthday = $request->session()->get('step1.birthday');
    $resident->age = $request->session()->get('step1.age');
    $resident->cnum = $request->session()->get('step1.cnum');
    $resident->gender = $request->session()->get('step1.gender');
    $resident->civil = $request->session()->get('step1.civil');
    $resident->citizenship = $request->session()->get('step1.citizenship');
    $resident->occupation = $request->session()->get('step1.occupation');
    $indicateIf = '';
    if ($request->session()->has('step1.employed')) {
        $indicateIf .= $request->session()->get('step1.employed') . ', ';
    }
    if ($request->session()->has('step1.PWD')) {
        $indicateIf .= $request->session()->get('step1.PWD') . ', ';
    }
    if ($request->session()->has('step1.soloparent')) {
        $indicateIf .= $request->session()->get('step1.soloparent') . ', ';
    }
    if ($request->session()->has('step1.student')) {
        $indicateIf .= $request->session()->get('step1.student');
    }

    // Trim any trailing commas and spaces
    $resident->indicate_if = rtrim(trim($indicateIf), ',');

    $resident->owner_type = $request->session()->get('step2.owner');
    $resident->owner_name = $request->session()->get('step2.ownername');
    $resident->number_of_family = $request->session()->get('step2.numberoffam');
    $resident->proof_of_owner = $request->session()->get('proofofowner_filename');
    $resident->voters_filename = $request->session()->get('voters_filename');
    $resident->valid_id_filename = $request->session()->get('valid_id_filename');
    $resident->image_filename = $request->session()->get('image_filename');
    $resident->email = $request->session()->get('step1.email');
    $resident->password = Hash::make($request->input('password'));
    $resident->save();
    // Get the resident ID for the relationship
    $residentId = $resident->id;

    // Insert member data
    $members = $request->session()->get('addmember', []);
    foreach ($members as $memberData) {
        $member = new Member();
        $member->resident_id = $residentId;
        $member->lname_member = $memberData['lname_member'];
        $member->fname_member = $memberData['fname_member'];
        $member->mname_member = $memberData['mname_member'];
        $member->ext_member = $memberData['ext_member'];
        $member->household_member = $memberData['household_member'];
        $member->birth_member = $memberData['birth_member'];
        $member->bday_member = $memberData['bday_member'];
        $member->age_member = $memberData['age_member'];
        $member->gender_member = $memberData['gender_member'];
        $member->civil_member = $memberData['civil_member'];
        $member->occupation_member = $memberData['occupation_member'];
       // Combine values from the $memberData array into the indicate_if_member field
        $indicateIfMember = '';
        if (isset($memberData['employed_member'])) {
            $indicateIfMember .= $memberData['employed_member'] . ', ';
        }
        if (isset($memberData['PWD_member'])) {
            $indicateIfMember .= $memberData['PWD_member'] . ', ';
        }
        if (isset($memberData['soloparent_member'])) {
            $indicateIfMember .= $memberData['soloparent_member'] . ', ';
        }
        if (isset($memberData['student_member'])) {
            $indicateIfMember .= $memberData['student_member'];
        }

        // Trim any trailing commas and spaces
        $member->indicate_if_member = rtrim(trim($indicateIfMember), ',');
        $member->id_member = $memberData['id_member'];
        $member->pic_member = $memberData['pic_member'];
        
        // Save the member
        $member->save();
    }

    // Clear the session data if needed
    $request->session()->forget('step1');
    $request->session()->forget('step2');
    $request->session()->forget('proofofowner_filename');
    $request->session()->forget('voters_filename');
    $request->session()->forget('valid_id_filename');
    $request->session()->forget('image_filename');
    $request->session()->forget('addmember');

    return response()->json(['status' => 'Complete'], 200);
    }
    
    /*$request->validate([
        "sname" => "required",
        "fname" => "required",
        "mname" => "required",
        "email" => "required",
        "password" => "required",
    ]);*/

    /*$user = new User();
    $user->name = $request->sname;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);

    if($user->save()){
        return redirect(route("login"))
        ->with("success","User created Successfully");
    }
    return redirect(route("register"))
    ->with("Error","Failed to created account");*/
}


