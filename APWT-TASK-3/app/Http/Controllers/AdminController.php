<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Http\Requests\StoreRegistrationRequest;
use App\Http\Requests\UpdateRegistrationRequest;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    // public function userlist()
    // {
    //     $user = Registration::where('role', 'user')->get();
    //     return view('admin.userlist')->with('user', $user);
    // }
    public function userlist()
    {

       $user = Registration::all();

       return view('admin.userlist',compact ('user'));

    }

   public function addUser()
    {
        return view('admin.addUser');
    }

    public function addUserSubmit(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'dob' => 'required',
            'password' =>'required',
            
        ],
       );

        
       $registration = new Registration;
       $registration->name = $request->name;
       $registration->email = $request->email;
       $registration->dob = $request->dob;
       $registration->role = "user";
       $registration->password = $request->password;
       $registration->confirm_password =$request->password;

       $registration->save();
       
    

        return redirect()->route('userlist');
    }

     public function editUser(Request $request)
    {
       $user = Registration::where('id',$request->id)->first();
        return view('admin.editUser')->with( 'user',$user);
    }

    public function editUserSubmit(Request $request)
    {
        $user =Registration::where('id', $request->id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->dob = $request->dob;
        $user->password = $request->password;
        $user->confirm_password = $request->password;
        $user->save();

        return redirect()->route('userlist');
    } 

    public function deleteUser(Request $request)
    {
        $user = Registration::where('id', $request->id);
        $user->delete();
        return redirect()->route('userlist');
        
    }
}
