<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use View;
use Auth;
use Exception;
use Carbon\Carbon;

use App\User;
use App\Subscriber;
use App\System;
use App\Country;

class SubscriberController extends Controller
{
    public function system($id)
    {
        if(!Auth::guard('admin')->check()) {
            if(Auth::user()->id != $id || !Auth::user()->subscriber) {
                return redirect()->back();
            }
        } else {
            if(!User::find($id)->subscriber) {
                return redirect()->back();
            }
        }

        $currentUser = User::find($id);

        $subscriber = Subscriber::where('user_id', $id)->first();

        $systems = Subscriber::find($subscriber->user_id)->systems;

        return View::make('user.subscriber-system')->with(['currentUser' => $currentUser])->with(['systems' => $systems]);
    }

    public function statistics($id)
    {
        if(!Auth::guard('admin')->check()) {
            if(Auth::user()->id != $id || !Auth::user()->subscriber) {
                return redirect()->back();
            }
        } else {
            if(!User::find($id)->subscriber) {
                return redirect()->back();
            }
        }

        $currentUser = User::find($id);

        // calculating optimal angle for solar panels

        $subscriber = Subscriber::where('user_id', $id)->first();
        $country = Country::find($subscriber->country_id);
        $currentMonth = Carbon::now()->month;

        if ($currentMonth >= 5 && $currentMonth <= 10) {
            // formula for tilt angle for summer
            if ($country->hemisphere == "N") {
                $angle = $country->latitude - 15;
            } else {
                $angle = $country->latitude + 15;
            }
        } else {
            // formula for tilt angle for winter
            if ($country->hemisphere == "N") {
                $angle = $country->latitude + 15;
            } else {
                $angle = $country->latitude - 15;
            }
        }

        return View::make('user.subscriber-statistics')->with(['currentUser' => $currentUser])->with(['country' => $country])->with(['angle' => $angle]);
    }

    public function edit($id)
    {
        if(!Auth::guard('admin')->check()) {
            if(Auth::user()->id != $id || !Auth::user()->subscriber) {
                return redirect()->back();
            }
        } else {
            if(!User::find($id)->subscriber) {
                return redirect()->back();
            }
        }

        $currentUser = User::find($id);

        $subscriber = Subscriber::where('user_id', $id)->first();

        return View::make('user.subscriber-edit')->with(['currentUser' => $currentUser])->with(['subscriber' => $subscriber]);
    }

    public function editSubmit(Request $request, $id)
    {   
        if(!Auth::guard('admin')->check()) {
            if(Auth::user()->id != $id) {
                return redirect()->back();
            }
        }

        $subscriber = Subscriber::where('user_id', $id)->first();

        $subscriber->update($request->all());

        return redirect()->back()->with(['subscriber_submit_success' => '1']);
    }

    public function add($id)
    {
        if(Auth::guard('admin')->check()) {
            return redirect()->back();
        }

        if(Auth::user()->id != $id || Auth::user()->subscriber) {
            return redirect()->back();
        }

        $currentUser = User::find($id);

        $countries = Country::all(); 

        return View::make('user.subscriber-edit')->with(['currentUser' => $currentUser])->with(['countries' => $countries]);
    }

    public function addSubmit(Request $request, $id)
    {
        if(Auth::user()->id != $id || Auth::user()->id != $request->id || Auth::user()->id != $request->user_id) {
            return redirect()->back();
        }

        $user = User::find(Auth::user()->id);

        Subscriber::create($request->all());

        $user->subscriber = '1';
        $user->save();

        return redirect('subscriber-edit/'.$id)->with(['subscriber_submit_success' => '1']);
    }

    public function info($id)
    {
        if(!Auth::guard('admin')->check()) {
            if(Auth::user()->id != $id || !Auth::user()->subscriber) {
                return redirect()->back();
            }
        } else {
            if(!User::find($id)->subscriber) {
                return redirect()->back();
            }
        }

        $currentUser = User::find($id);

        $subscriber = Subscriber::where('user_id', $id)->first();

        return View::make('user.subscriber-info')->with(['currentUser' => $currentUser])->with(['subscriber' => $subscriber]);
    }
}
