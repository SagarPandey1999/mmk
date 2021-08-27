<?php

namespace App\Http\Controllers;


use App\Models\Companys;
use App\Models\contact;
use App\Models\Map;
use App\Models\Service;
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

    public function services(){
        $data = Service::all();
        $container['services'] = $data;
        return view('admin.service.index',$container);
    }

    public function servicecreate(){
        return view('admin.service.create');
    }

    public function serviceinsert(Request $request){
        $data = new Service();
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('serviceimage',$imagename);

            $data->image = $imagename;
            $data->name = $request->name;
            $data->description = $request->description;
            $data->link = $request->link;
            $data->save();
            return redirect('services');
    }

    public function servicedelete($id){
        $data = Service::find($id);
        $data->delete();
        return redirect('services');
    }

    public function serviceedit($id){
        $data = Service::find($id);
        $container['service'] = $data;
        return view('admin.service.edit',$container);
    }

    public function serviceupdate($id,Request $request){
        $data = Service::find($id);
        if($request->image){
            $image = $request->image;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('serviceimage',$imagename);

            $data->image = $imagename;
        }
            $data->name = $request->name;
            $data->description = $request->description;
            $data->link = $request->link;
            $data->save();
            return redirect('services');

    }

    public function map(){
        $map = Map::where('type','same')->first();
        $container['map'] = $map;
        return view('admin.map',$container);
    }

    public function mapinsert(Request $request){
        $maps = Map::where('type',$request->type)->first();
        if(!empty($maps)){
            $maps->delete();
        }
        
        $data = new Map();
        $data->iframes = $request->iframe;
        $data->link = $request->link;
        $data->mobileone = $request->mobileone;
        $data->mobiletwo = $request->mobiletwo;
        $data->emailone = $request->emailone;
        $data->emailtwo = $request->emailtwo;
        $data->facebook = $request->facebook;
        $data->twitter = $request->twitter;
        $data->instagram = $request->instagram;
        $data->linkedin = $request->linkedin;
        $data->type = $request->type;
        $data->save();

        $map = Map::where('type','same')->first();
        $container['map'] = $map;
        return view('admin.map',$container);
    }
}
