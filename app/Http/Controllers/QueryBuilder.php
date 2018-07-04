<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class QueryBuilder extends Controller
{
    //insert: insert()
    //update: where()->update([]);
    //delete: where()->delete();

    //select()

    function index(){
        //SELECT * FROM categories
        //$data = DB::table('categories')->get();

        // $data = DB::table('categories')
        //         ->orderBy('id','DESC')->get();

        // $data = DB::table('categories')
        //         ->orderBy('id','DESC')
        //         ->limit(5) //limit 0,5
        //         ->get();
        // $data = DB::table('categories')
        //         ->orderBy('id','DESC')
        //         ->skip(5) 
        //         ->take(10)  //limit 5,10
        //         ->get();

        // $data = DB::table('categories')
        //         ->where('id',14)
        //         ->get();

        // $data = DB::table('categories')
        //         ->where('id','<',14)
        //         ->get();

        // where id>=1 and id<=5
        // $data = DB::table('categories')
        //         ->where('id','>=',1)
        //         ->where('id','<=',5)
        //         ->get();

        // $data = DB::table('categories')
        //         ->where([
        //             ['id','>=',1],
        //             ['id','<=',5]
        //         ])->get();

        // id>=1 and id<=5
        // $data = DB::table('categories')
        //         ->whereBetween('id',[1,5])->get();
        
        // 2,5,6,8,1
        $data = DB::table('categories')
                ->whereIn('id',[1,2,6,8,5,9])->get();

        //id =1 or id=5
        // $data = DB::table('categories')
        //         ->where('id','=',1)
        //         ->orWhere('id','=',5)
        //         ->get();

        // $data = DB::table('categories')
        //         ->where('name','like',"%iPhone%")
        //         ->get();

        // $data = DB::table('categories')
        //         ->where('id',14)
        //         ->get();

        //echo $data[0]->name;
        // $data = DB::table('categories')
        //         ->where('id',14)
        //         ->first();
        // echo $data->name;

        //select id, name from ...
        // $data = DB::table('categories')
        //     ->select('id','name')
        //     ->where('id',14)
        //     ->first();

        // $data = DB::table('categories as c')
        //         ->select('p.name as tenSP','c.name as tenloai')
        //         ->join('products as p','p.id_type','=','c.id')
        //         ->get();


        // $data = DB::table('categories as c1')
        //         ->select('c2.name as cap2', 'c1.name as cap1')
        //         ->join('categories as c2','c2.id_parent','=','c1.id')
        //         ->where('c1.name','like','%Iphone%')
        //         ->get();

        // $data2 = DB::table('categories as c1')
        //         ->select('c2.name as cap2', 'c1.name as cap1')
        //         ->join('categories as c2',function($join){
        //             $join->on('c2.id_parent','=','c1.id');
        //             $join->where('c1.name','like','%Iphone%');
        //         })->get();
           
        // dd($data2);

        //thống kê sp theo loại 
        /**
         * iphone X:  6
         * phu kien: 10
         */

        // SELECT c.name as tenloai, count(p.id) as soluong
        // FROM categories as c
        // INNER JOIN products as p
        // ON c.id = p.id_type
        // GROUP BY c.name

        $data = DB::table('categories as c')
                ->selectRaw('c.name as tenloai, count(p.id) as soluong')
                ->join('products as p',function($join){
                    $join->on('c.id','=','p.id_type');
                })
                ->groupBy('c.name')
                ->get();

        $data2 = DB::select('SELECT c.name as tenloai, count(p.id) as soluong
                        FROM categories as c
                        INNER JOIN products as p
                        ON c.id = p.id_type
                        GROUP BY c.name');
        dd($data2);
    }
}
