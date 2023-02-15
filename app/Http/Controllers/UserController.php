<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return 'Hello from users';
    }

    public function show($id){
        $data=array(
            "id"=>$id,
            "name"=>"Andrew James Dacanay",
            "age"=>24,
            "email"=>"dacanay.aj.06@gmail.com"
         );
         return view('user', $data); 
        }
}
