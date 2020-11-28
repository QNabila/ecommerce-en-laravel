<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create_user(Request $request){
        $name=$request->name;
        $email=$request->email;
        $number=$request->number;
        $address=$request->address;
        $district=$request->district;
        $postal_code=$request->postal_code;
        $password=$request->password;

        file_put_contents('data.txt',$name);

     

    }
}
