<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Mail; 

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
        $user->last_seen = now();
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
            $user = User::select("*")->whereNotNull('last_seen')->orderBy('last_seen','DESC')->paginate(10);
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

    function forgetpassword(){
        return view('auth.forgetpassword');
    }

    function submitForgetPasswordForm(Request $request){
        $request->validate([
            'email' =>'required|email|exists:users',
        ]);

        // $token = String::random(64);
        $token = "safffsfdfv";

        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at'=> Carbon::now()
        ]);

        Mail::send('email.forgetPassword',['token' => $token], function($message) use($request){
            $message->to($request->email);
            $message->subject('Reset Password');
        });

        return back()->with('message', 'We have e-mailed your password reset link!');
    }
    
     function showResetPasswordForm($token) { 
        return view('auth.resetpassword', ['token' => $token]);
     }


     function submitResetPasswordForm(Request $request){
        //  dd($request);
            $request->validate([
                'email' =>'required|email|exists:users',
                'password' => 'required|string|min:6|confirmed',
                'password_confirmation' => 'required'
            ]);

            $updatePassword = DB::table('password_resets')
                        ->where([
                            'email' => $request->email,
                            'token' => $request->token
                        ])
                        ->first();

            if(!$updatePassword){
                return back()->withInput()->with('error', 'Invalid token!');
            }

            $user = User::where('email',$request->email)
                        ->update(['password'=> Hash::make($request->password)]);

            DB::table('password_resets')->where(['email' => $request->email])->delete();

            return redirect('/login')->with('message', 'Your password has been changed!');
     }
}
