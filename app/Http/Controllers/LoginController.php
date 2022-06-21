<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
$error=null;
class LoginController extends Controller {

    public function login() {
        if(session('id')!=null){
            return redirect("home");
        }
        else {
            return view('login')->with('csrf_token', csrf_token());
        }
     }

     public function checkLogin() {

        if(!empty(request('email')) && !empty(request('password'))){
            
        
  
         $user = User::where('email', request('email'))->first();
       
        
         //return $user;
         if($user !== null  &&   Hash::check(request('password'), $user->password)) {
             Session::put('id', $user->id);
             return redirect('home');
         }
         else {
            $error= "Email e/o password errate!";

             return redirect('login')->withInput()->withErrors($error);
         }
     } else if(empty(request('email')) || empty(request('password'))){
        $error= "Compila tutti i campi!";
        return redirect('login')->withInput()->withErrors($error);
     }
    }



     public function logout() {
         Session::flush();
         return redirect('login');
     }

}
?>
