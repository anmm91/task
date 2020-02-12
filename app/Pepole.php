<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pepole extends Model
{
    protected $fillable=['name','birth_date','parent_id'];
    public $timestamps=false;
    public function childern(){
        return $this->hasMany('App\Pepole','parent_id');
    }
}
