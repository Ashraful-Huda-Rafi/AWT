<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class scontroller extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function teams()
    {
        return view('ourteams');
    }
    public function service()
    {
        $products = array(
            "Name: Rafi,
            Id: 11-58246-2
            ,dept: CSE",
            "Name: Nayem,
            Id: 12-58246-2
            ,dept: CSE",
            "Name: Jayed,
            Id: 13-85246-1
            ,dept: CSE"
        );
        return view('service')->with('products',$products);
        

    }
    
}
