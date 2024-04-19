<?php

namespace App\Http\Controllers;

use App\Models\auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
   public function registration(){
    return view('registration');
   }
    public function login(){
    return view('login');
   }

   public function regiuser(Request $req){
    $data = $req->validate(
        [
            'name' =>'required',
            'email' =>'required',
            'password' => 'required',
        ]
    );
    // dd($data);

    $auth = new auth();
    $auth->name = $data['name'];
    $auth->email = $data['email'];
    $auth->password = \Hash::make($data['password']);
    $auth->save();
    // dd($auth);
   }

   public function loginuser(Request $req)
   {
    $data = $req->validate(
        [
            'email' =>'required',
            'password' => 'required',
        ]);

        $email = $data['email'];
        $password = $data['password'];
        $auth = auth::where('email',$email)->first();

        // dd($auth);
        if($auth){
            if(\Hash::check($password,$auth->password)){
                // session()->put('user', $auth->name);
                return redirect('/');

            }else{
                return redirect()->back()->with('error','Invalid Password');
            }
        }
   }



}
