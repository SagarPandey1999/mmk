<?php

namespace App\Http\Controllers;


use App\Models\Companys;
use App\Models\contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function contactindex(){
        $contact = contact::orderBy('created_at','DESC')->paginate(10);
        $container['contacts'] = $contact;
        return view('admin.contact.index',$container);
    }

    public function delete($id)
    {
        $data = contact::find($id);
        $data->delete();
        return redirect('contacts');
    }

    public function company(){
        $data = Companys::all();
        $container['companys'] = $data;
        return view('admin.company.index',$container);
    }

    public function companycreate(){
        return view('admin.company.create');
    }

    public function companyinsert(Request $request){
        $data = new Companys();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->description = $request->description;
        $data->phone = $request->phone;
        $data->title = $request->title;
        $data->link = $request->link;
        $data->save();
        return redirect('company');
    }

    public function companydelete($id){
        $data = Companys::find($id);
        $data->delete();
        return redirect('company');
    }

    public function companyedit($id){
        $data = Companys::find($id);
        $container['company'] = $data;
        return view('admin.company.edit',$container);
    }

    public function companyupdate(Request $request){
            $data = Companys::find($request->id);
            if($data){
                $data->title = $request->title;
                $data->name = $request->name;
                $data->email = $request->email;
                $data->description = $request->description;
                $data->phone = $request->phone;
                $data->link = $request->link;
                $data->save();
                return redirect('company');
            }
    }
}
