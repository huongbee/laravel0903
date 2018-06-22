<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

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
        
        //echo $req->input('username','huong');

        //fullname: required, min:10
        //email: required, email
        //password: required , min:6, max:50
        //confirm_password: same:password
        //

        $rule = [
            'fullname'=>'required|min:10',
            'email'=>'required|email',
            'password'=>'required|min:6|max:50',
            'confirm_password'=>'same:password'
        ];
        $trans = [
            'fullname.required' => 'Họ tên không được rỗng',
            'fullname.min' => 'Họ tên ít nhất :min kí tự',
            'confirm_password.same' => 'Mật khẩu không giống nhau'
        ];
        $validator = Validator::make($req->all(), $rule, $trans);

        if($validator->fails()){
            //return redirect()->route('register');
            return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
        }
        dd($req->all());
    }
    

    function getFormUpload(){
        return view('user/upload');
    }
    function postFormUpload(Request $req){
        // if($req->hasFile('image')){
        //     $image = $req->file('image');
        //     $name = $image->getClientOriginalName();
        //     $size = $image->getClientSize();
        //     $ext = $image->getClientOriginalExtension();
        //     $type = $image->getClientMimeType();
        //     //check file size
        //     //file type
        //     //rename
        //     $image->move('my-image', $name);
        //     return redirect()->back()->with('message','Upload thanh cong');
        // }
        // return redirect()->back()->with('message','Vui long chon file');

        // multiple 
        if($req->hasFile('image')){
            $image = $req->file('image');
            foreach($image as $i){
                $name = $i->getClientOriginalName();
                $size = $i->getClientSize();
                $ext = $i->getClientOriginalExtension();
                $type = $i->getClientMimeType();
                
                $i->move('my-image', $name);
            }
            return redirect()->back()->with('message','Upload thanh cong');
        }
        return redirect()->back()->with('message','Vui long chon file');
        // dd($image);
    }
}
