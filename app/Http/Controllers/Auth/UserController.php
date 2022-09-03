<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendNewUser;

class UserController extends Controller
{
    // Login Function
    public function signin(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect('/login')
                ->withErrors($validator)
                ->withInput($request->all());
        }

        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password'], 'role_id' => '1', 'status' => '1'])) {

            return redirect()->intended(route('admindashboard'));
        }

        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password'], 'role_id' => '2', 'status' => '1'])) {

            return redirect()->intended(route('userdashboard'));
        }
        \Session::flash('warning_message', 'These credentials do not match our records.');

        return redirect()->back();
    }

    //Save Users Function
    public function savelogin(Request $request)
    {
        // Validation
        $this->validate($request, [
            'fullname' => 'required',
            'businessname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required|min:4',
        ]);

        // Save Record into user DB
        $user = new User();
        $user->fullname = $request->input('fullname');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->role_id = 2;
        $user->status = 0;
        $user->save();

        // Save Record into picture DB
        $profile = new Profile();
        $profile->user_id = $user->id;
        $profile->fname = '';
        $profile->lname = '';
        $profile->businessname = $request->input('businessname');
        $profile->phone = $request->input('phone');
        $profile->save();

        $this->email = ['isaacchinonsogift@gmail.com'];
        
        Mail::to($this->email)->send(new SendNewUser($user));

        Auth::login($user);

        $user = Auth::user();

        \Session::flash('Success_message', 'You have successfully registered');

        return redirect()->route('userdashboard');
    }

    // Update profile function
    public function updateprofile(Request $request, $id)
    {
        $user = Auth::user();
        $profile = Profile::find($id);
        // Validation
        $this->validate($request, array(
            'fname' => 'required',
            'lname' => 'required',
            'phone' => 'required',
        ));


        $profile = Profile::find($id);

        $profile->user_id = $user->id;

        $profile->fname = $request->input('fname');

        $profile->lname = $request->input('lname');

        $profile->phone = $request->input('phone');

        $profile->save();

        \Session::flash('Success_message', '✔ profile Updated Succeffully');

        return back();
    }

    // Logout Function
    public function logout()
    {
        $user = Auth::user();

        Auth::logout();
        return redirect()->route('login');
    }

    public function activateuser($id)
    {

        User::where(['id' => $id])
            ->update(array('status' => 1));

        \Session::flash('Success_message', 'User Activated Successfully');

        return back();
    }

    public function deactivateuser($id)
    {

        User::where(['id' => $id])
            ->update(array('status' => 0));

        \Session::flash('Success_message', 'User Deactivated Successfully');

        return back();
    }
}
