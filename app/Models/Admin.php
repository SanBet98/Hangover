<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    
    protected $table='admin';
    public $timestamps= false;
    
    protected $fillable=['nomeUtente', 'nome', 'cognome', 'dataNascita', 'comuneResidenza', 'telefono', 'email', 'password'];
  
  
}
