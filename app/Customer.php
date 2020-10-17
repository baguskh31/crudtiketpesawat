<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table = 'pelanggans';
    
    public $timestamps = false;
    protected $fillable = ['id','nama','pemberangkatan','arrive','maskapai'];


}
