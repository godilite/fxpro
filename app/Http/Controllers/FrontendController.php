<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
public function contact()
    {
     return view('frontend.contact');
    }

public function about()
    {
      return view('frontend.about');  # code...
    }
}
