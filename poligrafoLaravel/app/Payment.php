<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'itcp_payments';
    protected $primaryKey = 'id_payment';
    public $timestamps = false;
}
