<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // function getHomePage($id){
    //     echo $id;
    // }

    function getHomePage(Request $req){
        echo $req->id;
        echo 32343434;
    }

    function getWelcomePage(){
        //return view('welcome');
        //return view('hello');
        //return view('user/index');

        $name = "Huong";
        $age = 12;
        $array = [1,2,5,5,6,54,3,53,'<h3>Huong</h3>'];
        //dd($array);
        return view('user.index',compact('name','age','array'));

        // return view('user.index',[
        //     'name'=>$name,
        //     'age_1'=>$age
        // ]);
        
    }

    function getRegister(){
        return view('user.register');
    }

    function postRegister(Request $req){
        //$data = $req->all();
        //$data = $req->only(['email','password']);
        //dd($data);
        //echo $req->email;
        //echo $req->input('email');
        
        echo $req->input('username','huong');
        
    }
    
}
