<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function house(){
      return view("home");
    }
    public function index(){
      $title = 'Home Page';
      $h1 = '<h1>Home Page</h1>';
      return view('/vlad',compact('title','h1'));
    }
}
