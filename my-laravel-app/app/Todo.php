<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $guarded = array('id');

    public static $ruled = array(
        'product_number' => 'required' ,
        'level' => 'integer' ,
        'detail' => 'required',
    );

    public function getData(){
        return $this->id . ':' . $this->product_number;
    }

}
