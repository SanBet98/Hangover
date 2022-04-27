<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promoter extends Model
{   
    use HasFactory;
    
    protected $table='promoter';
    public $timestamps= false;
    
    protected $fillable=['nomeUtente', 'nome', 'cognome', 'dataNascita', 'comuneResidenza', 'telefono', 'email', 'password','referente'];
    
    public function eventi(){
        return $this->belongsToMany('App\Models\Evento');
    }
    
}
