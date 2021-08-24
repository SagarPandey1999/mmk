<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('front.index');
    }
    
    public function contact(Request $request){
        $data = new Contact();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->save();
        return redirect()->back();
    }
    
}
