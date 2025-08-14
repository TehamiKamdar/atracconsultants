<?php

namespace App\Http\Controllers;

use App\Models\fields;
use App\Models\country;
use App\Models\consults;
use App\Models\contacts;
use App\Mail\RequestMail;
use App\Models\universities;
use Illuminate\Http\Request;
use App\Models\countrydetails;
use Illuminate\Support\Facades\DB;
use App\Mail\AdminInquiryAlertMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index(){
        $countries = country::orderBy('name', 'asc')->where('status', 'active')->get();
        $fields = fields::orderBy('field', 'asc')->get();
        // print_r($countries);
        return view('web.index', compact('countries', 'fields'));

    }

    public function about(){
        return view('web.about');
    }

    public function blog(){
        return view('web.blog');
    }

    public function showContactForm(){
        return view('web.contact');
    }
    public function contact(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|min:2|max:100|regex:/^[a-zA-Z\s]+$/',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|min:3|max:150',
            'message' => 'required|string|min:5|max:1000',
        ]);

        contacts::create($validated);

        return redirect()->back()->with('success', 'Thanks for contacting us. We\'ll get back to you ASAP.');
    }


    public function detailsShow($name)
    {

        // return $name;
        $details = countrydetails::join('countries', 'countrydetails.country_id', '=', 'countries.id')
            ->where('countries.name', $name)
            ->select('countrydetails.*', 'countries.name', 'countries.id as country_id')
            ->first();
        if (!$details) {
            return view('coming_soon');
        }
        $fields = fields::orderBy('field', 'asc')->get();


        $countryName = $details->name;

        $country_id = $details->country_id;

        $universities = DB::table('universities')->where('country_id', '=', $country_id)->get();

        return view('web.details', compact('details', 'name', 'countryName', 'fields', 'universities'));
        // return $universities;

    }


    public function consultRequest(Request $req)
    {
        // return view('web.index');

        $consult = new consults();
        $consult->name = $req->name;
        $consult->phone = $req->phone;
        $consult->email = $req->email;
        $consult->message = $req->message;
        $consult->qualification = $req->qualification;
        $consult->country_id = $req->country;
        $consult->percentage = $req->percentage;
        $consult->field = $req->field;
        $consult->office_location = $req->office_location;
        $consult->date = $req->meeting_datetime;

        if($req->office_location == 'islamabad'){
            $data = [
                'name' => $req->name,
                'email' => $req->email,
                'message' => $req->message,
                'qualification' => $req->qualification,
                'country_id' => $req->country,
                'percentage' => $req->percentage,
                'field' => $req->field,
                'date' => $req->date,
                'phone' => $req->phone,
                'office_location' => $req->office_location,
                'office_phone' => '+92 325 5209992',
                'office_email' => 'atracconsultant@gmail.com'
            ];
        }else{
            $data = [
                'name' => $req->name,
                'email' => $req->email,
                'message' => $req->message,
                'qualification' => $req->qualification,
                'country_id' => $req->country,
                'percentage' => $req->percentage,
                'field' => $req->field,
                'date' => $req->date,
                'phone' => $req->phone,
                'office_location' => $req->office_location,
                'office_phone' => '+92 335 3737904',
                'office_email' => 'atracconsultants@gmail.com'
            ];
        }

        Mail::to($req->email)->send(new RequestMail($data));

        if($req->office_location == 'islamabad'){
            $adminEmail = 'atracconsultant@gmail.com';
        }else{
            $adminEmail = env('MAIL_FROM_ADDRESS');
        }

        Mail::to($adminEmail)->send(new AdminInquiryAlertMail($data));


        $consult->save();
        return redirect()->back()->with('success', "Your query has been passed to us. We'll get back to you shortly");
    }
    public function uniDetails($slug)
{
    // Get university with all nested relationships
    $university = universities::with([
        'programs.departments.courses'
    ])->where('slug', $slug)->first();

    if (!$university) {
        return view('coming_soon');
    }

    // Group programs by program_level for easy frontend use
    $programsByLevel = $university->programs->groupBy('program_level');

    // You can directly pass this to the view
    return view('web.uni_details', [
        'university'        => $university,
        'uniName'           => $university->name,
        'asscdepartments'   => $programsByLevel[1] ?? collect(),
        'bachelordepartments'=> $programsByLevel[2] ?? collect(),
        'mastersdepartments'=> $programsByLevel[3] ?? collect(),
        'phddepartments'    => $programsByLevel[4] ?? collect(),
    ]);
}

}
