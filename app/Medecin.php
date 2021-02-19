<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medecin extends Model
{
    protected $fillable = [
        'sexe',
        'hopital',
        'code',
        'specialite',
        'users_id',
    
       
    ];

    public function patients()
       {
           return $this->belongsToMany('App\Patient');
       } 
       
    
    public function users(){
        return $this->belongsTo('App\User');
    }




}
