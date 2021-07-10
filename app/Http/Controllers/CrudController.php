<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;


class CrudController extends Controller
{
   public function store(Request $request){
     $request->validate([
        'name'=> 'required',
        'age'=>'required',
        'color'=>'required',
     ]);

    $Nikki = Crud::Create([
         'name'=>$request->get('name'),
         'age'=>$request->get('age'),
         'color'=>$request->get('color')
     ]);

     $Nikki->save();
    }

    public function index(){
        return view ('dashboard');
        
    }

    public function read(){
        $products = Crud::all();
        $i=1;
        return view ('read',compact('products', 'i'));
    }

    public function edit($id){
        $pro=Crud::findOrFail($id);
        return view ('edit', compact('pro'));
    
    }
    public function update(Request $request, $id){
        $request->validate([
            'name'=> 'required',
            'age'=>'required',
            'color'=>'required',
         ]);

         Crud::find($id)->update($request->all());

    }

    public function delete($id){
        Crud::find($id)->delete();
        return redirect()->route('read');
    }
   


}
