<?php

namespace App\Http\Controllers;

use App\CaseStudies;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class CaseStudiesController extends Controller
{
    public function index()
    {
        return view('case-studies.index');       
    }

    public function chromebook()
    {
        return view('case-studies.chromebook');       
    }

    public function hempblack()
    {
        return view('case-studies.hempblack');       
    }

    public function inkforgood()
    {
        return view('case-studies.inkforgood');       
    }

    public function lgfreestyler()
    {
        return view('case-studies.lgfreestyler');       
    }

    public function mkiosk()
    {
        return view('case-studies.mkiosk');       
    }
    
}