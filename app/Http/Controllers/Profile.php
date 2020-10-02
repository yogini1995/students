<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Userview;
use App\register;
use Illuminate\Support\Facades\DB;
use Auth;

class Profile extends Controller
{
    public function index()
    {

		 // $data=DB::table('users')->paginate(4);
         
          $data =Userview::orderBy('id', 'desc')->paginate(4);
          
          //print($data);


         //$data=DB::table('users')->orderBy('id', 'desc')->paginate(4);

		  return view('user',['data'=>$data]);
         
         }

         public function Search(Request $request)
         {
            
            $search =$request->get('search');
            $data=DB::table('users')->where('email','like','%'.$search.'%')->paginate(4);
            return view('user',['data'=>$data]);
         }
         






































public function login()
    {

         $data=DB::table('users')->paginate(4);
                   
        return view('login',['data'=>$data]); //uncomment this after some time
         
    }

public function login_submit(Request $req){
    $data=request()->validate(
            [
            
            'password'=>'required|min:4',
            'email'=>'required|email'
            ],
        
            [   
            'password.required' => 'Password is required should have minimun 4 characters',
            'email.required' => 'Email is required'

            ]); 


        $user = new Userview;
        $user -> id = $req->id ;
        $user -> name = $req->name ;
        $user -> password = $req->password ;
        $user -> email = $req->email ;
        echo $user->save();


   
        return redirect('userlist');


    //print_r($req->all());

}


/*
function show(Request $req)
    {
        $data=request()->validate(
            [
            'name'=>'required',
            'password'=>'required|min:4',
            'email'=>'required|email'
            ],
        
            [   'name.required'=>'Name is required',
                'password.required' => 'Password is required should have minimun 4 characters',
                'email.required' => 'Email is required'

            ]); 

        $user = new register;
        $user -> id = $req->id ;
        $user -> name = $req->name ;
        $user -> password = $req->password ;
        $user -> email = $req->email ;
        echo $user->save();  
        return redirect('userlist');

        
 }



 public function registration()
    {

         $data=DB::table('users')->paginate(4);
         return view('register',['data'=>$data]);
         
    }

public function registration_submit(Request $req){
    $data=request()->validate(
            [
            'name'=>'required',
            'password'=>'required|min:4',
            'email'=>'required|email'
            ],
        
            [   'name.required'=>'Name is required',
                'password.required' => 'Password is required should have minimun 4 characters',
                'email.required' => 'Email is required'

            ]); 

        $user = new register;
        
        $user -> name = $req->name ;
        $user -> password = $req->password ;
        $user -> email = $req->email ;
        echo $user->save();  

//print_r($req->all());
}  */






}

