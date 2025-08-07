<?php

namespace App\Http\Controllers;

use App\Models\fields;
use App\Models\country;
use App\Models\consults;
use App\Models\contacts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

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
        $details = DB::table('countrydetails')
            ->join('countries', 'countrydetails.country_id', '=', 'countries.id')
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

        $consultRequest = [
            'name' => $req->name,
            'email' => $req->email,
            'message' => $req->message,
            'qualification' => $req->qualification,
            'country_id' => $req->country,
            'percentage' => $req->percentage,
            'field' => $req->field,
            'office_location' => $req->office_location
        ];
        // Mail::to($req->email)->send(new RequestMail($consultRequest));

        $consult->save();
        return redirect()->back()->with('success', "Your query has been passed to us. We'll get back to you shortly");
    }
    public function uniDetails($name)
    {
        $university = DB::table('universities')
            ->where('slug', '=', $name)
            ->first();
        if (!$university) {
            return view('coming_soon');
        }
        $uni_id = $university->id;
        $uniName = $university->university_name;

        $asscdepartments = DB::table('unideptprogcourses')
            ->join('departments', 'departments.id', '=', 'unideptprogcourses.depart_id')
            ->join('courses', 'courses.id', '=', 'unideptprogcourses.course_id')
            ->join('universities', 'universities.id', '=', 'unideptprogcourses.university_id')
            ->where('unideptprogcourses.university_id', $uni_id)
            ->where('unideptprogcourses.program_level', 1)
            ->select(
                'unideptprogcourses.*',
                'departments.department_name as department_name',
                'courses.course_title as course_title',
                'universities.university_name as university_name',
                'universities.slug',
                'universities.country_id'
            )
            ->get()
            ->groupBy('department_name'); // <-- GROUPING here

        $bachelordepartments = DB::table('unideptprogcourses')
            ->join('departments', 'departments.id', '=', 'unideptprogcourses.depart_id')
            ->join('courses', 'courses.id', '=', 'unideptprogcourses.course_id')
            ->join('universities', 'universities.id', '=', 'unideptprogcourses.university_id')
            ->where('unideptprogcourses.university_id', $uni_id)
            ->where('unideptprogcourses.program_level', 2)
            ->select(
                'unideptprogcourses.*',
                'departments.department_name as department_name',
                'courses.course_title as course_title',
                'universities.university_name as university_name',
                'universities.slug',
                'universities.country_id'
            )
            ->get()
            ->groupBy('department_name');
        $mastersdepartments = DB::table('unideptprogcourses')
            ->join('departments', 'departments.id', '=', 'unideptprogcourses.depart_id')
            ->join('courses', 'courses.id', '=', 'unideptprogcourses.course_id')
            ->join('universities', 'universities.id', '=', 'unideptprogcourses.university_id')
            ->where('unideptprogcourses.university_id', $uni_id)
            ->where('unideptprogcourses.program_level', 3)
            ->select(
                'unideptprogcourses.*',
                'departments.department_name as department_name',
                'courses.course_title as course_title',
                'universities.university_name as university_name',
                'universities.slug',
                'universities.country_id'
            )
            ->get()
            ->groupBy('department_name');
        $phddepartments = DB::table('unideptprogcourses')
            ->join('departments', 'departments.id', '=', 'unideptprogcourses.depart_id')
            ->join('courses', 'courses.id', '=', 'unideptprogcourses.course_id')
            ->join('universities', 'universities.id', '=', 'unideptprogcourses.university_id')
            ->where('unideptprogcourses.university_id', $uni_id)
            ->where('unideptprogcourses.program_level', 4)
            ->select(
                'unideptprogcourses.*',
                'departments.department_name as department_name',
                'courses.course_title as course_title',
                'universities.university_name as university_name',
                'universities.slug',
                'universities.country_id'
            )
            ->get()
            ->groupBy('department_name');


        return view('web.uni_details', compact('uniName', 'university','asscdepartments','bachelordepartments','mastersdepartments','phddepartments'));
    }
}
