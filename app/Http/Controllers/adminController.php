<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class adminController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function login(){
        return view('admin.login');
    }

    public function storeadmin(Request $request){
        $user=new User();
        $user->id=$request->id;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->save();
        return redirect(route('viewadmin'))->with('errormessage','Admin Added Successfully');
    }

    public function addadmin(){
        return view('admin.addadmin');
    }

    public function deleteadmin($id){
        User::find($id)->delete();
        Auth::logout();
        return redirect(route('login'))->with('message','Your admin account has been deleted Successfully');
    }



    public function viewusers(){
        return view('admin.viewusers');
    }


    public function viewadmin(){
        $users=User::all();
        return view('admin.viewadmins',compact('users'));
    }
}
