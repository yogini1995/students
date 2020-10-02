<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Userview;
use Illuminate\Support\Facades\DB;
use Auth;

class Search extends Controller
{
    public function Search(Request $request)
         {
            $search =$request->get('search');
            $data=DB::table('users')->where('email','like','%'.$search.'%')->paginate(4);
            return view('user',['data'=>$data]);
         }

         
}
