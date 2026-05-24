<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function dashboard(){
        return view('guest.dashboard');
    }
    public function changePassword(){
        return view('guest.changePassword');
    }
    public function viewEditProfile(){
        return view('guest.viewEditProfile');
    }
}
