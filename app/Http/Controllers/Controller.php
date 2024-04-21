<?php

namespace App\Http\Controllers;

use App\Models\Tickets;

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

    public function store (Request $request)
    {
        Ticket::create($request->all());

        return redirect()->route('ticket')->with('success', 'Ticket added Successfully');
        
    }
}