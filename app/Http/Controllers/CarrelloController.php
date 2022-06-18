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
    $res = DB::table("shops")->get();

    
    
  
    for($i=1; $i<=count($res); $i++){
            
   
    if(Cookie::get($i)){
       $value=Cookie::get($i);
       $row = DB::table("shops")->where("id_prodotto", $value)->first();

         
           

        $eventi[]=$row;
    }
        

    }
    return $eventi;
}

public function CreateCookieFromSaveForLater($number){
    Cookie::queue(Cookie::make($number, $number, 120));
    return redirect("carrello");
}


public function DeleteSpecificCookie($name_value){
    Cookie::get($name_value);
    Cookie::queue($name_value, null, -1);
  
    
}


public function DeleteEveryCookie(){
  
    $res = DB::table("shops")->get();
    for($i=1; $i<=count($res); $i++){
    Cookie::queue($i, null, -1);
    }

    return redirect("carrello")->with('msg', "Complimenti, hai ultimato l'ordine. Corri a ritirare i tuoi prodotti in sede!");
  
    
}


public function CompleteOrder(){
    $data = request();
    if(!empty($data["completaordine"])){    
    if($id= session('id')){

        $query=User::find($id);
        $nome=$query["nome"];
        $cognome= $query["cognome"];



    $res = DB::table("shops")->get();
    for($i=1; $i<=count($res); $i++){

        if(Cookie::get($i)){
         $value=Cookie::get($i);
         
         $query=Shop::select("nome", "prezzo")->where("id_prodotto", $value)->get();
         //$row = DB::table("shops")->select("nome", "prezzo")->where("id_prodotto", $value)->first();

         $nome_maglia=$query[0]['nome'];
           

         $prezzo=$query[0]['prezzo'];
    
         $newProduct = Product::create([
            'nome' => $nome,
            'cognome' => $cognome,
            'nome_maglia' => $nome_maglia,
            'prezzo' => $prezzo,
            ]);
       
      
        }
    
      

        }
        return redirect('cancellatutticookie');        
    }   else return redirect('login');



    
    
    }


}



public function SaveforLater($number){

   if(session('id')){
   $query=Shop::select("id_prodotto", "nome", "immagine", "prezzo")->where("id_prodotto", $number)->get();

   $id_utente= session('id');

   $id_prodotto=$query[0]["id_prodotto"];
   $nome_maglia=$query[0]['nome'];    
   $immagine_maglia=$query[0]['immagine'];

   $prezzo_maglia=$query[0]['prezzo'];

           
   $prodotto = Save::where('nome_maglia', $nome_maglia)->where('id_utente', $id_utente)->first();


    if(!$prodotto){
   $newProduct = Save::create([
    'id_utente' => $id_utente,
    'id_prodotto' => $id_prodotto,
    'nome_maglia' => $nome_maglia,
    'immagine_maglia' => $immagine_maglia,
    'prezzo_maglia' => $prezzo_maglia,
    ]);
    }
   



    } else return redirect("login");
    
}



public function DeleteRowForLater($number){
    $prodotto = Save::where('id_prodotto', $number)->delete();
}


function WriteElementForLater(){
    
    if($query= DB::table("saves")->where("id_utente", session('id'))->orderBy("id_prodotto")->get()){
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