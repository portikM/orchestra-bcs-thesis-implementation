<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Lang;
use Auth;

class UserController extends Controller
{
    public function editSubmit(Request $request, $id)
    {
        if(Auth::user()->id != $id) {
            return redirect()->back();
        }

        $user = User::find($id);

        if(Hash::check($request->old_password, $user->password)) {
            $validation = $request->validate([
                'email' => [
                    'required',
                    Rule::unique('users')->ignore($user->id),
                ],
                'new_password' => 'nullable|min:8|confirmed',
                'old_password' => 'required'
            ]);

            if($request->new_password) {
                $user->password = Hash::make($request->new_password);
            }

            $user->update($request->all());

            return redirect()->back()->with(['user_submit_success' => '1']);
        } 

        return redirect()->back()->withErrors(['wrong_password' => Lang::get('auth.wrong_password')]);
    }
}
