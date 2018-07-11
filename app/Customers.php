<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $table = "customers";
    
    function billDetails(){
        return $this->hasManyThrough(
            'App\BillDetail',
            'App\Bills',
            'id_customer',
            'id_bill',
            'id',
            'id'
        );
    }
}
