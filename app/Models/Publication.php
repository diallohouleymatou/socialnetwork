<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    //
    protected $fillable =[
        'texte',
        'photo',

    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}