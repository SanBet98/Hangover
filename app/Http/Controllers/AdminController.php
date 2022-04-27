<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataLayer;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller {

    public function index() {
        // GET method (path "/author")
        // root name: author.index
        // root name: author.index

        //session_start();
        $dl = new DataLayer();
        $nextEvents = $dl->listNextEvents();
        $newPromoter = $dl->listNewPromoter();

        return view('AdminSection.homeAdmin')->with('logged', true)->with('loggedName', $_SESSION["loggedName"])
                        ->with('nextEvents', $nextEvents)->with('newPromoter', $newPromoter);
    }

    public function getAnagrafica() {
        //session_start();
        $dl = new DataLayer();
        $adminInfo = $dl->findAdmin($_SESSION["loggedName"]);
        return view('AdminSection.anagraficaAdmin')->with('adminInfo', $adminInfo);
    }

    public function getDettaglioEvento($nome) {
        //session_start();
        $dl = new DataLayer();
        $evento = $dl->detailEvent($nome);
        $listaPromoter = $dl->listaPromoterAbilitati($nome);
        return view('AdminSection.dettaglioEventoAdmin')->with('evento', $evento)->with('listaPromoter', $listaPromoter);
    }

    public function getDettaglioPromoter($id) {
        //session_start();
        $dl = new DataLayer();
        $promoter = $dl->findPromoter($id);
        $vendite = $dl->findVendite($id);
        return view('AdminSection.dettaglioPromoterAdmin')->with('promoter', $promoter)->with('vendite', $vendite);
    }

    public function getEventi() {
        //session_start();
        $dl = new DataLayer();
        $listEvents = $dl->listEvents();
        return view('AdminSection.eventiAdmin')->with('listEvents', $listEvents);
    }

    public function getPromoter() {
        //session_start();
        $dl = new DataLayer();
        $listReferente = $dl->listReferente();
        return view('AdminSection.promoterAdmin')->with('listReferente',$listReferente);
    }

    public function getAbilitaEventoPromoter($nome) {
        //session_start();
        $dl = new DataLayer();
        $evento = $dl->detailEvent($nome);
        return view('AdminSection.abilitaEventoPromoter')->with('evento', $evento[0]);
    }

    public function abilitaEventoPromoter($evento, Request $request) {
        //session_start();
        $dl = new DataLayer();
        $dl->abilitaEventoPromoter($evento, $request->input('nome'), $request->input('cognome'));
        $eventoD = $dl->detailEvent($evento);
        $listaPromoter = $dl->listaPromoterAbilitati($evento);

        return view('AdminSection.dettaglioEventoAdmin')->with('listaPromoter', $listaPromoter)->with('evento', $eventoD);
    }

    public function getModificaInfo($parametro,$valParametro) {
        return view('AdminSection.modificaInfoAdmin')->with('parametro', $parametro)->with('valParametro',$valParametro);
    }
    
    public function modificaInfo($parametro, Request $request) {
        //session_start();
        $dl = new DataLayer();
        $dl->editAdmin($_SESSION["loggedName"],$parametro,$request->input('valParametro'));
        $adminInfo = $dl->findAdmin($_SESSION["loggedName"]);
        return view('AdminSection.anagraficaAdmin')->with('adminInfo',$adminInfo);
    }

    public function getNuovoEvento(){
        return view('AdminSection.nuovoEventoAdmin');
    }
    
    public function addNuovoEvento(Request $request){
        //session_start();
        $dl = new DataLayer();
        $dl->addNewEvent($request->input('nome'),$request->input('data'),$request->input('location'),$request->input('dj'),$request->input('guest'),$request->input('voice'));
        $listEvents = $dl->listEvents();
        return view('AdminSection.eventiAdmin')->with('listEvents', $listEvents);
        
    }
}
