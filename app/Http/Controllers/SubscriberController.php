<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use View;
use Auth;
use Exception;

class SubscriberController extends Controller
{

    public function system($id)
    {
        if(!Auth::guard('admin')->check()) {
            if(Auth::user()->id != $id || !Auth::user()->subscriber) {
                return redirect()->back();
            }
        }

        return View::make('user.subscriber-system');
    }
}
