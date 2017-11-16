<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var table rols user 
     */
    protected $table = 'itcp_rols';
}
