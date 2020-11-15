<?php

namespace App\Http\Controllers;

use App\Models\Trainingone;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function home(){
        $trainingone = Trainingone::all();
        //dd($trainingone);
       
        return view('home',['trainingone'=>$trainingone]);
        //    $title ="Todo | Home";
        //    return view('home',['name'=>'new era','title'=>$title]);
    }
    public function store(Request $request){
        //dd($request);
        //dd($request->post('title'));
        $validatedData = $request->validate([
            'title'=> 'required|max:124'
        ]);
        // dd($validatedData);
        Trainingone::create($validatedData); //Mass assiging for the below steps
        // $trainingone = new Trainingone ();
        // $trainingone->title = $request->post('title');
        // $trainingone->save();
        return redirect(route('home'));
        //return back(); // redirecting the data,db 
    }
    public function edit(Trainingone $trainingone){
        //dd($trainingone); 
        // $trainingone = Trainingone::find($id);
        // dd($trainingone);
        // return view('update',['trainingone'=>$trainingone]);
        
        return view('update',compact('trainingone'));

    }
    public function update(Request $request,Trainingone $trainingone){
        $validatedData = $request->validate([
            'title'=> 'required|max:124'
        ]);
        //dd($validatedData);
        $trainingone->title=$validatedData['title'];
        $trainingone->save();
        return redirect(route('home'));
    }
    public function delete(Trainingone $trainingone){
    $trainingone->delete();
    return back();

    }
}
