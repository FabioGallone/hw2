<?php
namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\User;
use App\Models\Shop;
use App\Models\Save;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class CarrelloController extends Controller {


public function GetArticles(){
    $eventi= array();
 
     
    $res = Shop::all();
 
    
    for($i=1; $i<=count($res); $i++){
            
   
    if(Cookie::get($i)){
    
       $value=Cookie::get($i);
     
       $row=Shop::find($value);      
           
    
        $eventi[]=$row;
    }
        

    }
   
    return $eventi;
}

public function CreateCookieFromSaveForLater($number){
    $res = Shop::all();
  $value= $res[$number-1]["_id"];
    Cookie::queue(Cookie::make($number, $value, 120));
    return redirect("carrello");
}


public function DeleteSpecificCookie($name_value){
   // Cookie::get($name_value);
    Cookie::queue($name_value, null, -1);
  
    
}


public function DeleteEveryCookie(){
  
    $res = Shop::all();
    for($i=1; $i<=count($res); $i++){
    Cookie::queue($i, null, -1);
    }

    return redirect("carrello")->with('msg', "Complimenti, hai ultimato l'ordine. Corri a ritirare i tuoi prodotti in sede!");
  
    
}




public function CompleteOrder(){
    $prezzotot=0;
    $data = request();
    $maglie_acquistate= array();


    if(!empty($data["completaordine"])){    
    if($id= session('id')){

        $query=User::find($id);
      
        $nome=$query["nome"];
        $cognome= $query["cognome"];


    $res=Shop::all();

    for($i=1; $i<=count($res); $i++){

        if(Cookie::get($i)){
         $value=Cookie::get($i);
         
         $query=Shop::select("nome", "prezzo")->where("_id", $value)->get();
         //$row = DB::table("shops")->select("nome", "prezzo")->where("id_prodotto", $value)->first();

         $nome_maglia=$query[0]['nome'];
         $maglie_acquistate[]=$nome_maglia;
         $prezzo=$query[0]['prezzo'];
         $prezzotot += $prezzo;
        
      
        }
    
      

        }
       
        $newProduct = Product::create([
           'nome' => $nome,
           'cognome' => $cognome,
           'nome_maglie_acquistate' => $maglie_acquistate,
           'prezzo' => $prezzotot,
           ]);
      
        return redirect('cancellatutticookie');        
    }   else return redirect('login');



    
    
    }


}



public function SaveforLater($number){

   if(session('id')){
   $query=Shop::select("_id", "nome", "immagine", "prezzo", "numero_articolo")->where("_id", $number)->get();
   
   $id_utente= session('id');

   $id_prodotto=$query[0]["_id"];

   $nome_maglia=$query[0]['nome'];    
   $immagine_maglia=$query[0]['immagine'];
 $numero_articolo=$query[0]['numero_articolo'];
    

   $prezzo_maglia=$query[0]['prezzo'];

           
   $prodotto = Save::where('nome_maglia', $nome_maglia)->where('id_utente', $id_utente)->first();


    if(!$prodotto){
   $newProduct = Save::create([
    
    'id_utente' => $id_utente,
    'id_prodotto' => $id_prodotto,
    'nome_maglia' => $nome_maglia,
    'immagine_maglia' => $immagine_maglia,
    'prezzo_maglia' => $prezzo_maglia,
    'numero_articolo' => $numero_articolo,
    ]);
    }
 



    } else return redirect("login");
    
}



public function DeleteRowForLater($number){
    $prodotto = Save::where('id_prodotto', $number)->delete();
}


function WriteElementForLater(){
    
    if($query=Save::where("id_utente", session("id"))->orderBy("id_prodotto")->get()){
    return $query;
    }
}




public function index() {


        
    if($session_id = session('id')){
    $user_id = User::find($session_id);


    if (!isset($user_id))
        return view('welcome');
    
      

    return view("carrello")->with("user_id", $user_id);
}

else return view("carrello");
}




}