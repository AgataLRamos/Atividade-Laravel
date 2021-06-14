<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }


public function soma(){
    return view('pages.soma');
}

public function subtrai(){
    
    return view('pages.subtrai');
}






}
