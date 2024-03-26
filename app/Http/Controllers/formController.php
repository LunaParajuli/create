<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form;

class formController extends Controller
{
    public function store(Request $request){

        $data = $request->validate([
            'name'=>'required',
            'contact'=>'required|numeric',
            'address'=>'required',
            'email'=>'required',
            'gender'=>''
        ]);
       $newform = form::create($data);
     //  return redirect(route('dashboard.store'));
    }
    public function name(){
        return view('name');
    }

}
