<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Userview;
use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Category;

class Companies extends Controller
{
    //Insert functions- save,add
    function save(Request $req)
    {
        
//validation


        $data=request()->validate(
            [
            'name'=>'required',
            'password'=>'required|min:4',
            'email'=>'required|email|unique:users',
            'cat_id' => "required"

            ],
        
            [   'name.required'=>'Name is required',
                'password.required' => 'Password is required should have minimun 4 characters',
                'email.required' => 'Email is required and it must be unique',
                'cat_id.required' => 'Category id is required '
            ]); 



        $user = new Userview;
        $user -> id = $req->id ;
        $user -> name = $req->name ;
        $user -> password = md5($req->password) ;
        $user -> email = $req->email ;
        $user -> cat_id = $req->cat_id ;

        echo $user->save();  

        return redirect('userlist');
   

    }


    function add(Request $req)
    {
        
        

        $category=DB::select('select * from category');
        
        return view('insertdata',['category'=>$category]);
        



    }


    //del function
    function del(Request $req)
    {
        
        $cmp= Userview::find($req->id); 


        echo $cmp->delete();
         
        return redirect('userlist');

        
     }

      //update function-edit,update
     function update(Request $request)

    {
        //validation 
        $data=request()->validate(
            [
            'name'=>'required',
            'password'=>'required|min:4',
            'email'=>'required|email'
            ],
        
            [
                'password.required' => 'Password is required should have minimun 4 characters',
                'email.required' => 'Email is required'

            ]);

        
        $data = $request->all();
        $id = $data['id'];
        $name = $request->input('name');
        $password = $request->input('password');
        $email = $request->input('email');

        DB::update('update users set name = ?,password=?,email=? where id = ?',[$name,$password,$email,$id]);

        return redirect('userlist');


    }

     function edit(Request $req)
     { 
        $id = $req->id;
        $student=DB::select('select * from users where id=?',[$id]);
        return view('studentedit',['student'=>$student]);
     }


    function login_submit(Request $req)

{
    
     
         $email= $req->input('email');
        $password=$req->input('password');

            $data=$req->validate(
            [
            
            'password'=>'required|min:4',
            'email'=>'required|email'
            ],
        
            [   
            'password.required' => 'Password is required should have minimun 4 characters',
            'email.required' => 'Email is required'

            ]);  


        $password = md5($password);
        
        $checklogin=DB::table('users')->where(['email'=>$email,'password'=>$password])->get();



        if(count($checklogin) > 0)
        {
         $id=$checklogin;
         //=DB::table('users')->where(['email'=>$email,'password'=>$password])->get('id');

         $userid=json_decode(json_encode($id),true);
           
         session_start();
         
         $_SESSION['userid']=$userid[0]['id'];

            return redirect('userlist');

        }

        else
        {   

         
        return back()->with('error','Please enter valid credentials');
            
        //return redirect('/');
            //return view('welcome');
                // echo "Unsucessfull Login";
        }



           


         function logout(Request $req)
       {
        
        session_unset();
         

        //echo "Logged out Sucessfully";


        //return View ('welcome');
        
       }





       





 
}  



   
     

    


}
