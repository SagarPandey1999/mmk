<?php

namespace App\Http\Controllers;

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
}
