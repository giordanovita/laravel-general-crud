<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matche;

class MainController extends Controller
{
   public function home(){

        $matches = Matche::all();

       return view('pages.home', compact('matches'));
   }

   public function show($id){

    $match = Matche::findOrFail($id);

    return view('pages.show', compact('match'));
}

    public function create(){
        return view('pages.create');
    }

    public function store(Request $request){
        $validate = $request -> validate

      ( [
          'team1' => 'required|max:128',
          'team2' => 'required|max:128',
          'point1' => 'required|integer',
          'point2' => 'nullable|integer',
          'result' => 'nullable|integer',
       ]);

       $match=Matche::create($validate);
       return redirect() -> route('show', $match -> id);
    }


    public function edit($id){

        $match = Matche::findOrFail($id);
    
        return view('pages.edit', compact('match'));
    }

    public function update(Request $request,$id){

        $match = Matche::findOrFail($id);
    
        $validate = $request -> validate

        ( [
            'team1' => 'required|max:128',
            'team2' => 'required|max:128',
            'point1' => 'required|integer',
            'point2' => 'nullable|integer',
            'result' => 'nullable|integer',
         ]);
  
         $match = Matche::findOrFail($id);
         $match ->update($validate);         
         return redirect() -> route('show', $match -> id);
    }

    public function delete($id){
        $match = Matche::findOrFail($id);
        $match -> delete();
        return redirect() -> route('home');
    }
}
