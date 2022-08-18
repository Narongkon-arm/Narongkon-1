<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sendwork extends Model
{
    use SoftDeletes;

    public function get_work(){
        return $this->hasOne('App\Work', 'id','work_id')->select('id','name');
    }

    public function get_user(){
        return $this->hasOne('App\User', 'id','created_by')->select('id','name');
    }

}
