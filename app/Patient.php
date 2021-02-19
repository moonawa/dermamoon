<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'profession',
        'age',
        'localisation',
        'etat',
        'durée',
        'photo',
        'users_id',
     
    ];

    public function medecins()
    {
        return $this->belongsToMany('App\Medecin');
    }


    public function users(){
        return $this->belongsTo('App\User');
    }


   

}
