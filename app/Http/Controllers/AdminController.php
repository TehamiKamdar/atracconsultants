<?php

namespace App\Http\Controllers;

use App\Models\country;
use App\Models\consults;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function consultIndex(){
        $consults = consults::all();
        return view('admin.consult', compact('consults'));
    }
    public function consultRequest(Request $req){
        // return view('web.index');
        $consult = new consults();
        $consult->name = $req->name;
        $consult->phone = $req->phone;
        $consult->email = $req->email;
        $consult->message = $req->message;
        $consult->save();

        return redirect()->back()->with('success',"Your query has been passed to us. We'll get back to you shortly");
    }

    public function consultDetails($id){
        $consultId = $id;
        $consult = DB::table('consults')->where('id', $consultId)->first();

        return view('admin.details', ['consult' => $consult]);
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
                return view('admin.countries');
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
}
