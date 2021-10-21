<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\models\Item;


class ItemController extends Controller
{
    public function index()
    {
 
        return view('sample.index');
    }


    public function show()
    {
        $items=DB::table('items')
      ->select('id','name', 'category_name', 'price')
      ->get();
        return view('sample.model', compact('items'));
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
                return view('sample.edit',compact('item'));
    }

    public function update(Request $request,$id) {
                    $item = Item::find($id);
                    $item['name']=$request->input('name');
                    $item['category_name']=$request->input('category_name');
                    $item['price']=$request->input('price');
                    $item->update( );
                    return redirect('sample/model');
    }

    public function destroy($id)
  {
    $item=Item::find($id);

    $item->delete();

    return redirect('sample/model');

}

}