<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ChangePasswordController extends Controller
{
    public function index(){
        return view('auth.passwords.change');
    }

    public function changepassword(Request $request){
        $this->validate($request,[
            'oldpassword'=>'required',
            'password'=>'required|confirmed'
        ]);
        $hashedPassword=Auth::user()->password;
        if(Hash::check($request->oldpassword,$hashedPassword)){
            $user=User::find(Auth::id());
            $user->password=Hash::make($request->password);
            $user->save();
            Auth::logout();
            return redirect()->route('login')->with('message','Password is changed Successfully');
        }else{
            return redirect()->back()->with('errormessage',"Current Password is invalid");
        }
        return view('auth.passwords.change');
    }
}
