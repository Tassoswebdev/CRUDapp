<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emploee extends Model
{
    //
    protected $fillable= array('name','phone','address','company','bio','salary');
}
