<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Http\Requests\StoreRegistrationRequest;
use App\Http\Requests\UpdateRegistrationRequest;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register');
    }

    public function register(Request $request)
    {

        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'dob' => 'required',
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
        $registration->password = md5($request->password);
        $registration->confirm_password =md5($request->confirm_password);

        $registration->save();

        echo"<pre>";
        print_r($request->all());
        // return redirect (route('home'));
        
        }

        public function contact()
        {
            return view('contact');
        }

        public function home()
        {
            return view('home');
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
           return view('login');
        }

        public function pcontact(Request $request)
        {
            $request->validate(
                [
                    'name' => 'required',
                    'phoneno' => 'required'
                  
                ]
                );
           return view('contact');
        }
}
