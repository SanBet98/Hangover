<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendite extends Model
{
    use HasFactory;
    
    protected $table='vendite';
    public $timestamps= false;
    
    protected $fillable=['biglietti_venduti','evento_id', 'promoter_id'];
  
}