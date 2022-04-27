<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataLayer extends Model
{
    public function validAdmin($nomeUtente, $password) {
        $users = Admin::where('nomeUtente',$nomeUtente)->get(['password']);
        
        if(count($users) == 0)
        {
            return false;
        }
        
        return (md5($password) == ($users[0]->password));
    }
    
    public function validPromoter($nomeUtente, $password) {
        $users = Promoter::where('nomeUtente',$nomeUtente)->get(['password']);
        
        if(count($users) == 0)
        {
            return false;
        }
        
        return (md5($password) == ($users[0]->password));
    }
    
    public function addPromoter($nomeUtente, $password, $email) {
        $user = new Promoter();
        $user->nomeUtente = $nomeUtente;
        $user->password = md5($password);
        $user->email = $email;
        $user->save();
    }
    
    public function checkPromoter($nomeUtente, $password) {
        $users = Promoter::where('nomeUtente',$nomeUtente)->get(['nome']);
        
        if($users[0]->nome == NULL)
        {
            return false;
        }
        return true;
    }
    
    public function savePrimoAccessoPromoter($nome, $cognome, $dataNascita, $comuneResidenza, $telefono, $nomeReferente, $cognomeReferente){
        $promoter = Promoter::orderBy('id','desc')->first();
        $promoter->nome = $nome;
        $promoter->cognome = $cognome;
        $promoter->dataNascita = $dataNascita;
        $promoter->comuneResidenza = $comuneResidenza;
        $promoter->telefono = $telefono;
        if($nomeReferente != ""){
        $ref=Promoter::where('nome',$nomeReferente)->where('cognome',$cognomeReferente)->value('id');
        $promoter->referente = $ref;}
        $promoter->save();
        if($nomeReferente!=""){
        $pr=Promoter::where('nome',$nome)->where('cognome',$cognome)->value('id');
        $vendite = Vendite::where('promoter_id',$ref)->leftJoin('evento','vendite.evento_id','=','evento.id')->get();
        foreach ($vendite as $vendita){
            $v= new Vendite();
            $v->evento_id=$vendita->evento_id;
            $v->promoter_id=$pr;
            $v->biglietti_venduti=0;
            $v->save();
        }
        }
    }
    
    public function abilitaEventoPromoter($evento,$nome,$cognome){
        $vendita = new Vendite(); 
        $id_evento = Evento::where('nome',$evento)->get(['id']);
        $vendita->evento_id = $id_evento[0]->id;
        $promoter_id=Promoter::where('nome',$nome)->where('cognome',$cognome)->get(['id']);
        $vendita->promoter_id=$promoter_id[0]->id;
        $vendita->save();
        
        $promoter=Promoter::where('referente',$promoter_id[0]->id)->get();
        
        foreach ($promoter as $pr){
        $vendita = new Vendite(); 
        $id_evento = Evento::where('nome',$evento)->get(['id']);
        $vendita->evento_id = $id_evento[0]->id;
        $promoter_id=Promoter::where('nome',$pr->nome)->where('cognome',$pr->cognome)->get(['id']);
        $vendita->promoter_id=$promoter_id[0]->id;
        $vendita->save();
        }
    }
    
    public function listNextEvents(){
        $nextEvents = Evento::where('passato',0)->get();
        return $nextEvents;
    }

    public function nextEvent(){
        $nextEvent = Evento::where('passato',0)->take(1)->get();
        return $nextEvent;
    }
    
    public function listEvents(){
        $nextEvents = Evento::all();
        return $nextEvents;
    }
    
    public function listFreeEvents($name){
        $pr= Promoter::where('nomeUtente',$name)->get(["id"]);
        $events=Evento::select('nome','data')->get();
        $activeEvents = Vendite::whereIn('promoter_id',$pr)->leftJoin('evento','vendite.evento_id','=','evento.id')->select('nome','data')->get();
        $freeEvents = $events->diffAssoc($activeEvents);
        return $freeEvents;
    }
    
    public function listActiveEvents($name){
        $pr= Promoter::where('nomeUtente',$name)->get(["id"]);
        $activeEvents = Vendite::whereIn('promoter_id',$pr)->leftJoin('evento','vendite.evento_id','=','evento.id')->select('nome','data','evento_id')->get();
        return $activeEvents;
    }
    
    public function detailEvent($nome){
        $nextEvents = Evento::where('nome',$nome)->get();
        return $nextEvents;
    }
    
    public function listPromoters(){
        $pr = Promoter::all();
        return $pr;
    }
    
    public function listReferente(){
        $promoters = Promoter::all();
        
        for ($i=0; $i<count($promoters); $i++){
        $referente="";
        if($promoters[$i]->referente!=NULL){
        $nome= Promoter::where('id',$promoters[$i]->referente)->value('nome');
        $referente=$referente.$nome;
        $cognome = Promoter::where('id',$promoters[$i]->referente)->value('cognome');
        $referente=$referente." ".$cognome;
        }
        $promoters[$i]->referente=$referente;
        }
        return $promoters;
    }
        
        
     public function listaPromoterAbilitati($nome){
        $id_evento = Evento::where('nome',$nome)->get(['id']);
        $listaPromoter=Vendite::whereIn('evento_id',$id_evento)->leftJoin('promoter','vendite.promoter_id','=','promoter.id')->select('nome','cognome','biglietti_venduti')->get();
        return $listaPromoter;
    }
       
    public function listNewPromoter(){
        $nextEvents = Promoter::orderBy('id','desc')->take(2)->get();
        return $nextEvents;
    }
    
    public function findAdmin($name){
        $admin= Admin::where('nomeUtente',$name)->get();
        return $admin;
    }
    
    public function findPromoter($id){
        $pr= Promoter::where('id',$id)->get();
        return $pr;
    }
    
    public function findPromotername($name){
        $pr= Promoter::where('nomeUtente',$name)->get();
        return $pr;
    }
    
    public function findEventoId($nome){
        $evento = Evento::where('nome',$nome)->value('id');
        return $evento;
    }
    
    public function findPromoterId($name){
        $pr= Promoter::where('nomeUtente',$name)->value('id');
        return $pr;
    }
    
    public function findVendite($id){
        $vendite = Vendite::where('promoter_id',$id)->leftJoin('evento','vendite.evento_id','=','evento.id')->select('nome','biglietti_venduti')->get();
        return $vendite;
    }
    
    public function listVendite($name){
        $pr= Promoter::where('nomeUtente',$name)->get(["id"]);
        $vendite=Vendite::whereIn('promoter_id',$pr)->leftJoin('evento','vendite.evento_id','=','evento.id')->select('nome','evento_id','promoter_id','biglietti_venduti')->get();
        if($vendite->isEmpty()){
            return NULL;
        }
        return $vendite;
    }
    
    public function modificaVendita($modifica,$bigliettiVenduti,$evento,$pr){
        
        if($modifica=='aggiungi'){
            Vendite::where('promoter_id',$pr)->where('evento_id',$evento)->update(['biglietti_venduti'=>$bigliettiVenduti+1]);
           
        }
        else if($modifica=='togli'){
            Vendite::where('promoter_id',$pr)->where('evento_id',$evento)->update(['biglietti_venduti'=>$bigliettiVenduti-1]);
        }
        
    }
    
    public function editAdmin($name,$parametro,$valParametro){
        $admin= Admin::where('nomeUtente',$name)->first();
        $admin->$parametro=$valParametro;
        $admin->save();
    }
    
    public function addNewEvent($nome, $data, $location, $dj, $guest, $voice){
        $evento = new Evento();
        $evento->nome = $nome;
        $evento->data= $data;
        $evento->location = $location;
        $evento->dj = $dj;
        $evento->guest = $guest;
        $evento->voice = $voice;
        $evento->save();
    }
    
    public function editPromoter($name,$parametro,$valParametro){
        $promoter= Promoter::where('nomeUtente',$name)->first();
        $promoter->$parametro=$valParametro;
        $promoter->save();
    }
    
    public function findTeam($name){
        $pr= Promoter::where('nomeUtente',$name)->value('id');
        $team=Promoter::where('referente',$pr)->get();
        if($team->isEmpty()){
            return NULL;
        }
        return $team;
    }
    
    public function listVenditeTeam($name){
        $pr= Promoter::where('nomeUtente',$name)->value('id');
        $team=Promoter::where('referente',$pr)->get(['id']);
        $listaVendite=Vendite::whereIn('promoter_id',$team)->orWhere('promoter_id',$pr)->leftJoin('promoter','vendite.promoter_id','=','promoter.id')->select('nome','cognome','biglietti_venduti','evento_id')->orderBy('biglietti_venduti','desc')->get();
        return $listaVendite;
    }
    
    public function findNomeUtente($name){
        $pr= Promoter::where('nomeUtente',$name)->get();
        
        if(count($pr)==0){
            return false;
                    }
        else
            return true;
    }
    
}