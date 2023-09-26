<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  function index()
  {
    $title = "Library App | Home";
    return view("home", compact("title"));
  }
}
