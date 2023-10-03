<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  function index()
  {
    $title = "Readiverse | Home";
    return view("home", compact("title"));
  }
}
