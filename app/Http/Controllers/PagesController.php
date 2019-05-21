<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to the JSys';
        return view('welcome')->with('title', $title);
    }
    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }
    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Point Of Sales', 'Inventory', 'Income Statement']
        );
        return view('pages.services')->with($data);
    }
    public function dash(){
        return view('pages.dash');
    }
    public function tos(){
        return view('pages.tos');
    }
}

