<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Models\User;
use App\Models\Shop;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ShopController extends Controller {

    function CreateDynamicPage(){       
        $res = Shop::all();
           
    
        return $res;
    }



    public function createCookie(){
        $request = request();
    
        $res = Shop::all();

        for($i=1; $i<=count($res); $i++){
            
        if(!empty($request[$i])){
       
      
           $value= $res[$i-1]["_id"];

        
            Cookie::queue(Cookie::make($i, $value, 120));
            return redirect("carrello");
        }
        
        }
  

     }



public function index() {


        
        if($session_id = session('id')){
        $user_id = User::find($session_id);

 
        if (!isset($user_id))
            return view('welcome');
        
          
        //La view ritorna la home con i dati di user
        return view("shop")->with("user_id", $user_id);
    }

    else return view("shop");
    }
}