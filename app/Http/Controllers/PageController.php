<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function traditional()
    {
        return view('traditional');
    }

    public function interior()
    {
        return view('interior');
    }

    public function process()
    {
        return view('process');
    }

    public function offer()
    {
        return view('offer');
    }

    public function contactus()
    {
        return view('contactus');
    }

    public function team()
    {
        return view('team');
    }



}
