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

    // public function technology()
    // {
    //     return view('services.technology');       
    // }

    // public function strategy()
    // {
    //     return view('services.strategy');       
    // }

    // public function show($slug)
    // {
    //     return view('new-developments.project-show', compact('project'));
    // }
    
}