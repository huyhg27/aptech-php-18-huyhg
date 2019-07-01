<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Mail\Message;

class UserController extends Controller
{
    function index(){
        $users = DB::table('users')->get();
        return view('users.index', ['users' => $users]);
    }
    function show($id){
        $user = DB::table('users')->where('id',$id)->get();
        return view('users.show', ['user' => $user[0]]);
    }
    function create(){
        return view('users.create');
    }

    function store(){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        DB::table('users')->insert([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password),
            ]);
        
        $users = DB::table('users')->get();
        return view('users.index', ['users' => $users]);
    }

    function destroy($id){
        DB::table('users')->where('id',$id)->delete();
        $users = DB::table('users')->get();
        return view('users.index', ['users' => $users]);
    }
    function edit($id){
        $user = DB::table('users')->where('id',$id)->get();
        return view('users.edit', ['user' => $user[0]]);
    }
    function update($id){
        $name = $_POST['name'];
        $email = $_POST['email'];
        DB::table('users')
            ->where('id', $id)
            ->update(['name' => $name, 'email' => $email]);

        session()->flash('message','Successfully Updated');
        
        $user = DB::table('users')->where('id',$id)->get();
         return view('users.edit', ['user' => $user[0]]);

        
    }

}
