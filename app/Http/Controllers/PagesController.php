<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Job;
class PagesController extends Controller
{
    public function home() {
        $desktop_jobs = Job::where('category', 2)->limit(5)->orderBy('id', 'desc')->get();
        $web_jobs = Job::where('category', 1)->limit(5)->orderBy('id', 'desc')->get();
        $mobile_jobs = Job::where('category', 3)->limit(5)->orderBy('id', 'desc')->get();
        $network_jobs = Job::where('category', 4)->limit(5)->orderBy('id', 'desc')->get();
        $system_jobs = Job::where('category', 5)->limit(5)->orderBy('id', 'desc')->get();
        return view('home', compact('desktop_jobs', 'web_jobs', 'mobile_jobs', 'network_jobs', 'system_jobs'));
    }

    public function about() {
        return view('about');
    }

    public function web() {
        $web_jobs = Job::where('category', 1)->orderBy('id', 'desc')->get();
        return view('web', compact('web_jobs'));
    }

    public function desktop() {
        $desktop_jobs = Job::where('category', 2)->orderBy('id', 'desc')->get();
        return view('desktop', compact('desktop_jobs'));
    }

    public function mobile () {
        $mobile_jobs = Job::where('category', 3)->orderBy('id', 'desc')->get();
        return view('mobile', compact('mobile_jobs'));
    }

    public function network() {
        $network_jobs = Job::where('category', 4)->orderBy('id', 'desc')->get();
        return view('network', compact('network_jobs'));
    }

    public function system() {
        $system_jobs = Job::where('category', 5)->orderBy('id', 'desc')->get();
        return view('system', compact('system_jobs'));
    }
}
