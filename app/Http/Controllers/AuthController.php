<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Pages
    |--------------------------------------------------------------------------
    */

    public function guestRegister()
    {
        return view('auth.register.guest');
    }

    public function ownerRegister()
    {
        return view('auth.register.owner');
    }

    public function partnerRegister()
    {
        return view('auth.register.partner');
    }


    public function storeGuest(Request $request)
    {
       // return $request->all();
        $request->validate([
            'first_name' => 'required|string|max:255',
            'username'   => 'required|unique:users,username',
            'email'      => 'required|email|unique:users,email',

            'password' => ['required','confirmed',Password::min(8)->mixedCase()->numbers()->symbols(),],

            'dob'        => 'required',
            'address'    => 'required',

            'number'     => 'required',

            'gender'     => 'required',

            'country'    => 'required',
            'state'      => 'required',
            'city'       => 'required',

            'profile_photo' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        DB::beginTransaction();

        try {

            /*
            |--------------------------------------------------------------------------
            | Upload Profile Photo
            |--------------------------------------------------------------------------
            */

            $photoName = null;

            if ($request->hasFile('profile_photo')) {

                $photoName = time() . '.' .
                    $request->profile_photo->extension();

                $request->profile_photo->move(
                    public_path('uploads/profile'),
                    $photoName
                );
            }

            /*
            |--------------------------------------------------------------------------
            | Create User
            |--------------------------------------------------------------------------
            */

            $user = User::create([
                'name' => $request->first_name . ' ' . $request->last_name,

                'username' => $request->username,

                'email' => $request->email,

                'user_type'=>'user',

                'password' => Hash::make($request->password),
            ]);

            /*
            |--------------------------------------------------------------------------
            | Create User Profile
            |--------------------------------------------------------------------------
            */

            UserProfile::create([
                'user_id' => $user->id,

                'first_name' => $request->first_name,

                'last_name' => $request->last_name,

                'dob' => date(
                    'Y-m-d',
                    strtotime(str_replace('/', '-', $request->dob))
                ),

                'address' => $request->address,

                'phone' => $request->number,

                'gender' => $request->gender,

                'country' => $request->country,

                'state' => $request->state,

                'city' => $request->city,

                'profile_photo' => $photoName,
            ]);

            DB::commit();

            return redirect()
            ->route('login')
            ->with(
                'success',
                'Welcome aboard! Your account has been successfully created. Please log in to get started.'
            );

        } catch (\Exception $e) {

            DB::rollBack();

            return redirect()
                ->back()
                ->with('error', $e->getMessage());
        }
    }
    public function storeOwner(Request $request)
    {
       // return $request->all();
       $request->validate([
        'first_name' => 'required|string|max:255',
        'username'   => 'required|unique:users,username',
        'email'      => 'required|email|unique:users,email',

        'password' => ['required','confirmed',Password::min(8)->mixedCase()->numbers()->symbols(),],

        'dob'        => 'required',
        'address'    => 'required',

        'number'     => 'required',

        'gender'     => 'required',

        'country'    => 'required',
        'state'      => 'required',
        'city'       => 'required',

        'profile_photo' => 'required|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    DB::beginTransaction();

    try {

        /*
        |--------------------------------------------------------------------------
        | Upload Profile Photo
        |--------------------------------------------------------------------------
        */

        $photoName = null;

        if ($request->hasFile('profile_photo')) {

            $photoName = time() . '.' .
                $request->profile_photo->extension();

            $request->profile_photo->move(
                public_path('uploads/profile'),
                $photoName
            );
        }

        /*
        |--------------------------------------------------------------------------
        | Create User
        |--------------------------------------------------------------------------
        */

        $user = User::create([
            'name' => $request->first_name . ' ' . $request->last_name,

            'username' => $request->username,

            'email' => $request->email,

            'user_type'=>'owner',

            'password' => Hash::make($request->password),
        ]);

        /*
        |--------------------------------------------------------------------------
        | Create User Profile
        |--------------------------------------------------------------------------
        */

        UserProfile::create([
            'user_id' => $user->id,

            'first_name' => $request->first_name,

            'last_name' => $request->last_name,

            'dob' => date(
                'Y-m-d',
                strtotime(str_replace('/', '-', $request->dob))
            ),

            'address' => $request->address,

            'phone' => $request->number,

            'gender' => $request->gender,

            'country' => $request->country,

            'state' => $request->state,

            'city' => $request->city,
            'description' => $request->description,

            'profile_photo' => $photoName,
        ]);

        DB::commit();

        return redirect()
        ->route('login')
        ->with(
            'success',
            'Welcome aboard! Your account has been successfully created. Please log in to get started.'
        );

        } catch (\Exception $e) {

            DB::rollBack();

            return redirect()
                ->back()
                ->with('error', $e->getMessage());
        }
    } 
    public function storePartnber(Request $request)
    {
        // return $request->all();
        $request->validate([
            'first_name' => 'required|string|max:255',
            'username'   => 'required|unique:users,username',
            'email'      => 'required|email|unique:users,email',

            'password' => ['required','confirmed',Password::min(8)->mixedCase()->numbers()->symbols(),],

            'dob'        => 'required',
            'address'    => 'required',

            'number'     => 'required',

            'gender'     => 'required',

            'country'    => 'required',
            'state'      => 'required',
            'city'       => 'required',

            'profile_photo' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        DB::beginTransaction();

        try {

            /*
            |--------------------------------------------------------------------------
            | Upload Profile Photo
            |--------------------------------------------------------------------------
            */

            $photoName = null;

            if ($request->hasFile('profile_photo')) {

                $photoName = time() . '.' .
                    $request->profile_photo->extension();

                $request->profile_photo->move(
                    public_path('uploads/profile'),
                    $photoName
                );
            }

            /*
            |--------------------------------------------------------------------------
            | Create User
            |--------------------------------------------------------------------------
            */

            $user = User::create([
                'name' => $request->first_name . ' ' . $request->last_name,

                'username' => $request->username,

                'email' => $request->email,

                'user_type'=>'partner',

                'password' => Hash::make($request->password),
            ]);

            /*
            |--------------------------------------------------------------------------
            | Create User Profile
            |--------------------------------------------------------------------------
            */

            UserProfile::create([
                'user_id' => $user->id,

                'first_name' => $request->first_name,

                'last_name' => $request->last_name,

                'dob' => date(
                    'Y-m-d',
                    strtotime(str_replace('/', '-', $request->dob))
                ),

                'address' => $request->address,

                'phone' => $request->number,

                'gender' => $request->gender,

                'country' => $request->country,

                'state' => $request->state,

                'city' => $request->city,

                'profile_photo' => $photoName,
            ]);

            DB::commit();

            return redirect()
            ->route('login')
            ->with(
                'success',
                'Welcome aboard! Your account has been successfully created. Please log in to get started.'
            );

        } catch (\Exception $e) {

            DB::rollBack();

            return redirect()
                ->back()
                ->with('error', $e->getMessage());
        }
    }  
}