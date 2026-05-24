<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    // Book Now
    public function yachtCharter()
    {
        return view('home.yacht-charter');
    }

    public function boatel()
    {
        return view('home.yacht-charter');
    }

    // Boat Types
    public function BoatTypes($type)
    {
        return view('home.boat-types');
    }

    public function houseboats()
    {
        return view('pages.houseboats');
    }

    public function motorboats()
    {
        return view('pages.motorboats');
    }

    public function sailboats()
    {
        return view('pages.sailboats');
    }

    // Other Pages
    public function listYourBoat()
    {
        return view('home.list-your-boat');
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function help()
    {
        return view('home.help');
    }
    public function yeachtchater_details(){
        return view('home.yeachtchater_details');
    }
}