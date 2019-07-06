<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $fillable = ['title', 'details', 'author'];

    public function authorname(){
        return $this->belongsTo('App\User', 'author', 'id');
    }
}
