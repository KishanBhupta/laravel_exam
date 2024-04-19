<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('home');
    }

    public function home(){
        $stud = student::all();
        return view('welcome',compact('stud'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // dd("ge");
        $data = $request->validate(
            [
                'name'=>'required',
                'hobbie'=>'required',
                'gender'=>'required',
                'city'=>'required'
            ]
         
        );

        $stud = new student();
        $stud->name = $data['name'];
        $stud->hobbies = implode(',', $data['hobbie']);
        $stud->gender = $data['gender'];
        $stud->city = $data['city'];
        // dd($stud);
        $stud->save();

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = student::find($id);
        // dd($data);
        $hobbi = explode(',', $data->hobbies);
        
        $data->hobbies = $hobbi ;
        // dd($data);
        return view('edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request , $id)
    {
         $data = student::find($id);
         $data->name = $request->name;
         $data->gender = $request->gender ; 
         $data->city = $request->city;
         $data->hobbies = implode(',',$request->hobbie);
         $data->save();
         return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = student::where('id',$id)->delete();
        return redirect()->back();
    }
}
