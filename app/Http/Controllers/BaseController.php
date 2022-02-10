<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Notice;
use App\Models\Teacher;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function __construct()
    {
        view()->share('notices', Notice::take(8)->orderBy('id', 'desc')->get());
        view()->share('events', Event::take(5)->orderBy('id', 'desc')->get());
        view()->share('teachers', Teacher::all());
    }

    public function index()
    {
        return view('index');
    }

    public function aboutUs()
    {
        return view('about');
    }

    public function contactUs()
    {
        return view('contact');
    }

    public function faq()
    {
        return view('faq');
    }

    public function privacyPolicy()
    {
        return view('privacy-policy');
    }

    public function termsOfUse()
    {
        return view('terms-conditions');
    }

    public function event()
    {
        return view('event');
    }

    public function course()
    {
        return view('course');
    }
}
