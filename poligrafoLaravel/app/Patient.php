<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Appoiment;

class Patient extends Model
{
    /**
     * The database table service by the model.
     *
     * @var string
     */
    protected $table = 'itcp_patients';
    protected $primaryKey = 'id_patient';
    public $timestamps = false;
    
    public function appoiment()
{
  return $this->belongsToMany('App\Appoiment', 'id_appoiment');
}
}
