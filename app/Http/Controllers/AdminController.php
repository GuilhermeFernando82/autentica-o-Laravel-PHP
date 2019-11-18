<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class AdminController extends Controller
{

    public function __construct(){
       // $this->middleware('auth');
    }
    public function index(){
        return view('index');
    }
    public function postlogin(Request $request){
            
        
        $dados = (['email' => $request->get('email'), 'password' => $request->get('senha'),]);
        //$credentials = $request->only('email', 'password');
        if((auth()->guard('admins')->attempt($dados)))
        {
            echo "Ok";
        }else{
            echo $dados['email']."<br>";
    
        }
        
    }
    public function login(){
        return view('auth.autentica');
    }
    
   
}
