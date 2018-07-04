<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Slide;

class Eloquent extends Controller
{
    function index(){

        //select * from categories;
        // $data = Categories::all();
        //$data = Categories::get();
       
        // foreach($data as $c){
        //     echo $c->name;
        //     echo "<br>";
        // }
        //dd($data);
        //$data = Categories::where('id','<=',5);->get();
        // $data = Categories::select('name','id')
        //         ->whereBetween('id',[1,5])
        //         ->get();
        
        //dd($data);
        //INSERT INTO slide(image,title,link) VALUES('..','..','..')

        // $slide = new Slide;
        // $slide->image = "image02.png";
        // $slide->title = "Sale off 50%";
        // $slide->link = "http://....";
        // $slide->save();

        //UPDATE slide SET title="...." WHERE id = 7
        // $slide = Slide::find(7);
        //$slide = Slide::findOrFail(7); 

        // $slide = Slide::where('id',7)->first(); // null || obj
        // if($slide){
        //     $slide->title = "Sale off 100%";
        //     $slide->save();

        //     echo "success";
        // } 
        // else{
        //     echo "not found!";
        //}
        
        //DELETE FROM slide WHERE id =7
        //Slide::where('id',7)->delete();
        $slide = Slide::where('id',8)->first();
        if($slide){
            $slide->delete();
            echo "success";
        }
        else{
            echo "not found!";
        }
    }

}
