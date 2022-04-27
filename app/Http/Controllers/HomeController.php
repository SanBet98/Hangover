<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Models\DataLayer;
use Illuminate\Support\Facades\Redirect;
    
class HomeController extends Controller
{
   public function getIndex(){
       return view('index');
   }
   
   public function getContatti(){
       return view('publicSection.contatti');
   }
   
   public function getStoria(){
       return view('publicSection.storia');
   }
   
   public function getLogin(){
       return view('publicSection.login');
   }
   
   public function getHangoverI(){
       return view('publicSection.hangoverAttoI');
   }
   
   public function getHangoverII(){
       return view('publicSection.hangoverAttoII');
   }
   
   public function getHangoverIII(){
       return view('publicSection.hangoverAttoIII');
   }
   
   public function getHangoverIV(){
       return view('publicSection.hangoverAttoIV');
   }
   
   public function getHangoverV(){
       return view('publicSection.hangoverAttoV');
   }
   
   public function getHangoverVI(){
       return view('publicSection.hangoverAttoVI');
   }
   
   public function getFDFEI(){
       return view('publicSection.FDFEI');
   }
   
   public function getFDFEII(){
       return view('publicSection.FDFE2');
   }
    
   public function getCarnival(){
       return view('publicSection.carnival');
   }
    
    public function login(Request $request) {
        
        session_start();
        $dl = new DataLayer();
        
        if ($dl->validAdmin($request->input('nomeUtente'), $request->input('password')))
        {
            $_SESSION['logged'] = true;
            $_SESSION['loggedName'] = $request->input('nomeUtente');
            return Redirect::to('homeAdmin.php');

        }
        
        if ($dl->validPromoter($request->input('nomeUtente'), $request->input('password')))
        {
            $_SESSION['logged'] = true;
            $_SESSION['loggedName'] = $request->input('nomeUtente');
            if ($dl->checkPromoter($request->input('nomeUtente'), $request->input('password'))){
                return Redirect::to('homePR.php');
            }
            else{
                return view('PRSection.primoAccesso');
            }
            
        }
       
        return view('publicSection.login');
    }
    
    public function registration(Request $request) {
        $dl = new DataLayer();
        
        $dl->addPromoter($request->input('nomeUtente'), $request->input('password'), $request->input('email'));
       
        return Redirect::to('login.php');
    }
    
    public function logout() {

        //session_start();
        session_destroy();
        return view('index');
    }
    
    public function ajax_checkNomeUtente(Request $request)  {
        $dl= new DataLayer();
        
        if($dl->findNomeUtente($request->input('nomeUtente'))){
            $response = array('found' => true);
        }
        else{
            $response = array('found' => false);
        }
        
        return response()-> json($response);
        
        
        
    }
 
   
}
