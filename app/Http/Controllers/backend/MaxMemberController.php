<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MaxMember;
use App\Models\MaxAdmin;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use Symfony\Component\Console\Input\Input;

class MaxMemberController extends Controller
{
    //
    public function index()
    {
        // Fetch all data from the max_member table
        $maxMembers = MaxMember::all();

        // // Return the data to a view
        return pr($maxMembers);
        // return view('max_members.index', compact('maxMembers'));
    }

    function register(Request $req)
    {

        // dd($req->input());
        //    echo  Crypt::encrypt("abc@123");
        // die;

        $admin = MaxAdmin::latest()->first();
        $userSecondPart = $admin->last_id;
        $admin->last_id++;
        $admin->save();

        $member = new MaxMember;

        $member->userid = env('APP_NAME_SHORT') . $userSecondPart . rand(100, 999);
        $member->user_address = uniqid(rand(1000, 9999));
        $member->sponsorid = $req->input("sponsorid");
        $member->firstname = $req->input("name");
        $member->email = $req->input("email");
        $password = rand(10000, 99999);
        $member->password = Crypt::encrypt($password);
        $member->country_code = $req->input("country_code");
        $member->phone = $req->input("phone");
        $member->save();
        // Example flash message
        // $req->session()->flash('message', 'This is a flash message');
        Session::flash('message', "User registered successfully! Your UserID & Password is: $member->userid , $password ");

        return redirect('register');
    }
    function login(Request $req)
    {

        // dd($req->input());
        // //    echo  Crypt::encrypt("abc@123");
        // die;

        $user = MaxMember::where("userid", $req->input('userid'))->get();

        $decpassword = Crypt::decrypt($user[0]->password);
        if (Crypt::decrypt($user[0]->password) == $req->input('password')) {
            return redirect('dash');
        }
        return $decpassword;
    }
}
