<?php

namespace App\Http\Controllers\owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OwnerDashboardController extends Controller
{
    public function index()
        {
            return view('owner.dashboard');
        }
    public function changePassword(){
        return view('owner.changePassword');
    } 
    public function changePasswordPost(Request $request){

    }
    public function viewBankDetails(){
       return view('owner.bankDetails');
    }
    public function bankDetailsPost(Request $request){

    }
    public function viewEditProfile(){
        return view('owner.viewEditProfile'); 
    }
}
