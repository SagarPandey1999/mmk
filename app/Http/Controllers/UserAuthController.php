<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
    function login(){
        return view('auth.login');
    }   
    function register(){
        return view('auth.register');
    }

    function create(Request $request){
        // dd($request);           
        $request->validate([
                'name'=>'required',
                'email'=>'required| email|unique:users',
                'password'=>'required|min:5|max:12  '
        ]);
        
        $user = New User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $query = $user->save();

        if($query){
            return back()->with('success','You have been successfuly registered');
        }else{
            return back()->with('fail','Something went wrong'); 
        }
    }

    function check(Request $request){
        $request->validate([
           'email'=>'required|email',
           'password'=>'required|min:5|max:12' 
        ]);
        $user = User::where('email','=',$request->email)->first();
        if($user){
            if(Hash::check($request->password,$user->password)){
                    $request->session()->put('LoggedUser',$user->id);
                    return redirect('users');
            }else{
                return back()->with('fail','Invalid password'); 
            }
        }else{
            return back()->with('fail','No Account found for this email');
        }
    }

    function profile(){

        if(session()->has('LoggedUser')){
            $user = User::all();
            $container['users'] = $user;
        }
        return view('admin.user.index',$container);
    }

    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('login');
        }
    }

    function delete($id){
        if($id){
            $user = User::find($id);
            if($user){
                $user->delete();
            }    
            return redirect('users');
        }else{
            return back()->with('fail','Invalid ID'); 
        }
        
    }
}
