<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Item;

class ItemController extends Controller
{
    public function index()
    {
        return view('sample.index');
    }

// homework 1-1　DBから取る
    public function model( ) {
        $items = item::all( );
    return view('sample.model',compact('items'));
    }




    public function store(Request $request){

                $item= new Item( );
                 $item['name']=$request->input('name');
                 $item['category_name']=$request->input('category_name');
                 $item['price']=$request->input('price');
                 $item->save();

                 $items = item::all( );
                 return view('sample.result',compact('items'));


    }
}

