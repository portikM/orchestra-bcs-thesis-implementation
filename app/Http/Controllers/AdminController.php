<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use View;
use Auth;
use Exception;

use App\User;
use App\Subscriber;
use App\System;
use App\SubscriberSystem;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application admin dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $subscribers = User::where('subscriber', !null)->get();

        return view('admin.admin')->with(['subscribers' => $subscribers]);
    }

    public function list()
    {
        $subscribers = User::where('subscriber', !null)->get();

        return View::make('admin.subscribers-list')->with(['subscribers' => $subscribers]);
    }

    public function register()
    {
        $subscribers = User::where('subscriber', !null)->get();

        $systems = System::all();

        return View::make('admin.register-system')->with(['subscribers' => $subscribers])->with(['systems' => $systems]);
    }

    public function registerSubmit(Request $request)
    {   
        if(!$request->subscriber_id) {
            return redirect()->back();
        }

        foreach($request->system_id as $system) {
            $subscriberSystem = new SubscriberSystem;
            $subscriberSystem->subscriber_id = $request->subscriber_id;
            $subscriberSystem->system_id = $system;
            $subscriberSystem->save();
        }

        return redirect()->back()->with(['register_system_success' => '1']);
    }
}
