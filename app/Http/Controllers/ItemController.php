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


    public function store(Request $request){

                $item= new Item( );
                 $item['name']=$request->input('name');
                 $item['category_name']=$request->input('category_name');
                 $item['price']=$request->input('price');
                 $item->save();

                 $items = item::all( );
                 return view('sample.model',compact('items'));
    }

    public function edit($id)
    {
                    $item = Item::find($id);
                return view('sample.edit') -> with('item , $item');
    }

    public function update(Request $request,$id) {
                    $item = Item::find($id);
                    $item->name = $request->input('name');
                    $item->category = $request->input('category');
                    $item->price = $request->input('price');
                    $item->save();
                    return redirect( 'sample.model');
    }

}

