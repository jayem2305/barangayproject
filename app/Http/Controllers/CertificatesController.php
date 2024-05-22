<?php
namespace App\Http\Controllers;
use App\Models\FtjRequest;
use Illuminate\Http\Request;
use App\Models\IndigencyRequest;
use App\Models\BusinessPermit;
use App\Models\BusinessCessation;
use App\Models\CertificateRequest;
use App\Models\Member;
use App\Models\SoloparentRequest;
use App\Models\Official;
use App\Models\Resident;
use Illuminate\Support\Facades\Log;
use PDF;
use PhpOffice\PhpWord\IOFactory;
use TCPDF;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\AccountApprovalNotification;
class CertificatesController extends Controller
{
    public function countPendingFtj()
{
    $pendingCount = FtjRequest::where('status', 'Pending')
    ->count();
    return response()->json(['count' => $pendingCount]);
}
public function countPendingindigency()
{
    $pendingCount = IndigencyRequest::where('status', 'pending')
    ->count();
    return response()->json(['count' => $pendingCount]);
}
public function countPendingcert()
{
    $pendingCount = CertificateRequest::where('status', 'pending')
    ->count();
    Log::info('Retrieved Certificate:', ['cert' => $pendingCount]);

    return response()->json(['count' => $pendingCount]);
}
public function countPendingpermit()
{
    $pendingCount = BusinessPermit::where('status', 'pending')
    ->count();
    return response()->json(['count' => $pendingCount]);
}
public function countPendingcessation()
{
    $pendingCount = BusinessCessation::where('status', 'Pending')
    ->count();
    return response()->json(['count' => $pendingCount]);
}
public function countPendingsoloparent()
{
    $pendingCount = SoloparentRequest::where('status', 'pending')
    ->count();
    return response()->json(['count' => $pendingCount]);
}


//get data to table
public function getData($type)
    {
        switch ($type) {
            case 'ftj':
                $data = FtjRequest::where('status', 'pending')
                ->whereHas('residents', function ($query) {
                    $query->whereColumn('reg_num', 'residents.reg_number');
                })
                ->with(['residents' => function ($query) {
                    $query->select('reg_number', 'address', 'cnum');
                }])
                ->get();
                break;
            case 'indigency':
                $data = IndigencyRequest::where('type', 'Barangay Indigency')->where('status', 'pending')
                ->whereHas('resident', function ($query) {
                    $query->whereColumn('reg_num', 'residents.reg_number');
                })
                ->with(['resident' => function ($query) {
                    $query->select('reg_number', 'address', 'cnum');
                }])
                ->get();
                break;
            case 'certificate':
                $data = CertificateRequest::where('type', 'Barangay Certificate')->where('status', 'pending')
                ->whereHas('resident', function ($query) {
                    $query->whereColumn('reg_num', 'residents.reg_number');
                })
                ->with(['resident' => function ($query) {
                    $query->select('reg_number', 'address', 'cnum');
                }])
                ->get();
                break;
            case 'permits':
                $data = BusinessPermit::where('type', 'Business Permit')->where('status', 'pending')
                ->whereHas('resident', function ($query) {
                    $query->whereColumn('reg_num', 'residents.reg_number');
                })
                ->with(['resident' => function ($query) {
                    $query->select('reg_number', 'address', 'cnum');
                }])
                ->get();
                Log::info('Retrieved Resident:', ['permits' => $data]);
                break;

            case 'cessation':
                $data = BusinessCessation::where('type', 'Business Cessation')->where('status', 'pending')
                ->whereHas('resident', function ($query) {
                    $query->whereColumn('reg_num', 'residents.reg_number');
                })
                ->with(['resident' => function ($query) {
                    $query->select('reg_number', 'address', 'cnum');
                }])
                ->get();
                break;
            case 'soloparent':
                $data = SoloparentRequest::where('type', 'Solo Parents')->where('status', 'pending')
                ->whereHas('resident', function ($query) {
                    $query->whereColumn('reg_num', 'residents.reg_number');
                })
                ->with(['resident' => function ($query) {
                    $query->select('reg_number', 'address', 'cnum');
                }])
                ->get();
                break;
            default:
                $data = [];
        }

        return response()->json($data);
    }
    public function getRelatedData(Request $request)
    {
        // Retrieve all active officials
        $officials = Official::where('status', "active")->get();
    
        // Prepare the data to be returned as JSON
        $officials_members = $officials->map(function ($official) {
            return [
                'name' => $official->name,
                'position' => $official->position,
                'image' => $official->profile_path
            ];
        });
    
        Log::info('Retrieved Names:', ['names' => $officials_members]);
    
        return response()->json($officials_members);
    }

    public function generatePDF(Request $request)
    {
        // Retrieve the FTJ data based on the ID
        $id = $request->id;
        $type = $request->type;
        $offcier = $request->offcier;
    
        if ($type == "Barangay Indigency") {
            $data = IndigencyRequest::findOrFail($id);
            Log::info('Retrieved Names:', ['names' => $data]);
            $name = strtoupper($data->name);
            $regnumber = $data->reg_num;
            $data_info = Resident::where('reg_number', $regnumber)->firstOrFail();
            $data_name = $data_info->lname . ', ' . $data_info->fname . ' ' . $data_info->mname . ' ' . $data_info->ext;
            $address = strtoupper($data_info->address) ;
            if($data_name == $data->name){
                $age = $data_info->age;
            }else{
                $data_info = Member::where('reg_num', $regnumber)->firstOrFail();
                $data_name = $data_info->lname . ', ' . $data_info->fname . ' ' . $data_info->mname . ' ' . $data_info->ext;
                $age = $data_info->age; 
            }
            $data_officials = Official::where('name', $offcier)->firstOrFail();
            $officials = Official::where('status', "active")->get();
            // Set initial Y position
            $y = 43;
            $fianceuncheckedImagePath = 'pic/unchecked.jpg'; 
            $schooluncheckedImagePath = 'pic/unchecked.jpg'; 
            $burialuncheckedImagePath = 'pic/unchecked.jpg'; 
            $educuncheckedImagePath = 'pic/unchecked.jpg'; 
            $othersuncheckedImagePath = 'pic/unchecked.jpg';
            $meduncheckedImagePath = 'pic/unchecked.jpg'; 
            $scholaruncheckedImagePath = 'pic/unchecked.jpg'; 
            $socialuncheckedImagePath = 'pic/unchecked.jpg';
            $hospiuncheckedImagePath = 'pic/unchecked.jpg'; 
            $purposeother = "Others:___________________________________________";

            if($data == "Financial Assistance"){
                $fianceuncheckedImagePath = 'pic/checked.jpg';
            }
            else if($data->purpose == "School Requirement"){
                $schooluncheckedImagePath = 'pic/checked.jpg';
            }
            else if($data->purpose == "Scholarship Application"){
                $scholaruncheckedImagePath = 'pic/checked.jpg';
            }
            else if($data->purpose == "Burial Assistance"){
                $burialuncheckedImagePath = 'pic/checked.jpg';
            }
            else if($data->purpose == "Educational Assistance"){
                $educuncheckedImagePath = 'pic/checked.jpg';
            }
            else if($data->purpose == "Social Pension Application For Indigent Senior Citizen"){
                $socialuncheckedImagePath = 'pic/checked.jpg';
            }
            else if($data->purpose == "Medical Assistance"){
                $meduncheckedImagePath = 'pic/checked.jpg';
            }
            else if($data->purpose == "Hospital Requirement"){
                $hospiuncheckedImagePath = 'pic/checked.jpg';
            }else{
               $othersuncheckedImagePath = 'pic/checked.jpg';
               $purposeother = "Others: ".$data->otherpurpose;
            }
            // Create TCPDF instance
            $pdf = new TCPDF();
    
            // Set document properties
            $pdf->SetCreator('Barangay 781 Zone 85');
            $pdf->SetTitle('Barangay Indigency Request');
            $pdf->SetSubject('Barangay Indigency');
            $pdf->SetKeywords('BI_Req');
            // Add a page
            $pdf->AddPage();
            // Display image as template
            $templatePath = public_path('cert/PDFDOCU/indigency.jpg');
            $pdf->Image($templatePath, 0, 0, 255, 327, '', '', '', false, 400, '', false, false, 0);
            if (!file_exists($templatePath)) {
                exec("gs -sDEVICE=jpeg -sOutputFile={$templatePath} -r300 {templatePath}");
            }
            // Set font
            $pdf->SetFont('times', '', 12);
            // Display data on top of the image
            $pdf->SetXY(97, 45); // Set position for data
            $pdf->SetFont('times', 'BU', 20);
            $pdf->Cell(0, 10, 'BARANGAY INDIGENCY', 0, 1, 'L');
            foreach ($officials as $official) {
                // Set position for data
                $pdf->SetXY(15, $y);
                $pdf->SetFont('times', 'BU', 12.5);
                $pdf->MultiCell(65, 10, $official->name, 1, 'C');
                $y += 4;
                $pdf->SetXY(16, $y);
                $pdf->SetFont('times', 'B', 11);
                $pdf->MultiCell(60, 10, $official->position, 1,'C');
                $y += 13; // Adjust as needed based on spacing
            }

            $pdf->SetXY(80, 57); // Set position for data
            $pdf->SetFont('times', '', 12);
            if($data->voters == "Non-Voters")
            {
                $text = "           This is to certify that $name, $age years old, is a bonafide resident of this barangay with postal address at $address.
                This certification is being issued upon the request of the bearer for the reason stated below and for whatever legal purpose it may serve.";
            }else{
                $text = "           This is to certify that $name, $age years old, is a registered voter and bonafide resident of this barangay with postal address at $address.
                This certification is being issued upon the request of the bearer for the reason stated below and for whatever legal purpose it may serve.";
            }
            $pdf->MultiCell(115, 15, $text, 0, 'J');
//staring of purposes
            $pdf->SetXY(91, 97);
            $pdf->Image($fianceuncheckedImagePath, 80, 100, 12, 10);
            $pdf->Cell(115, 15, "Financial Assistance",0, 'J');

            $pdf->SetXY(91, 112);
            $pdf->Image($schooluncheckedImagePath, 80, 115, 12, 10);
            $pdf->Cell(115, 15, "School Requirement",0, 'J');

            $pdf->SetXY(91, 127);
            $pdf->Image($burialuncheckedImagePath, 80, 130, 12, 10);
            $pdf->Cell(115, 15, "Burial Assistance",0, 'J');

            $pdf->SetXY(91, 142);
            $pdf->Image($educuncheckedImagePath, 80, 145, 12, 10);
            $pdf->Cell(115, 15, "Educational Assistance",0, 'J');

            $pdf->SetXY(91, 157);
            $pdf->Image($othersuncheckedImagePath, 80, 160, 12, 10);
            $pdf->Cell(115, 15, $purposeother ,0, 'J');

            $pdf->SetXY(151, 97);
            $pdf->Image($meduncheckedImagePath, 140, 100, 12, 10);
            $pdf->Cell(115, 15, "Medical Assistance",0, 'J');

            $pdf->SetXY(151, 112);
            $pdf->Image($hospiuncheckedImagePath, 140, 115, 12, 10);
            $pdf->Cell(115, 15, "Hospital Requirement",0, 'J');

            $pdf->SetXY(151, 127);
            $pdf->Image($scholaruncheckedImagePath, 140, 130, 12, 10);
            $pdf->Cell(115, 15, "Scholarship Application",0, 'J');

            $pdf->SetXY(151, 145);
            $pdf->Image($socialuncheckedImagePath, 140, 145, 12, 10);
            $pdf->MultiCell(49, 15, "Social Pension for Indigent Senior Citizen Application ",0, 'J');

            $pdf->SetXY(80, 173); 
            $date = date("jS \t\ F Y");
            $location = "Barangay 781, Zone 85, Sta. Ana, Manila, Philippines.";
            $text = "       SIGNED and ISSUED this $date at $location";
            $pdf->MultiCell(120, 20, $text, 0, 'L');

            $pdf->SetXY(135, 210);
            $pdf->SetFont('times', 'BU', 13);
            $pdf->Cell(0, 10, $data_officials->name, 0, 1, 'C');
            $pdf->SetFont('times', 'B', 12);
            $pdf->SetXY(135, 216);
            $pdf->MultiCell(65, 10, $data_officials->position ,0, 'C');

            $pdfFilePath = public_path('cert/') . $data->name . '-' . 'Certificate.pdf';
            $pdf->Output($pdfFilePath, 'F'); // Output to file
    
            // Return the URL to the generated PDF
            return response()->json(['url' => url('cert/' . $data->name . '-' . 'Certificate.pdf')]);
        }

        if ($type == "Barangay Certificate") {
            $data = CertificateRequest::findOrFail($id);
            Log::info('Retrieved Names:', ['names' => $data]);
            $name = strtoupper($data->name);
            $regnumber = $data->reg_num;
            $data_info = Resident::where('reg_number', $regnumber)->firstOrFail();
            $data_name = $data_info->lname . ', ' . $data_info->fname . ' ' . $data_info->mname . ' ' . $data_info->ext;
            $address = strtoupper($data_info->address) ;
            if($data_name == $data->name){
                $age = $data_info->age;
            }else{
                $data_info = Member::where('reg_num', $regnumber)->firstOrFail();
                $data_name = $data_info->lname . ', ' . $data_info->fname . ' ' . $data_info->mname . ' ' . $data_info->ext;
                $age = $data_info->age; 
            }
            $data_officials = Official::where('name', $offcier)->firstOrFail();
            $officials = Official::where('status', "active")->get();
            // Set initial Y position
            $y = 43;
            $ResidencyuncheckedImagePath = 'pic/unchecked.jpg'; 
            $EmploymentuncheckedImagePath = 'pic/unchecked.jpg'; 
            $PWDuncheckedImagePath = 'pic/unchecked.jpg'; 
            $EducationaluncheckedImagePath = 'pic/unchecked.jpg'; 
            $SchooluncheckedImagePath = 'pic/unchecked.jpg';
            $SenioruncheckedImagePath = 'pic/unchecked.jpg'; 
            $BankuncheckedImagePath = 'pic/unchecked.jpg'; 
            $otherscertuncheckedImagePath = 'pic/unchecked.jpg';
            $hospiuncheckedImagePath = 'pic/unchecked.jpg'; 
            $purposeother = "Others:___________________________________________";

            if($data->purpose == "Proof of Residency"){
                $ResidencyuncheckedImagePath = 'pic/checked.jpg';
            }
            else if($data->purpose == "Local Employment"){
                $EmploymentuncheckedImagePath = 'pic/checked.jpg';
            }
            else if($data->purpose == "PWD ID Application"){
                $PWDuncheckedImagePath = 'pic/checked.jpg';
            }
            else if($data->purpose == "Educational Assistance"){
                $EducationaluncheckedImagePath = 'pic/checked.jpg';
            }
            else if($data->purpose == "School Requirement"){
                $SchooluncheckedImagePath = 'pic/checked.jpg';
            }
            else if($data->purpose == "Senior Citizen Application"){
                $SenioruncheckedImagePath = 'pic/checked.jpg';
            }
            else if($data->purpose == "Bank Account Opening"){
                $BankuncheckedImagePath = 'pic/checked.jpg';
            }
            else if($data->purpose == "Hospital Requirement"){
                $hospiuncheckedImagePath = 'pic/checked.jpg';
            }else{
               $otherscertuncheckedImagePath = 'pic/checked.jpg';
               $purposeother = "Others: ".$data->otherpurpose;
            }
            
            // Create TCPDF instance
            $pdf = new TCPDF();
    
            // Set document properties
            $pdf->SetCreator('Barangay 781 Zone 85');
            $pdf->SetTitle('Barangay Certificate Request');
            $pdf->SetSubject('Barangay Certificate');
            $pdf->SetKeywords('BC_Req');
            
            // Add a page
            $pdf->AddPage();
            // Display image as template
            $templatePath = public_path('cert/PDFDOCU/indigency.jpg');
            $pdf->Image($templatePath, 0, 0, 255, 327, '', '', '', false, 400, '', false, false, 0);
            if (!file_exists($templatePath)) {
                exec("gs -sDEVICE=jpeg -sOutputFile={$templatePath} -r300 {templatePath}");
            }
            // Set font
            $pdf->SetFont('times', '', 12);
            // Display data on top of the image
            $pdf->SetXY(97, 45); // Set position for data
            $pdf->SetFont('times', 'BU', 20);
            $pdf->Cell(0, 10, 'BARANGAY CERTIFICATE', 0, 1, 'L');
            foreach ($officials as $official) {
                // Set position for data
                $pdf->SetXY(15, $y);
                $pdf->SetFont('times', 'B', 12.5);
                $pdf->MultiCell(65, 10, $official->name, 1, 'C');
                $y += 4;
                $pdf->SetXY(16, $y);
                $pdf->SetFont('times', 'B', 11);
                $pdf->MultiCell(60, 10, $official->position, 1,'C');
                $y += 13; // Adjust as needed based on spacing
            }

            $pdf->SetXY(80, 57); // Set position for data
            $pdf->SetFont('times', '', 12);
            if($data->voters == "Non-Voters")
            {
                $text = "           This is to certify that $name, $age years old, is a bonafide resident of this barangay with postal address at $address.
                This certification is being issued upon the request of the bearer for the reason stated below and for whatever legal purpose it may serve.";
            }else{
                $text = "           This is to certify that $name, $age years old, is a registered voter and bonafide resident of this barangay with postal address at $address.
                This certification is being issued upon the request of the bearer for the reason stated below and for whatever legal purpose it may serve.";
            }
            
            $pdf->MultiCell(115, 15, $text, 0, 'J');
//staring of purposes
            $pdf->SetXY(91, 97);
            $pdf->Image($ResidencyuncheckedImagePath, 80, 100, 12, 10);
            $pdf->Cell(115, 15, "Proof of Residency",0, 'J');

            $pdf->SetXY(91, 112);
            $pdf->Image($EmploymentuncheckedImagePath, 80, 115, 12, 10);
            $pdf->Cell(115, 15, "School Requirement",0, 'J');

            $pdf->SetXY(91, 127);
            $pdf->Image($PWDuncheckedImagePath, 80, 130, 12, 10);
            $pdf->Cell(115, 15, "PWD ID Application",0, 'J');

            $pdf->SetXY(91, 142);
            $pdf->Image($EducationaluncheckedImagePath, 80, 145, 12, 10);
            $pdf->Cell(115, 15, "Educational Assistance",0, 'J');

            $pdf->SetXY(91, 157);
            $pdf->Image($otherscertuncheckedImagePath, 80, 160, 12, 10);
            $pdf->Cell(115, 15, $purposeother ,0, 'J');

            $pdf->SetXY(151, 97);
            $pdf->Image($SchooluncheckedImagePath, 140, 100, 12, 10);
            $pdf->Cell(115, 15, "School Requirement",0, 'J');

            $pdf->SetXY(151, 112);
            $pdf->Image($hospiuncheckedImagePath, 140, 115, 12, 10);
            $pdf->Cell(115, 15, "Hospital Requirement",0, 'J');

            $pdf->SetXY(151, 127);
            $pdf->Image($SenioruncheckedImagePath, 140, 130, 12, 10);
            $pdf->Cell(115, 15, "Senior Citizen Application",0, 'J');

            $pdf->SetXY(151, 145);
            $pdf->Image($BankuncheckedImagePath, 140, 145, 12, 10);
            $pdf->MultiCell(49, 15, "Bank Account Opening",0, 'J');

            $pdf->SetXY(80, 173); 
            $date = date("jS \t\ F Y");
            $location = "Barangay 781, Zone 85, Sta. Ana, Manila, Philippines.";
            $text = "       SIGNED and ISSUED this $date at $location";
            $pdf->MultiCell(120, 20, $text, 0, 'L');

            $pdf->SetXY(135, 210);
            $pdf->SetFont('times', 'BU', 13);
            $pdf->Cell(0, 10, $data_officials->name, 0, 1, 'C');
            $pdf->SetFont('times', 'B', 12);
            $pdf->SetXY(135, 216);
            $pdf->MultiCell(65, 10, $data_officials->position ,0, 'C');

            $pdfFilePath = public_path('cert/') . $data->name . '-' . 'Certificate.pdf';
            $pdf->Output($pdfFilePath, 'F'); // Output to file
    
            // Return the URL to the generated PDF
            return response()->json(['url' => url('cert/' . $data->name . '-' . 'Certificate.pdf')]);
        }

        if ($type == "Business Permit") {
            $data = BusinessPermit::findOrFail($id);
            Log::info('Retrieved Names:', ['names' => $data]);
            $name = strtoupper($data->name);
            $bname = strtoupper($data->bname);
            $baddress = strtoupper($data->baddress);
            $regnumber = $data->reg_num;
            $data_info = Resident::where('reg_number', $regnumber)->firstOrFail();
            $data_name = $data_info->lname . ', ' . $data_info->fname . ' ' . $data_info->mname . ' ' . $data_info->ext;
            $address = strtoupper($data_info->address) ;
            if($data_name == $data->name){
                $age = $data_info->age;
            }else{
                $data_info = Member::where('reg_num', $regnumber)->firstOrFail();
                $data_name = $data_info->lname . ', ' . $data_info->fname . ' ' . $data_info->mname . ' ' . $data_info->ext;
                $age = $data_info->age; 
            }
            $data_officials = Official::where('name', $offcier)->firstOrFail();
            $officials = Official::where('status', "active")->get();
            // Set initial Y position
            $y = 43;
            // Create TCPDF instance
            $pdf = new TCPDF();
    
            // Set document properties
            $pdf->SetCreator('Barangay 781 Zone 85');
            $pdf->SetTitle('Business Permit Request');
            $pdf->SetSubject('Business Permit');
            $pdf->SetKeywords('BP_Req');
            // Add a page
            $pdf->AddPage();
            // Display image as template
            $templatePath = public_path('cert/PDFDOCU/bpermit.jpg');
            $pdf->Image($templatePath, 0, 0, 255, 327, '', '', '', false, 400, '', false, false, 0);
            if (!file_exists($templatePath)) {
                exec("gs -sDEVICE=jpeg -sOutputFile={$templatePath} -r300 {templatePath}");
            }
            // Set font
            $pdf->SetFont('times', '', 12);
            // Display data on top of the image
            $pdf->SetXY(97, 45); // Set position for data
            $pdf->SetFont('times', 'BU', 20);
            $pdf->Cell(0, 10, 'BUSINESS PERMIT', 0, 1, 'L');
            foreach ($officials as $official) {
                // Set position for data
                $pdf->SetXY(15, $y);
                $pdf->SetFont('times', 'B', 12.5);
                $pdf->MultiCell(65, 10, $official->name, 1, 'C');
                $y += 4;
                $pdf->SetXY(16, $y);
                $pdf->SetFont('times', 'B', 11);
                $pdf->MultiCell(60, 10, $official->position, 1,'C');
                $y += 13; // Adjust as needed based on spacing
            }

            $pdf->SetXY(80, 60); // Set position for data
            $pdf->SetFont('times', '', 13);
                $text = "TO WHOM IT MAY CONCERN:    
        This is to certify that $bname with postal address at $baddress is hereby granted a permit to operate its business that is within the Territorial Jurisdiction of Barangay 781 Zone 85, pursuant to the provisions of Section 152 c, Republic Act No. 7160, otherwise known as the Government Code of 1991.
                    
        This permit is issued upon the request of $name, whose signature and Community Tax No. are listed below.";
            
            $pdf->MultiCell(115, 15, $text, 0, 'J');
//staring of purposes
       

            $pdf->SetXY(80, 130); 
            $date = date("jS \t\ F Y");
            $location = "Barangay 781, Zone 85, Sta. Ana, Manila, Philippines.";
            $text = "       SIGNED and ISSUED this $date at $location";
            $pdf->MultiCell(120, 20, $text, 0, 'L');

            $pdf->SetXY(135, 160);
            $pdf->SetFont('times', 'BU', 13);
            $pdf->Cell(0, 10, $data->name, 0, 1, 'C');
            $pdf->SetFont('times', 'B', 12);
            $pdf->SetXY(135, 166);
            $pdf->MultiCell(65, 10, "Owner/OIC – Manager" ,0, 'C');

            $pdf->SetXY(135, 200);
            $pdf->SetFont('times', 'BU', 13);
            $pdf->Cell(0, 10, $data_officials->name, 0, 1, 'C');
            $pdf->SetFont('times', 'B', 12);
            $pdf->SetXY(135, 206);
            $pdf->MultiCell(65, 10, $data_officials->position ,0, 'C');

            $pdfFilePath = public_path('cert/') . $data->name . '-' . 'Certificate.pdf';
            $pdf->Output($pdfFilePath, 'F'); // Output to file
    
            // Return the URL to the generated PDF
            return response()->json(['url' => url('cert/' . $data->name . '-' . 'Certificate.pdf')]);
        }
        if ($type == "Business Cessation") {
            $data = BusinessCessation::findOrFail($id);
            Log::info('Retrieved Names:', ['names' => $data]);
            $name = strtoupper($data->name);
            $bname = strtoupper($data->bname);
            $baddress = strtoupper($data->baddress);
            $ceo = strtoupper($data->CEO);
            $regnumber = $data->reg_num;
            $data_info = Resident::where('reg_number', $regnumber)->firstOrFail();
            $data_name = $data_info->lname . ', ' . $data_info->fname . ' ' . $data_info->mname . ' ' . $data_info->ext;
            $address = strtoupper($data_info->address) ;
            if($data_name == $data->name){
                $age = $data_info->age;
            }else{
                $data_info = Member::where('reg_num', $regnumber)->firstOrFail();
                $data_name = $data_info->lname . ', ' . $data_info->fname . ' ' . $data_info->mname . ' ' . $data_info->ext;
                $age = $data_info->age; 
            }
            $data_officials = Official::where('name', $offcier)->firstOrFail();
            $officials = Official::where('status', "active")->get();
            $currentDate = Carbon::now()->format('F j, Y');
            // Set initial Y position
            $y = 43;
            // Create TCPDF instance
            $pdf = new TCPDF();
            
            // Set document properties
            $pdf->SetCreator('Barangay 781 Zone 85');
            $pdf->SetTitle('Business Cessation Request');
            $pdf->SetSubject('Business Cessation');
            $pdf->SetKeywords('BCS_Req');
            // Add a page
            $pdf->AddPage();
            // Display image as template
            $templatePath = public_path('cert/PDFDOCU/bpermit.jpg');
            $pdf->Image($templatePath, 0, 0, 255, 327, '', '', '', false, 400, '', false, false, 0);
            if (!file_exists($templatePath)) {
                exec("gs -sDEVICE=jpeg -sOutputFile={$templatePath} -r300 {templatePath}");
            }
            // Set font
            $pdf->SetFont('times', '', 12);
            // Display data on top of the image
            $pdf->SetXY(80, 45); // Set position for data
            $pdf->SetFont('times', 'BU', 15);
            $pdf->Cell(0, 10, 'CERTIFICATE OF CESSATION OF BUSINESS', 0, 1, 'L');
            foreach ($officials as $official) {
                // Set position for data
                $pdf->SetXY(15, $y);
                $pdf->SetFont('times', 'B', 12.5);
                $pdf->MultiCell(65, 10, $official->name, 1, 'C');
                $y += 4;
                $pdf->SetXY(16, $y);
                $pdf->SetFont('times', 'B', 11);
                $pdf->MultiCell(60, 10, $official->position, 1,'C');
                $y += 13; // Adjust as needed based on spacing
            }

            $pdf->SetXY(80, 60); // Set position for data
            $pdf->SetFont('times', '', 12);
                $text = "       This is to certify that $bname, owned by $name has already ceased its operation on $currentDate within the jurisdiction of the Barangay with business address at $baddress.
        
        This certification is being issued for whatever legal purpose it may serve.";
            
            $pdf->MultiCell(115, 15, $text, 0, 'J');
//staring of purposes
       

            $pdf->SetXY(80, 130); 
            $date = date("jS \t\ F Y");
            $location = "Barangay 781, Zone 85, Sta. Ana, Manila, Philippines.";
            $text = "       SIGNED and ISSUED this $date at $location";
            $pdf->MultiCell(120, 20, $text, 0, 'L');

            $pdf->SetXY(135, 160);
            $pdf->SetFont('times', 'BU', 13);
            $pdf->Cell(0, 10, $data->name, 0, 1, 'C');
            $pdf->SetFont('times', 'B', 12);
            $pdf->SetXY(135, 166);
            $pdf->MultiCell(65, 10, "Owner/OIC – Manager" ,0, 'C');

            $pdf->SetXY(135, 200);
            $pdf->SetFont('times', 'BU', 13);
            $pdf->Cell(0, 10, $data_officials->name, 0, 1, 'C');
            $pdf->SetFont('times', 'B', 12);
            $pdf->SetXY(135, 206);
            $pdf->MultiCell(65, 10, $data_officials->position ,0, 'C');

            $pdfFilePath = public_path('cert/') . $data->name . '-' . 'Certificate.pdf';
            $pdf->Output($pdfFilePath, 'F'); // Output to file
    
            // Return the URL to the generated PDF
            return response()->json(['url' => url('cert/' . $data->name . '-' . 'Certificate.pdf')]);
        }
        if ($type == "Solo Parents") {
            $data = SoloparentRequest::findOrFail($id);
            Log::info('Retrieved Names:', ['names' => $data]);
            $name = strtoupper($data->name);
            $regnumber = $data->reg_num;
            Log::info('Retrieved Names:', ['names' => $regnumber]);

            $data_info = Resident::where('reg_number', $regnumber)->firstOrFail();
            $data_name = $data_info->lname . ', ' . $data_info->fname . ' ' . $data_info->mname . ' ' . $data_info->ext;
            $address = strtoupper($data_info->address) ;
            if($data_name == $data->name){
                $age = $data_info->age;
            }else{
                $data_info = Member::where('reg_num', $regnumber)->firstOrFail();
                $data_name = $data_info->lname . ', ' . $data_info->fname . ' ' . $data_info->mname . ' ' . $data_info->ext;
                $age = $data_info->age; 
            }
            $data_officials = Official::where('name', $offcier)->firstOrFail();
            $officials = Official::where('status', "active")->get();
            $currentDate = Carbon::now()->format('F j, Y');
            $children = json_decode($data->children, true);
            $formattedChildren = [];
            foreach ($children as $index => $child) {
                $formattedChildren[] = ($index + 1) . '. ' . $child;
            }
            $childrenText = implode("\n", $formattedChildren);
            // Set initial Y position
            $y = 43;
            // Create TCPDF instance
            $pdf = new TCPDF();
            
            // Set document properties
            $pdf->SetCreator('Barangay 781 Zone 85');
            $pdf->SetTitle('Solo Parent Request');
            $pdf->SetSubject('Barangay Certificate');
            $pdf->SetKeywords('SP_Req');
            // Add a page
            $pdf->AddPage();
            // Display image as template
            $templatePath = public_path('cert/PDFDOCU/indigency.jpg');
            $pdf->Image($templatePath, 0, 0, 255, 327, '', '', '', false, 400, '', false, false, 0);
            if (!file_exists($templatePath)) {
                exec("gs -sDEVICE=jpeg -sOutputFile={$templatePath} -r300 {templatePath}");
            }
            // Set font
            $pdf->SetFont('times', '', 12);
            // Display data on top of the image
            $pdf->SetXY(97, 45); // Set position for data
            $pdf->SetFont('times', 'BU', 15);
            $pdf->Cell(0, 10, 'BARANGAY CERTIFICATE', 0, 1, 'L');
            foreach ($officials as $official) {
                // Set position for data
                $pdf->SetXY(15, $y);
                $pdf->SetFont('times', 'B', 12.5);
                $pdf->MultiCell(65, 10, $official->name, 1, 'C');
                $y += 4;
                $pdf->SetXY(16, $y);
                $pdf->SetFont('times', 'B', 11);
                $pdf->MultiCell(60, 10, $official->position, 1,'C');
                $y += 13; // Adjust as needed based on spacing
            }

            $pdf->SetXY(80, 60); // Set position for data
            $pdf->SetFont('times', '', 12);
            if($data->voters == "Voters"){
                $text = "           This is to certify that $name, $age years old, is a registered voter and bonafide resident of this barangay with postal address at  $address";
            }else{
                $text = "           This is to certify that $name, $age years old, is a bonafide resident of this barangay with postal address at  $address";
            }
            $pdf->MultiCell(115, 15, $text, 0, 'J');
            $pdf->SetXY(80, 82); // Set position for data
            $pdf->SetFont('times', '', 12);
            $pdf->MultiCell(115, 15, "      This further certifies that the subject person is a SOLO PARENT living with his/her child/children, as follows:", 0, 'J');

            $pdf->SetXY(80, 97); // Set position for data
            $pdf->SetFont('times', 'B', 12);
            $pdf->MultiCell(115, 15, "NAME OF CHILD:", 0, 'L');

            $pdf->SetXY(80, 103); // Set position for data
            $pdf->SetFont('times', 'B', 12);
            $pdf->MultiCell(115, 15, $childrenText, 0, 'L');

            $pdf->SetXY(80, 135); // Set position for data
            $pdf->SetFont('times', '', 12);
            $pdf->MultiCell(115, 15, "      This certification is hereby issued upon the request of the above- subject person for $data->type purposes.
", 0, 'J');

            $pdf->SetXY(80, 150); 
            $date = date("jS \t\ F Y");
            $location = "Barangay 781, Zone 85, Sta. Ana, Manila, Philippines.";
            $text = "       SIGNED and ISSUED this $date at $location";
            $pdf->MultiCell(120, 20, $text, 0, 'L');

            $pdf->SetXY(135, 200);
            $pdf->SetFont('times', 'BU', 13);
            $pdf->Cell(0, 10, $data_officials->name, 0, 1, 'C');
            $pdf->SetFont('times', 'B', 12);
            $pdf->SetXY(135, 206);
            $pdf->MultiCell(65, 10, $data_officials->position ,0, 'C');

            $pdfFilePath = public_path('cert/') . $data->name . '-' . 'Certificate.pdf';
            $pdf->Output($pdfFilePath, 'F'); // Output to file
    
            // Return the URL to the generated PDF
            return response()->json(['url' => url('cert/' . $data->name . '-' . 'Certificate.pdf')]);
        }
        if ($type == "First Time Job Seeker Oath Taking") {
            $data = FtjRequest::findOrFail($id);
            Log::info('Retrieved Names:', ['names' => $data]);
            $name = strtoupper($data->name);
            $regnumber = $data->reg_num;
            Log::info('Retrieved Names:', ['names' => $regnumber]);

            $data_info = Resident::where('reg_number', $regnumber)->firstOrFail();
            $data_name = $data_info->lname . ', ' . $data_info->fname . ' ' . $data_info->mname . ' ' . $data_info->ext;
            $address = strtoupper($data_info->address) ;
            if($data_name == $data->name){
                $age = $data_info->age;
            }else{
                $data_info = Member::where('reg_num', $regnumber)->firstOrFail();
                $data_name = $data_info->lname . ', ' . $data_info->fname . ' ' . $data_info->mname . ' ' . $data_info->ext;
                $age = $data_info->age; 
            }
            $data_officials = Official::where('name', $offcier)->firstOrFail();
            $officials = Official::where('status', "active")->get();
            $currentDate = Carbon::now()->format('F j, Y');
            $y = 43;
            // Create TCPDF instance
            $pdf = new TCPDF();
            
            // Set document properties
            $pdf->SetCreator('Barangay 781 Zone 85');
            $pdf->SetTitle('Solo Parent Request');
            $pdf->SetSubject('Barangay Certificate');
            $pdf->SetKeywords('SP_Req');
            // Add a page
            $pdf->AddPage();
            // Display image as template
            $templatePath = public_path('cert/PDFDOCU/ftj.jpg');
            $pdf->Image($templatePath, 0, 0, 255, 327, '', '', '', false, 400, '', false, false, 0);
            if (!file_exists($templatePath)) {
                exec("gs -sDEVICE=jpeg -sOutputFile={$templatePath} -r300 {templatePath}");
            }
            // Set font
            $pdf->SetFont('times', '', 12);
            // Display data on top of the image
            $pdf->SetXY(15, 53); // Set position for data
            $pdf->SetFont('times', '', 12);
            $pdf->MultiCell(180, 10, 'I, '.$name.', '.$age.' years of age, a resident of '.$address.' of Brgy. 781 Zone 85 District V for 20 years, is a qualified availee of the benefits of Republic Act 11261, otherwise known as the First Time Job-seekers Assistance Act of 2019, do hereby declare, agree and undertake to abide and be bound by the following;
            ', 0, 'J');

            $pdf->SetXY(20, 80); // Set position for data
            $pdf->SetFont('times', '', 12);
            $textLines = [
                "That this is the first time I was actively look for a job, and therefore requesting that barangay certification be issued in my favor to avail the benefits of the law;",
                "That I am aware that the benefit and privilege/s under the said law shall be valid only for one (1) year from the date that the barangay certification is issued;",
                "That I can avail the benefits of the law only once;",
                "That I understand that my personal information shall be included in the Roster/List of First Time Jobseekers and will not be used for any unlawful purpose;",
                "That I will inform and/or report to the Barangay personally, through text or other means, through my family/relatives once I get employed; and",
                "That I am not a beneficiary of the Job Start Program under R.A. No. 10869 and other laws that give similar exemptions for the documents or transaction exempted under R.A. No. 11261;",
                "That if issued the requested Certification, I will not use the same in any fraud, neither falsify nor help and/or assist in the fabrication of the said certification;",
                "That this undertaking is made solely for the purpose of obtaining a Barangay Certification consistent with the objective of R. A. No. 11261 and not for any other purpose;",
                "That I consent to the use of my personal information pursuant to the Data Privacy Act and other applicable laws, rules, and regulations."
            ];
            
            // Initialize formatted text
            $formattedText = '';
            
            // Add numbering to each line
            foreach ($textLines as $index => $line) {
                $formattedText .= ($index + 1) . ". $line\n";
            }
            // Output the formatted text
            $pdf->MultiCell(175, 10, $formattedText, 0, 'L');

            $pdf->SetXY(60, 180); 
            $date = date("jS \\of F Y");
            $text = "Signed this $date in the City of Manila.";
            $pdf->MultiCell(120, 20, $text, 0, 'L');

            $pdf->SetXY(135, 200);
            $pdf->SetFont('times', 'B', 12);
            $pdf->Cell(0, 10, "Witnessed by:  ", 0, 1, 'C');

            $pdf->SetXY(40, 200);
            $pdf->SetFont('times', 'B', 12);
            $pdf->Cell(0, 10, "Signed by:  ", 0, 1, 'L');

            $pdf->SetFont('times', 'B', 12);
            $pdf->SetXY(135, 230);
            $pdf->SetFont('times', 'BU', 13);
            $pdf->Cell(0, 10, $data_officials->name, 0, 1, 'C');

            $pdf->SetFont('times', '', 12);
            $pdf->SetXY(135, 236);
            if( $data_officials->position != "Punong Barangay"){
                $pdf->MultiCell(65, 10, "Barangay Kagawad" ,0, 'C'); 
            }else{
                $pdf->MultiCell(65, 10, $data_officials->position ,0, 'C');
            }
            $pdf->SetFont('times', 'B', 12);
            $pdf->SetXY(25, 230);
            $pdf->SetFont('times', 'BU', 13);
            $pdf->Cell(0, 10, $name, 0, 1, 'L');
            $pdf->SetFont('times', '', 12);
            $pdf->SetXY(25, 236);
            $pdf->MultiCell(65, 10, "First time job seeker" ,0, 'C');


            $pdf->SetFont('times', 'B', 12);
            $pdf->SetXY(135, 245);
            $pdf->SetFont('times', 'U', 13);
            $pdf->Cell(0, 10, date("F j, Y"), 0, 1, 'C');

            $pdf->SetFont('times', '', 12);
            $pdf->SetXY(135, 251);
            $pdf->MultiCell(65, 10, "Date" ,0, 'C');

            $pdf->SetXY(20,270); 
            $pdf->SetFont('times', '', 9);
            $text = "(VALID 100 DAYS WITH BARANGAY DRY SEAL)";
            $pdf->MultiCell(0, 0, $text, 0, 'C');

            $pdfFilePath = public_path('cert/') . $data->name . '-' . 'Certificate.pdf';
            $pdf->Output($pdfFilePath, 'F'); // Output to file
    
            // Return the URL to the generated PDF
            return response()->json(['url' => url('cert/' . $data->name . '-' . 'Certificate.pdf')]);
        }

        if ($type == "First Time Job Seeker") {
            $data = FtjRequest::findOrFail($id);
            Log::info('Retrieved Names:', ['names' => $data]);
            $name = strtoupper($data->name);
            $regnumber = $data->reg_num;
            Log::info('Retrieved Names:', ['names' => $regnumber]);

            $data_info = Resident::where('reg_number', $regnumber)->firstOrFail();
            $data_name = $data_info->lname . ', ' . $data_info->fname . ' ' . $data_info->mname . ' ' . $data_info->ext;
            $address = strtoupper($data_info->address) ;
            if($data_name == $data->name){
                $age = $data_info->age;
            }else{
                $data_info = Member::where('reg_num', $regnumber)->firstOrFail();
                $data_name = $data_info->lname . ', ' . $data_info->fname . ' ' . $data_info->mname . ' ' . $data_info->ext;
                $age = $data_info->age; 
            }
            $data_officials = Official::where('name', $offcier)->firstOrFail();
            $officials = Official::where('status', "active")->get();
            $currentDate = Carbon::now()->format('F j, Y');
            $y = 43;
            // Create TCPDF instance
            $pdf = new TCPDF();
            
            // Set document properties
            $pdf->SetCreator('Barangay 781 Zone 85');
            $pdf->SetTitle('Solo Parent Request');
            $pdf->SetSubject('Barangay Certificate');
            $pdf->SetKeywords('SP_Req');
            // Add a page
            $pdf->AddPage();
            // Display image as template
            $templatePath = public_path('cert/PDFDOCU/ftjtemp.jpg');
            $pdf->Image($templatePath, 0, 0, 255, 327, '', '', '', false, 400, '', false, false, 0);
            if (!file_exists($templatePath)) {
                exec("gs -sDEVICE=jpeg -sOutputFile={$templatePath} -r300 {templatePath}");
            }
            // Set font
            $pdf->SetFont('times', '', 12);
            // Display data on top of the image
            $pdf->SetXY(15, 62); // Set position for data
            $pdf->SetFont('times', '', 12);
            $pdf->MultiCell(180, 10, '          This is to certify that Mr./Ms. '.$name.', '.$age.' a resident of '.$address.' of Brgy. 781 Zone 85 District V for '.$data->number_day.', is a qualified availee of RA 11261 or the First Time Jobseekers Assistance Act of 2019.', 0, 'J');

            $pdf->SetXY(20, 80); // Set position for data
            $pdf->SetFont('times', '', 12);
            $textLines = "      I further certify the holder/bearer was informed of his/her rights, including the duties and responsibilities accorded by RA 11261 through the Oath of Undertaking he/she has signed and executed in the presence of the Barangay Officials.";

            // Output the formatted text
            $pdf->MultiCell(175, 10, $textLines, 0, 'J');

            $pdf->SetXY(40, 100); 
            $date = date("jS \\of F Y");
            $text = "Signed this $date in the City/Municipality of Manila";
            $pdf->MultiCell(120, 20, $text, 0, 'L');

            
            $pdf->SetXY(40, 100); 
            $date = date("jS \\of F Y", strtotime("+1 year"));
            $text = "This certification is valid only until $date one year from the issuance.";
            $pdf->cell(120, 20, $text, 0, 'L');

            
            $pdf->SetFont('times', 'B', 12);
            $pdf->SetXY(135, 150);
            $pdf->SetFont('times', 'BU', 13);
            $pdf->Cell(0, 10, "MANOLITO S. DIAZ", 0, 1, 'C');

            $pdf->SetFont('times', '', 12);
            $pdf->SetXY(135, 156);
            $pdf->MultiCell(65, 10, "Punong Barangay" ,0, 'C'); 

            $pdf->SetFont('times', 'B', 12);
            $pdf->SetXY(135, 170);
            $pdf->SetFont('times', 'U', 13);
            $pdf->Cell(0, 10, date("F j, Y"), 0, 1, 'C');

            $pdf->SetFont('times', '', 12);
            $pdf->SetXY(135, 176);
            $pdf->MultiCell(65, 10, "Date" ,0, 'C');

            $pdf->SetXY(135, 200);
            $pdf->SetFont('times', 'B', 12);
            $pdf->Cell(0, 10, "Witnessed by:  ", 0, 1, 'C');

            $pdf->SetFont('times', 'B', 12);
            $pdf->SetXY(135, 220);
            $pdf->SetFont('times', 'BU', 13);
            $pdf->Cell(0, 10, $data_officials->name, 0, 1, 'C');

            $pdf->SetFont('times', '', 12);
            $pdf->SetXY(135, 226);
            if( $data_officials->position != "Punong Barangay"){
                $pdf->MultiCell(65, 10, "Barangay Kagawad" ,0, 'C'); 
            }else{
                $pdf->MultiCell(65, 10, $data_officials->position ,0, 'C');
            }

            $pdf->SetFont('times', 'B', 12);
            $pdf->SetXY(135, 245);
            $pdf->SetFont('times', 'U', 13);
            $pdf->Cell(0, 10, date("F j, Y"), 0, 1, 'C');

            $pdf->SetFont('times', '', 12);
            $pdf->SetXY(135, 251);
            $pdf->MultiCell(65, 10, "Date" ,0, 'C');


            $pdfFilePath = public_path('cert/') . $data->name . '-' . 'Certificate.pdf';
            $pdf->Output($pdfFilePath, 'F'); // Output to file
    
            // Return the URL to the generated PDF
            return response()->json(['url' => url('cert/' . $data->name . '-' . 'Certificate.pdf')]);
        }
        if ($type == "First Time Job seeker (Minor)") {
            $data = FtjRequest::findOrFail($id);
            Log::info('Retrieved Names:', ['names' => $data]);
            $name = strtoupper($data->name);
            $pname = strtoupper($data->pname);
            $page = strtoupper($data->page);
            $paddress = strtoupper($data->paddress);
            $regnumber = $data->reg_num;
            Log::info('Retrieved Names:', ['names' => $regnumber]);

            $data_info = Resident::where('reg_number', $regnumber)->firstOrFail();
            $data_name = $data_info->lname . ', ' . $data_info->fname . ' ' . $data_info->mname . ' ' . $data_info->ext;
            $address = strtoupper($data_info->address) ;
            if($data_name == $data->name){
                $age = $data_info->age;
            }else{
                $data_info = Member::where('reg_num', $regnumber)->firstOrFail();
                $data_name = $data_info->lname . ', ' . $data_info->fname . ' ' . $data_info->mname . ' ' . $data_info->ext;
                $age = $data_info->age; 
            }
            $data_officials = Official::where('name', $offcier)->firstOrFail();
            $officials = Official::where('status', "active")->get();
            $currentDate = Carbon::now()->format('F j, Y');
            $y = 43;
            // Create TCPDF instance
            $pdf = new TCPDF();
            
            // Set document properties
            $pdf->SetCreator('Barangay 781 Zone 85');
            $pdf->SetTitle('First Time Job seeker');
            $pdf->SetSubject('First Time Job seeker');
            $pdf->SetKeywords('FTJ_Req');
            // Add a page
            $pdf->AddPage();
            // Display image as template
            $templatePath = public_path('cert/PDFDOCU/ftj.jpg');
            $pdf->Image($templatePath, 0, 0, 255, 327, '', '', '', false, 400, '', false, false, 0);
            if (!file_exists($templatePath)) {
                exec("gs -sDEVICE=jpeg -sOutputFile={$templatePath} -r300 {templatePath}");
            }
            // Set font
            $pdf->SetFont('times', '', 12);
            // Display data on top of the image
            $pdf->SetXY(15, 53); // Set position for data
            $pdf->SetFont('times', '', 12);
            $pdf->MultiCell(180, 10, 'I, '.$name.', '.$age.' years of age, a resident of '.$address.' of Brgy. 781 Zone 85 District V for 20 years, is a qualified availee of the benefits of Republic Act 11261, otherwise known as the First Time Job-seekers Assistance Act of 2019, do hereby declare, agree and undertake to abide and be bound by the following;
            ', 0, 'J');

            $pdf->SetXY(20, 80); // Set position for data
            $pdf->SetFont('times', '', 12);
            $textLines = [
                "That this is the first time I was actively look for a job, and therefore requesting that barangay certification be issued in my favor to avail the benefits of the law;",
                "That I am aware that the benefit and privilege/s under the said law shall be valid only for one (1) year from the date that the barangay certification is issued;",
                "That I can avail the benefits of the law only once;",
                "That I understand that my personal information shall be included in the Roster/List of First Time Jobseekers and will not be used for any unlawful purpose;",
                "That I will inform and/or report to the Barangay personally, through text or other means, through my family/relatives once I get employed; and",
                "That I am not a beneficiary of the Job Start Program under R.A. No. 10869 and other laws that give similar exemptions for the documents or transaction exempted under R.A. No. 11261;",
                "That if issued the requested Certification, I will not use the same in any fraud, neither falsify nor help and/or assist in the fabrication of the said certification;",
                "That this undertaking is made solely for the purpose of obtaining a Barangay Certification consistent with the objective of R. A. No. 11261 and not for any other purpose;",
                "That I consent to the use of my personal information pursuant to the Data Privacy Act and other applicable laws, rules, and regulations."
            ];
            
            // Initialize formatted text
            $formattedText = '';
            
            // Add numbering to each line
            foreach ($textLines as $index => $line) {
                $formattedText .= ($index + 1) . ". $line\n";
            }
            // Output the formatted text
            $pdf->MultiCell(175, 10, $formattedText, 0, 'L');

            $pdf->SetXY(60, 175); 
            $date = date("jS \\of F Y");
            $text = "Signed this $date in the City of Manila.";
            $pdf->MultiCell(120, 20, $text, 0, 'L');

            $pdf->SetXY(135, 185);
            $pdf->SetFont('times', 'B', 12);
            $pdf->Cell(0, 10, "Witnessed by:  ", 0, 1, 'C');

            $pdf->SetXY(40, 185);
            $pdf->SetFont('times', 'B', 12);
            $pdf->Cell(0, 10, "Signed by:  ", 0, 1, 'L');

            $pdf->SetFont('times', 'B', 12);
            $pdf->SetXY(135, 195);
            $pdf->SetFont('times', 'BU', 13);
            $pdf->Cell(0, 10, $data_officials->name, 0, 1, 'C');

            $pdf->SetFont('times', '', 12);
            $pdf->SetXY(135, 201);
            if( $data_officials->position != "Punong Barangay"){
                $pdf->MultiCell(65, 10, "Barangay Kagawad" ,0, 'C'); 
            }else{
                $pdf->MultiCell(65, 10, $data_officials->position ,0, 'C');
            }
            $pdf->SetFont('times', 'B', 12);
            $pdf->SetXY(25, 195);
            $pdf->SetFont('times', 'BU', 13);
            $pdf->Cell(0, 10, $name, 0, 1, 'L');
            $pdf->SetFont('times', '', 12);
            $pdf->SetXY(25, 201);
            $pdf->MultiCell(65, 10, "First time job seeker" ,0, 'C');

            $pdf->SetXY(10,210); 
            $pdf->SetFont('times', 'B', 9);
            $text = "______________________________________________________________________________________________________________________For the applicants at least fifteen years old to less than 18 years of age:";
            $pdf->MultiCell(0, 0, $text, 0, 'C');

            $pdf->SetFont('times', '', 12);
            $pdf->SetXY(15, 219);
            $pdf->MultiCell(180, 10, "          I, $pname, $page  years of age, parent/guardian of $name, and a resident of $paddress for $data->number_day , do hereby give my consent for my child/dependent to avail the benefits of Republic Act 11261 and be bound by the abovementioned conditions." ,0, 'J');

            $pdf->SetXY(20, 240);
            $pdf->SetFont('times', 'B', 12);
            $pdf->MultiCell(0, 10, "Signed by:  ", 0, 'C');
            $pdf->SetXY(20, 255);
            $pdf->SetFont('times', 'BU', 12);
            $pdf->MultiCell(0, 10, $pname, 0, 'C');
            $pdf->SetXY(20, 261);
            $pdf->SetFont('times', '', 12);
            $pdf->MultiCell(0, 10, "Parent/Guardian", 0, 'C');

            $pdf->SetXY(20,273); 
            $pdf->SetFont('times', '', 9);
            $text = "(VALID 100 DAYS WITH BARANGAY DRY SEAL)";
            $pdf->MultiCell(0, 0, $text, 0, 'C');

            $pdfFilePath = public_path('cert/') . $data->name . '-' . 'Certificate.pdf';
            $pdf->Output($pdfFilePath, 'F'); // Output to file
    
            // Return the URL to the generated PDF
            return response()->json(['url' => url('cert/' . $data->name . '-' . 'Certificate.pdf')]);
        }
       
    }
    public function sendEmailNotificationCert(Request $request)
{
    // Retrieve the resident ID from the request
    $email = $request->input('email');
    $type = $request->input('type');
    $id = $request->input('id');
    Log::info('Received resident email:', ['email' => $email]);
    try {
        if($type == "First Time Job Seeker"||$type == "First Time Job seeker (Minor)"||$type == "First Time Job Seeker Oath Taking" ){
            $resident = FtjRequest::findOrFail($id);
        }else if($type == "Business Cessation"){
            $resident = BusinessCessation::findOrFail($id);
        }else if($type == "Business Permit"){
            $resident = BusinessPermit::findOrFail($id);
        }else if($type == "Barangay Certificate"){
            $resident = CertificateRequest::findOrFail($id);
        }else if($type == "Barangay Indigency"){
            $resident = IndigencyRequest::findOrFail($id);
        }else if($type == "Solo Parents"){
            $resident = SoloparentRequest::findOrFail($id);
        }else{
         Log::error('No dataBases Found');
        }
        // Fetch the resident based on the ID
        Log::info('Retrieved email:', ['email_resident' => $email]);
        Log::info('Resident Email:', ['email' => $email]);
        $subject="Document Approval Notification";
        $Body = "Your Document Request are now in Process";
        // Send email notification using Mailable class
        try {
            Mail::to($email)->send(new AccountApprovalNotification($subject, $Body));
            $resident->status = 'Approved';
            $resident->save();
        } catch (\Exception $e) {
            Log::error('Exception while sending email: ' . $e->getMessage());
        }
        return response()->json(['success' => true]);
    } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
        Log::error('Error sending email notification: Resident with ID ' . $id . ' not found');
        return response()->json(['error' => 'Resident not found'], 404);
    } catch (\Exception $e) {
        Log::error('Error sending email notification: ' . $e->getMessage());
        return response()->json(['error' => 'Internal Server Error'], 500);
    }
}

public function sendEmailNotificationDecline(Request $request)
{
    // Retrieve the resident ID from the request
    $email = $request->input('email');
    $type = $request->input('type');
    $id = $request->input('id');
    $text = $request->input('text');
    $regnum = $request->input('controlnum');
    Log::info('Received resident email:', ['email' => $email]);
    try {
        if($type == "First Time Job Seeker"||$type == "First Time Job seeker (Minor)"||$type == "First Time Job Seeker Oath Taking" ){
            $resident = FtjRequest::findOrFail($id);
        }else if($type == "Business Cessation"){
            $resident = BusinessCessation::findOrFail($id);
        }else if($type == "Business Permit"){
            $resident = BusinessPermit::findOrFail($id);
        }else if($type == "Barangay Certificate"){
            $resident = CertificateRequest::findOrFail($id);
        }else if($type == "Barangay Indigency"){
            $resident = IndigencyRequest::findOrFail($id);
        }else if($type == "Solo Parents"){
            $resident = SoloparentRequest::findOrFail($id);
        }else{
         Log::error('No dataBases Found');
        }
        // Fetch the resident based on the ID
        Log::info('Retrieved email:', ['email_resident' => $email]);
        Log::info('Resident Email:', ['email' => $email]);
        $subject="Document Declined Notification";
        $Body = "Controll Number: ".$regnum."\n"."Certificate Request: ".$type."\n"."To Mr./Ms: \n".$text;
        // Send email notification using Mailable class
        try {
            Mail::to($email)->send(new AccountApprovalNotification($subject, $Body));
            $resident->status = 'Declined';
            $resident->save();
        } catch (\Exception $e) {
            Log::error('Exception while sending email: ' . $e->getMessage());
        }
        return response()->json(['success' => true]);
    } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
        Log::error('Error sending email notification: Resident with ID ' . $id . ' not found');
        return response()->json(['error' => 'Resident not found'], 404);
    } catch (\Exception $e) {
        Log::error('Error sending email notification: ' . $e->getMessage());
        return response()->json(['error' => 'Internal Server Error'], 500);
    }
}
    
    

    
}
