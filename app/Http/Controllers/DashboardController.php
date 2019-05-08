<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use View;
use Auth;
use Exception;

use App\Subscriber;
use App\System;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        if(Auth::user()->subscriber) {
            $subscriber = Subscriber::where('user_id', Auth::user()->id)->first();

            $systems = Subscriber::find($subscriber->id)->systems;

            return view('user/dashboard')->with(['systems' => $systems]);
        }

        return view('user/dashboard');
    }
}
