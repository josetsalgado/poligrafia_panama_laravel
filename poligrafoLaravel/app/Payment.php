<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'itcp_payment';
    protected $primaryKey = 'id_payment';
    public $timestamps = false;
}
