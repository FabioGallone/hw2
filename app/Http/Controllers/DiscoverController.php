<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;

class DiscoverController extends Controller {


    
    function searchFood($query) {
        $json = Http::get('https://api.edamam.com/api/food-database/v2/parser?', [
         
            "app_id" => env("EDAMAM_app_id"),
            "app_key" => env("EDAMAM_app_key"),

           "ingr" => $query,

            "nutrition-type" => "cooking",

        ]);
     

        if ($json->failed()) abort(500);
        

        
        $newJson = array();
        $doc= $json['parsed'][0]['food'];
    
     
    
           
            $newJson[] = array(
                'nome' => $doc['label'],
                'image' => $doc['image'],
                'carboidrati' => $doc['nutrients']['CHOCDF'],
                'kcal' => $doc['nutrients']['ENERC_KCAL'],
                'grassi' => $doc['nutrients']['FAT'],
                'proteine' => $doc['nutrients']['PROCNT'],
            );
        
    
        return $newJson;
        
    }


    
    public function index() {


        
        if($session_id = session('id')){
        $user_id = User::find($session_id);
    
    
        if (!isset($user_id))
            return view('welcome');
        
          
        //La view ritorna la home con i dati di user
        return view("discover")->with("user_id", $user_id);
    }
    
    else return view("discover");
    }
    }