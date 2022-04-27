<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataLayer;
use Illuminate\Support\Facades\Redirect;

class PRController extends Controller
{
    
    public function salvaPrimoAccesso(Request $request) {
        
        
        $dl = new DataLayer();
        
        $dl->savePrimoAccessoPromoter($request->input('nome'), $request->input('cognome'), $request->input('dataNascita'), $request->input('comuneResidenza'), $request->input('telefono'), $request->input('nomeReferente'), $request->input('cognomeReferente'));
       
        return Redirect::to('homePR.php');
    }
    
    public function getHome(){
        //session_start();
        $dl = new DataLayer();
        $nextEvent = $dl->nextEvent();
        $vendite = $dl->listVendite($_SESSION["loggedName"]);

        return view('PRSection.homePR')->with('logged', true)->with('loggedName', $_SESSION["loggedName"])->with('vendite', $vendite)->with('nextEvent', $nextEvent);
        
    }
    
    public function modificaVendite($idEvento,$idPr,$bigliettiVenduti,$modifica){
        //session_start();
        $dl = new DataLayer();
        $dl->modificaVendita($modifica,$bigliettiVenduti,$idEvento,$idPr);
        $nextEvent = $dl->nextEvent();
        $vendite = $dl->listVendite($_SESSION["loggedName"]);

        return view('PRSection.homePR')->with('logged', true)->with('loggedName', $_SESSION["loggedName"])->with('vendite', $vendite)->with('nextEvent', $nextEvent);
        
    }
    
    public function getAnagrafica() {
        //session_start();
        $dl = new DataLayer();
        $promoterInfo = $dl->findPromotername($_SESSION["loggedName"]);
        return view('PRSection.anagraficaPR')->with('promoterInfo', $promoterInfo);
    }
    
    public function getEventi(){
        //session_start();
        $dl = new DataLayer();
        $listActiveEvents = $dl->listActiveEvents($_SESSION["loggedName"]);
        $listFreeEvents = $dl->listFreeEvents($_SESSION["loggedName"]);
        return view('PRSection.eventiPR')->with('activeEvents',$listActiveEvents)->with('freeEvents',$listFreeEvents);
    }
    
    public function getSquadra(){
        //session_start();
        $dl = new DataLayer();
        $team=$dl->findTeam($_SESSION["loggedName"]);
        $listaVendite=$dl->listVenditeTeam($_SESSION["loggedName"]);
        $listaEventi=$dl->listActiveEvents($_SESSION["loggedName"]);
        return view('PRSection.squadraPR')->with('team',$team)->with('listaVendite',$listaVendite)->with('listaEventi',$listaEventi);
    }
    
    public function getModificaInfo($parametro,$valParametro) {
        return view('PRSection.modificaInfoPR')->with('parametro', $parametro)->with('valParametro',$valParametro);
    }
    
    public function modificaInfo($parametro, Request $request) {
        //session_start();
        $dl = new DataLayer();
        $dl->editPromoter($_SESSION["loggedName"],$parametro,$request->input('valParametro'));
        $promoterInfo = $dl->findPromotername($_SESSION["loggedName"]);
        return view('PRSection.anagraficaPR')->with('promoterInfo',$promoterInfo);
    }
       
}
