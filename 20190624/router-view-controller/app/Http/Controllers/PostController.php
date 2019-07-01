<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    function show(){
        return '<h1>Be called from PostController</h1>';
    }
}
