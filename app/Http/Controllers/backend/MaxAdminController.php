<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MaxMember;
use Illuminate\Support\Facades\Session;


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
        // die;

        $member = new MaxMember;

        $member->userid = env('APP_NAME') . rand(100, 999);
        $member->user_address = uniqid();
        $member->sponsorid = $req->input("sponsorid");
        $member->firstname = $req->input("name");
        $member->email = $req->input("email");
        $member->password = $req->input("password");
        $member->country_code = $req->input("country_code");
        $member->phone = $req->input("phone");
        $member->save();
        // Example flash message
        // $req->session()->flash('message', 'This is a flash message');
        Session::flash('message', 'User registered successfully!');

        return redirect('register');
    }
}
