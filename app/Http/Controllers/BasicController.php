<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function faq()
    {
        return view('navigations.faq');
    }

    public function pricing()
    {
        return view('navigations.pricing');
    }

    public function support()
    {
        return view('navigations.support');
    }

    public function policy()
    {
        return view('misc.privacypolicy');
    }

    public function term()
    {
        return view('misc.terms&conditions');
    }
}
