<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
    	return view('pages.index');
    }

    public function about(){
        return view('pages.about');
    }

    public function agent()
    {
    	return view('pages.agent');
    }

    public function agents()
    {
    	return view('pages.agents');
    }

    public function blog()
    {
    	return view('pages.blog');
    }


    public function contact()
    {
    	return view('pages.contact');
    }


    public function listing()
    {
    	return view('pages.listing');
    }


     public function login()
    {
    	return view('pages.login');
    }


    public function post()
    {
    	return view('pages.post');
    }


     public function search()
    {
    	return view('pages.searchresults');
    }


}
