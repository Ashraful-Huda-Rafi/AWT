<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Http\Requests\StoreRegistrationRequest;
use App\Http\Requests\UpdateRegistrationRequest;
use Illuminate\Http\Request;
use Session;

class RegistrationController extends Controller
{

    public function index()
    {
        return view('registration');
    }

    public function registration(Request $request)
    {

        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'dob' => 'required',
                'role' => 'required',
                'password' => 'required',
                'confirm_password' => 'required'
            ]
        );
        // echo"<pre>";
        // print_r($request->all());

        $registration = new Registration;
        $registration->name = $request->name;
        $registration->email = $request->email;
        $registration->dob = $request->dob;
        $registration->role = $request->role;
        $registration->password = $request->password;
        $registration->confirm_password = $request->confirm_password;

        $registration->save();


        return redirect(route('login'));
    }


    public function profile()
    {


        return view('user.profile');
    }

    public function userList(Request $request)
    {
        $id = $request->Session()->get('logIn');
        $user = Registration::where('id', '=', $id)->first();
        return view('user.list', compact("user"));
    }

    public function login()
    {
        return view('login');
    }

    public function plogin(Request $request)
    {

        $request->validate(
            [
                'name' => 'required',
                'password' => 'required'

            ]
        );

        $user = Registration::where('name', $request->name)
            ->where('password', $request->password)
            ->first();



        if ($user && $user->role == 'admin') {

            $request->session()->put('logIn', $user->name);
            return redirect()->route('admindash');
        } elseif ($user && $user->role == 'user') {
            $request->session()->put('logIn', $user->name);
            return redirect()->route('profile');
        } else
            return back();
    }

    public function edit(Request $request)

    {

        $user = Registration::where('id', $request->id)->first();

        return view('user.edit')->with('user', $user);
    }



    public function editSubmit(Request $request)

    {

        $user = Registration::where('id', $request->id)->first();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->dob = $request->dob;
        $user->password = $request->password;

        $user->save();

        return redirect()->route('profile');
    }

    public function admindash()
    {
        return view('admin.admindash');
    }

    public function logout()
    {
        session()->forget('logIn');
        return redirect()->route('login');
    }
}
