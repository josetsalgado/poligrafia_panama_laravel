<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    /**
     * The database table service by the model.
     *
     * @var string
     */
    protected $table = 'itcp_patients';
    public $timestamps = false;
}
