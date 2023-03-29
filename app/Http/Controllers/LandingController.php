<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
{
    return view('landingview.index');
}

public function about()
{
return view('landingview.about');
}

public function TermsofUse()
{
return view('landingview.TermsofUse');
}

public function contact()
{
return view('landingview.contact');
}

public function PrivacyPolicy()
{
    return view('landingview.PrivacyPolicy');
}
}
