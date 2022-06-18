<?php


namespace App\Http\Controllers;
use Illuminate\Routing\Controller;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller {
    private $error;

    protected function register(){

        $request = request();
        if ($this->countErrors($request)==0){
            
            $passwordhash = password_hash($request['password'], PASSWORD_DEFAULT);
            $newUser =  User::create([
                'nome' => $request['nome'],
                'cognome' => $request['cognome'],
                'email' => $request['email'],
                'username' => $request['username'],
                'password' => $passwordhash,
                ]);


                if ($newUser) {
                 
                    Session::put('id', $newUser->id);
                    return redirect('home');
                }  
                else {
         
                    return redirect('register')->withInput();
                }
        }
        else 
        return redirect('register')->withInput()->withErrors($this->error);

    }



    private function countErrors($data) {
        $this->error=array();
        

        if(!empty($data["nome"]) && !empty($data["cognome"])  && !empty($data["email"]) && !empty($data["username"]) && !empty($data["password"])){
        # USERNAME
        if(!preg_match('/^[a-zA-Z0-9_]{1,15}$/', $data['username'])) {
            $this->error[] = "Username non valido";
        } else {
            $username = User::where('username', $data['username'])->first();
            if ($username !== null) {
                $this->error[] = "Username già utilizzato";
           }
        }
        # PASSWORD
        if (strlen($data["password"]) < 8) {
            $this->error[] = "Caratteri password insufficienti";
        } 

        # EMAIL
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $this->error[] = "Email non valida";
        } else {
            $email = User::where('email', $data['email'])->first();
            if ($email !== null) {
                $this->error[] = "Email già utilizzata";
            }
        }
    } else if(isset($data["nome"]) || isset($data["cognome"])  || isset($data["email"]) || isset($data["username"]) || isset($data["password"]))
    $this->error[]= "Assicurati di compilare correttamente tutti i campi";
    

        return count($this->error);
    }


    public function index() {
        return view('register');
    } 
}

?>