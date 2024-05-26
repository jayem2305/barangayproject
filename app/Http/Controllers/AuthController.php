<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use App\Rules\AgeMatchesBirthday;
use App\Rules\agematchesbirthdaymember;
use App\Rules\CheckAtLeastOneCheckbox;
use App\Rules\UniqueNameCombination;
use Illuminate\Support\Facades\Log;
use App\Models\Resident;
use App\Models\Member;
use Illuminate\Support\Facades\Mail;
use App\Mail\AccountApprovalNotification;
use Illuminate\Support\Str;
use Illuminate\Support\HtmlString;


class AuthController extends Controller
{
    public function index()
    {
        return view('welcome');
        //return "Hello, this is the welcome page!";
    }

public function login(){
    return view("auth.login");
}
public function onlineservices(){
    return view("auth.onlineservices");
}
public function aboutus(){
    return view("auth.aboutus");
}
public function loginPost(Request $request)
{
    $request->validate([
       'email' => 'required|email',
    'password' => 'required',
], [
    'email.required' => 'Email address is required.',
    'email.email' => 'Please enter a valid email address.',
    'password.required' => 'Password is required.',
]);

    // Retrieve the resident by email
    $resident = Resident::where('email', $request->email)->first();

    // Check if resident exists
    if (!$resident) {
        return response()->json(['error' => 'User not found'], 422);
    }

    // Check if the provided password matches the stored password
    if ($request->password === $resident->password) {
        $status = $resident->status;
        $residentId = $resident->reg_number;

        if ($status == "pending") {
            return response()->json(['error' => 'Your Account is still in process'], 422);
        } elseif ($status == "Resident") {
            // Log the resident in
            Auth::login($resident);
            
            // Set the userId in the session
            $request->session()->put('userId', $residentId);

            // Redirect to the user index page
            return response()->json(['redirect' => route('user.index', ['userId' => $residentId])]);
        } elseif ($status == "Admin") {
            // Log the user in as admin
            Auth::login($resident);

            // Redirect to the admin dashboard
            return response()->json(['success' => 'Login successful', 'redirect' => route('admin.statisticalreport')]);
        } else {
            return response()->json(['error' => 'User not found'], 422);
        }
    } else {
        // If passwords do not match, return error
        return response()->json(['error' => 'Password incorrect'], 422);
    }
}



function register(){
    return view("auth.register");
}

function registerPost(Request $request){
    return view('auth.register');
  
    }
    function step1(Request $request){
  // Define validation rules
  //dump($request->input('options'));
  $rules = [
    'lname' => ['required','regex:/^[a-zA-Z\s ]+$/', new UniqueNameCombination],
    'fname' => ['required','regex:/^[a-zA-Z\s ]+$/', new UniqueNameCombination],
    'mname' => ['nullable','regex:/^[a-zA-Z\s ]+$/', new UniqueNameCombination],
    'ext' => ['nullable','regex:/^[a-zA-Z\s ]+$/', new UniqueNameCombination],
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
    'email' => 'required|email|unique:residents,email',
    'password' => 'required|min:8|regex:/^(?=.*[a-zA-Z0-9 ])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]+$/',


];

$messages = [
    'email.unique' => 'The email has already been taken.',
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
];
$validator = Validator::make($request->all(), $rules,$messages);
if ($validator->fails()) {
    return response()->json(['errors' => $validator->errors()], 422);
}
// Validation passed, proceed with your logic
$data = $request->all();

$data_step1 = $validator->validated();
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
$checkedCheckboxes = array_filter($data_step1);
    $request->session()->put('step1', $checkedCheckboxes);
// Remove 'proofofowner' from the data since we've stored the file name separately
$request->session()->put('step1', $data_step1);

// Further processing, if needed
return response()->json(['status' => 'success']);
    }
 
 

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
    $regNumber = "REG_{$dateToday}_0{$newId}";

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
    $checkboxes = ['employed', 'unemployed', 'PWD', 'soloparent', 'OFW', 'student', 'OSC', 'OSY'];
    $indicateIfValues = [];
 // Retrieve values from the session
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
    $resident->indicate_if = $indicateIfString;
    $resident->owner_type = $request->session()->get('step2.owner');
    $resident->owner_name = $request->session()->get('step2.ownername');
    $resident->number_of_family = $request->session()->get('step2.numberoffam');
    $resident->proof_of_owner = $request->session()->get('proofofowner_filename');
    $resident->voters_filename = $request->session()->get('voters_filename');
    $resident->valid_id_filename = $request->session()->get('valid_id_filename');
    $resident->image_filename = $request->session()->get('image_filename');
    $resident->email = $request->session()->get('step1.email');
    $resident->password = $request->session()->get('step1.password');
    $resident->save();

    // Clear the session data if needed
    $request->session()->forget('step1');
    $request->session()->forget('step2');
    $request->session()->forget('proofofowner_filename');
    $request->session()->forget('voters_filename');
    $request->session()->forget('valid_id_filename');
    $request->session()->forget('image_filename');

    return response()->json(['status' => 'Complete','reg_number' => $regNumber], 200);
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
    public function checkEmail(Request $request)
{
    $email = $request->input('email');
    $exists = Resident::where('email', $email)->exists();

    try {
        if ($exists) {
            $token = Str::random(60);
            $subject = "Forget Password Reset";
            $body = new HtmlString("Click the button to change your Password <a href='" . url('/reset-password/' . $token) . "'>Click Here!</a>");

            // Send email notification using Mailable class
            try {
                Mail::to($email)->send(new AccountApprovalNotification($subject, $body));
                return response()->json(['exists' => true]);
            } catch (\Exception $e) {
                Log::error('Exception while sending email: ' . $e->getMessage());
                return response()->json(['error' => 'Failed to send email'], 500);
            }
        } else {
            return response()->json(['exists' => false]);
        }
    } catch (\Exception $e) {
        Log::error('Error checking email: ' . $e->getMessage());
        return response()->json(['error' => 'Internal Server Error'], 500);
    }
}

}


