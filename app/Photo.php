<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['path'];

    public $uploads = '/images/';

    public  function getPathAttribute($path){

        return $this -> uploads . $path;
    }
}
