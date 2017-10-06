<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    protected $table = 'itcp_budgets';
    protected $primaryKey = 'id_budget';
    public $timestamps = false;
}
