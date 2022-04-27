<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;
    
    protected $table='evento';
    public $timestamps= false;
    
    protected $fillable=['nome', 'data', 'location', 'dj', 'guest','voice','persone'];
    
    public function promoters(){
        return $this->belongsToMany('App\Models\Promoter');
    }
    
    
}
