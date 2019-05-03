<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use View;
use Auth;
use Exception;

use App\User;

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

        return View::make('user.subscriber-system')->with(['currentUser' => $currentUser]);
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

        return View::make('user.subscriber-edit')->with(['currentUser' => $currentUser]);
    }

    public function add($id)
    {
        if(!Auth::guard('admin')->check()) {
            if(Auth::user()->id != $id || Auth::user()->subscriber) {
                return redirect()->back();
            } else {
                if(User::find($id)->subscriber) {
                    return redirect()->back();
                }
            }
        }

        $currentUser = User::find($id);

        return View::make('user.subscriber-edit')->with(['currentUser' => $currentUser]);
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

        return View::make('user.subscriber-info')->with(['currentUser' => $currentUser]);
    }
}
