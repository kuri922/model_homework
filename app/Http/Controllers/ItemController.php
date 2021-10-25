<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\models\Item;


class ItemController extends Controller
{
    public function index(Request $request)
    {
        $items = item::all( );
        return view('sample.index',compact('items'));
    }

public function create( ) {
  $items = Item::get( );
  return view('sample.create');
}

    public function show()
   {
  //     $items=DB::table('items')
  //    ->select('id','name', 'category_name', 'price')
  // ->get();
      $items = Item::get( );
         return view('sample.indexl', compact('items'));
     }


    public function store(Request $request){

                $item= new Item( );
                $item['id']=$request->input('id');
                 $item['name']=$request->input('name');
                 $item['category_name']=$request->input('category_name');
                 $item['price']=$request->input('price');
                 $item->save();
                 $items = item::all( );
                 return view('sample.index',compact('items'));
    
            
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
                    return redirect('sample/index');
    }

    public function destroy($id)
  {
      
                    $item=Item::find($id);
                    //  $item->delete();
                    $item->forceDelete( );
                    return redirect( ) ->to('sample/index');

}

}