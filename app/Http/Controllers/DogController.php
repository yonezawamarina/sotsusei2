<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Dog;

use Validator;  //この1行だけ追加！
use Illuminate\Http\Request;



class DogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //   return view('dogs.index');//
    
      //自分のuser_idが付与されている投稿だけ取得する
        $dogs = Dog::where('user_id',Auth::id())->orderBy('created_at', 'asc')->paginate(3);
      
        return view('dogs.index', compact('dogs'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('dogs.dog'); //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request);
        
        // Dog::create([
        //     'name' => $request->name,
        //     'user_id' => $request->user_id
        //     'breed' => $request->breed,
        //     'weight' => $request->weight,
        //     'gender' => $request->gender,
        //     'fix' => $request->fix,
        //     'age' => $request->age,
        //     'food' => $request->food,
        // ]);
        
        // return to_route('dogs.index');
        
        	  $dogs = new Dog;
        	  $dogs->name   = $request->name;
        	  $dogs->breed = $request->breed;
        	  $dogs->weight = $request->weight;
        	  $dogs->gender   = $request->gender;
        	  $dogs->fix   = $request->fix;
        	  $dogs->age   = $request->age;
        	  $dogs->food   = $request->food;
	          $dogs->user_id = Auth::id();//ここを追加
	          $dogs->save(); 
	          return redirect('/');
 
    }

    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dog  $dog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
       $dog = Dog::find($id);
       
       if($dog->gender === 0){
           $gender ='男の子';
           
       }else{
           $gender ='女の子';
       }

      if($dog->fix === 0){
               $fix ='している';
               
           }else{
               $fix ='していない';
           }


       
       return view('dogs.show',compact('dog','gender','fix'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dog  $dog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $dog = Dog::find($id);
        return view('dogs.edit',compact('dog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dog  $dog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        
        $dog = Dog::find($id);
        $dog->name   = $request->name;
        $dog->breed = $request->breed;
        $dog->weight = $request->weight;
        $dog->gender   = $request->gender;
        $dog->fix   = $request->fix;
        $dog->age   = $request->age;
        $dog->food   = $request->food;
        $dog->save();
        
        return to_route('dogs.index');
        
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dog  $dog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $dog = Dog::find($id);
        $dog->delete();
        
        return to_route('dogs.index');
        
    }
}
