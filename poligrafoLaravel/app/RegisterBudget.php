<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegisterBudget extends Model
{
    protected $table = 'itcp_budgets_register';
    protected $primaryKey = 'id_register_budgets';
    public $timestamps = false;
}
