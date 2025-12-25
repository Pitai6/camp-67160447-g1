<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    private $myvalue;
    protected $myvalue2;
    public $myval = "";

    //Constructor
    //Mycontroller()

    Function __constrct(){

    }

    function index(){
        return view('myview.index');
    }

    function info(){
        return view('myview.info');
    }

    function calculate(Request $req){
        echo $req->input('mynumber');
        $data['num'] = $req->input('mynumber');
        return view('myview.calculate',$data);
    }
    function html101(Request $req){
        $data = $req->all();
        return view('html101',compact('data'));
    }

}
