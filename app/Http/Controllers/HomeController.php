<?php

namespace App\Http\Controllers;
use App\Models\Ticket;
use illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isActive');
    }

    /**
     * Show the App\Modelslication dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->role === 'Admin') {
            return view('tickets.index',['tickets'=>Ticket::all()]);
        } else {
            return view('home');
        }
    }
}
