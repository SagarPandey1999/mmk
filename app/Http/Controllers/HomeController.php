<?php

namespace App\Http\Controllers;

use App\Models\Companys;
use App\Models\contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $company = Companys::all();
        $container['companys'] = $company;
        return view('front.index',$container);
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
