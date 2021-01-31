<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function login(Request $req)
  {
        $credentials=array(
     'number'=>$req->number,
     'password'=>$req->password
   );
        $user=User::where(['number'=>$req->number])->first();
        // file_put_contents("login.txt",$credentials);

      if ($user) {

        if (auth()->attempt($credentials)) {
          file_put_contents('user.txt',$user);

          $id = Auth::user()->id;
          $name= User::where('id',$id)->first()->name;
           Session::put('name',$name);

          return redirect('/home');
      }

      else{
          return view('registration.sign_in');
          } 
      }


        else
        {
            return view('registration.sign_in');
        }
    }


    public function create_user(Request $req){
      $name=$req->name; //name=key
      $email=$req->email;
      $number=$req->number;
      $address=$req->address;
      $district=$req->district;
      $postal_code=$req->postal_code;
      $password=Hash::make($req->password);;

   file_put_contents('data.txt',$name);

   //db_name=>var
   User::create([
      'name'=>$name, 
      'number'=>$number,
      'email'=>$email,        
      'password' =>$password,
      'address' =>$address,
      'district' =>$district,
      'postal_code' =>$postal_code,
      ]);
  }

}



    
                // $id = Auth::user()->id;

                // $name= User::where('id',$id)->first()->name;
                // Session::put('name',$name);

            
 

  // public function index(Request $req){

  //   $number=$req->number;
  //   $password=Hash::make($req->password);
    
  //   file_put_contents('data.txt',$number,$password);

  //      $user=User::where (['number'=>$req->number])->first();
  //      if(!$user|| Hash::check($req->password,$user->password)) // data password should match to database pass
  //      {
  //       //  return "mobile number and password are not matched";
  //       echo $return="mobile number and password are not matched";
  //      }
  //      else
  //      {
  //          $req->session()->put('user',$user);
  //         //  return redirect('test');
  //         header('Content-type:application/json');
  //         echo json_encode(user);
  //      }

  // }



    
   



