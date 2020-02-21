<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voter extends Model
{
    protected $table = 'Voters';

    /**
    * Attributes that are mass assignable
    * @var array
    */
    protected $fillable = [];
}