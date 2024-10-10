<?php

namespace App\Http\Controllers;

use App\Models\country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function consultRequest(Request $req){
        // return view('web.index');
        
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
