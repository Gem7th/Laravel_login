<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;

class TestController extends Controller
{
    /*
    public function index()
    {
        return view('/home');
    }*/
    public function send(Request $request){
        $data=new detail;

        $data->name=$request->name;
        $data->address=$request->address;
        $data->number=$request->number;

        $data->save();

        return redirect()->back();
    }
}
