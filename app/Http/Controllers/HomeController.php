<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Models\User;

class HomeController extends Controller {
    
    public function index() {


        
        if($session_id = session('id')){
        $user_id = User::find($session_id);

 
        if (!isset($user_id))
            return view('welcome');
        
     
        return view("home")->with("user_id", $user_id);
    }

    else return view("home");
}
}
?>