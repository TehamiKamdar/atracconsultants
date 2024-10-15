<?php

namespace App\Http\Controllers;

use App\Models\country;
use App\Mail\RejectMail;
use App\Models\consults;
use App\Mail\ApproveMail;
use App\Mail\RequestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function consultAllIndex(){
        if(Auth::check()){
            if(Auth::User()->role==1){
                $consults = DB::table('consults')
                ->join('countries','consults.country_id', '=', 'countries.id')
                ->select('consults.id', 'consults.name', 'consults.phone', 'consults.email', 'countries.country_name', 'consults.qualification', 'consults.field', 'consults.message')
                ->get();
                return view('admin.consult', compact('consults'));
            }else{
                abort(403, "Why don't you go back and try again when you're feeling more heroic?");
            }
        }else{
            return redirect()->route('login');
        }

    }
    public function consultPendingIndex(){
        if(Auth::check()){
            if(Auth::User()->role==1){
                $consults = DB::table('consults')
                ->join('countries','consults.country_id', '=', 'countries.id')
                ->select('consults.id', 'consults.name', 'consults.phone', 'consults.email', 'countries.country_name', 'consults.qualification', 'consults.field', 'consults.message','consults.status')
                ->where('status', '=', 'pending')
                ->get();
                return view('admin.pending', compact('consults'));
            }else{
                abort(403, "Why don't you go back and try again when you're feeling more heroic?");
            }
        }else{
            return redirect()->route('login');
        }

    }
    public function consultApprovedIndex(){
        if(Auth::check()){
            if(Auth::User()->role==1){
            // Data fetch on page
            $consults = DB::table('consults')
            ->join('countries','consults.country_id', '=', 'countries.id')
            ->select('consults.id', 'consults.name', 'consults.phone', 'consults.email', 'countries.country_name', 'consults.qualification', 'consults.field', 'consults.message','consults.status')
            ->where('status', '=', 'approved')
            ->get();

            //email sending for rejection

                return view('admin.approved', compact('consults'));
            }else{
                abort(403, "Why don't you go back and try again when you're feeling more heroic?");
            }
        }else{
            return redirect()->route('login');
        }

    }
    public function consultRejectedIndex(){
        if(Auth::check()){
            if(Auth::User()->role==1){
                $consults = DB::table('consults')
                ->join('countries','consults.country_id', '=', 'countries.id')
                ->select('consults.id', 'consults.name', 'consults.phone', 'consults.email', 'countries.country_name', 'consults.qualification', 'consults.field', 'consults.message','consults.status')
                ->where('status', '=', 'rejected')
                ->get();
                return view('admin.rejected', compact('consults'));
            }else{
                abort(403, "Why don't you go back and try again when you're feeling more heroic?");
            }
        }else{
            return redirect()->route('login');
        }

    }
    public function consultRequest(Request $req){
        // return view('web.index');

        $consult = new consults();
        $consult->name = $req->name;
        $consult->phone = $req->phone;
        $consult->email = $req->email;
        $consult->message = $req->message;
        $consult->qualification = $req->qualification;
        $consult->country_id = $req->country;
        $consult->field = $req->field;

        $consultRequest = [
            'name' => $req->name,
            'email' => $req->email,
            'message' => $req->message,
            'qualification' => $req->qualification,
            'country_id' => $req->country_id,
            'field' => $req->field
        ];
        Mail::to($req->email)->send(new RequestMail($consultRequest));

        $consult->save();
        return redirect()->back()->with('success',"Your query has been passed to us. We'll get back to you shortly");


    }

    public function consultDetails($id){
        if(Auth::check()){
            if(Auth::User()->role==1){
                $consultId = $id;
                $consult = DB::table('consults')
                ->join('countries','consults.country_id', '=', 'countries.id')
                ->select('consults.id', 'consults.name', 'consults.phone', 'consults.email', 'countries.country_name', 'consults.qualification', 'consults.field', 'consults.message', 'consults.status',  'consults.created_at')
                ->where('consults.id', $consultId)->first();

                return view('admin.details', ['consult' => $consult]);
            }else{
                abort(403, "Why don't you go back and try again when you're feeling more heroic?");
            }
        }else{
            return redirect()->route('login');
        }

        // return $consultId;
    }

    public function consultApprove($id){
        if (Auth::check()) {
            if (Auth::User()->role == 1) {
                // Retrieve the consult using Eloquent and update its status
                $consult = consults::find($id);

                if ($consult) {
                    $consult->status = 'approved';
                    $consult->save(); // Save the changes

                    $consultApprove = [
                        'name' => $consult->name,
                        'email'=> $consult->email
                    ];
                    Mail::to($consult->email)->send(new ApproveMail($consultApprove));

                    return redirect()->back()->with('success', 'Appointment Approved');
                } else {
                    return redirect()->back()->with('error', 'Consult not found');
                }
            } else {
                abort(403, "Why don't you go back and try again when you're feeling more heroic?");
            }
        } else {
            return redirect()->route('login');
        }

        // return $consultId;
    }


    public function consultReject($id){
        if (Auth::check()) {
            if (Auth::User()->role == 1) {
                // Retrieve the consult using Eloquent and update its status
                $consult = consults::find($id);

                if ($consult) {
                    $consult->status = 'rejected';
                    $consult->save(); // Save the changes
                    $consultReject = [
                        'name' => $consult->name,
                        'email'=> $consult->email
                    ];
                    Mail::to($consult->email)->send(new RejectMail($consultReject));

                    return redirect()->back()->with('reject', 'Appointment Rejected');
                } else {
                    return redirect()->back()->with('error', 'Consult not found');
                }
            } else {
                abort(403, "Why don't you go back and try again when you're feeling more heroic?");
            }
        } else {
            return redirect()->route('login');
        }

        // return $consultId;
    }


    public function index(){
        if(Auth::check()){
            if(Auth::User()->role==1){
                return view('admin.index');
            }else{
                abort(403, "Why don't you go back and try again when you're feeling more heroic?");
            }
        }else{
            return redirect()->route('login');
        }
    }
    public function countryIndex(){
        if(Auth::check()){
            if(Auth::User()->role==1){
                $countries = country::orderBy('country_name', 'asc')->get();
                return view('admin.countries', compact('countries'));
            }else{
                abort(403, "Why don't you go back and try again when you're feeling more heroic?");
            }
        }else{
            return redirect()->route('login');
        }
    }
    public function countryStore(Request $req){
        if(Auth::check()){
            if(Auth::User()->role==1){
                $countries = new country();
                $countries->country_name = $req->country_name;

                $countries->save();
                return redirect()->back()->with('success', 'Success');
            }else{
                abort(403, "Why don't you go back and try again when you're feeling more heroic?");
            }
        }else{
            return redirect()->route('login');
        }
    }
    public function countryActive($id){
        if(Auth::check()){
            if(Auth::User()->role==1){
                $country = country::find($id);
                if ($country) {
                    $country->status = 'active';
                    $country->save(); // Save the changes
                    return redirect()->back()->with('active', 'Country Activated');
                } else {
                    return redirect()->back()->with('error', 'Country not found');
                }
            }else{
                abort(403, "Why don't you go back and try again when you're feeling more heroic?");
            }
        }else{
            return redirect()->route('login');
        }
    }
    public function countryInactive($id){
        if(Auth::check()){
            if(Auth::User()->role==1){
                $country = country::find($id);
                if ($country) {
                    $country->status = 'inactive';
                    $country->save(); // Save the changes
                    return redirect()->back()->with('inactive', 'Country Inactivated');
                } else {
                    return redirect()->back()->with('error', 'Country not found');
                }
            }else{
                abort(403, "Why don't you go back and try again when you're feeling more heroic?");
            }
        }else{
            return redirect()->route('login');
        }
    }
}
