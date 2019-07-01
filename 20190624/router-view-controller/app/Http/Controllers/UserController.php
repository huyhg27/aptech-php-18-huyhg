<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function show(){
        $users = DB::table('ap_18_4.users')->get();
        return view('users-data', ['UsersKey'=>$users]);
    }
}
