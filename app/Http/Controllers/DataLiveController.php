<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DataLiveController extends Controller
{
    public function index()
    {
       $data = User::orderBy('id','desc')->get();
       return view('welcome',compact('data'));
    }
}
