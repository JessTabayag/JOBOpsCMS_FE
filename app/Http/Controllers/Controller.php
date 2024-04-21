<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
    public function index()
    {
        return view('ticket.index');
    }
    
    public function create ()
    {
        return view('ticket.create');
    }
}