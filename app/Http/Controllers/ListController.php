<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ListController extends Controller
{
    //
    public function index(Request $request){
        $items=Person::all();
        return view('main',['items'=>$items]);
    }
    public function add(Request $request){
        Person::create([
            'list'=>$request->list
        ]);
        return redirect('/');
    }
    public function delete(Request $request){
        Person::find($request->id)->delete();  
        return redirect('/');
    }
        
    public function update(Request $request){
        $form=$request->list;
            Person::where('id', $request->id)->update( $form); 
            return redirect('/');
    }
    public function good(){
        return view('study');
    }
 }

   
    
