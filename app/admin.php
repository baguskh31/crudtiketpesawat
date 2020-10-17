<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table = 'admins';
    
    public $timestamps = false;
    protected $fillable = ['id','nm_admin','callnumber'];
}
