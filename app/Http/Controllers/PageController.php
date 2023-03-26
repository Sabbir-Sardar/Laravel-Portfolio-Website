<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('front.index');
    }
    public function admin_dashboard(){
        return view('admin.dashboard');
    }
    public function admin_services(){
        return view('admin.services');
    }
    public function admin_portfolio(){
        return view('admin.portfolio');
    }
    public function admin_about(){
        return view('admin.about');
    }
    public function admin_contact(){
        return view('admin.contact');
    }
}
