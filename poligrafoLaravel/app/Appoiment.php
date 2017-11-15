<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Patient;

class Appoiment extends Model
{
    /**
     * The database table appoiment by the model.
     *
     * @var string
     */
    protected $table = 'itcp_appoiments';
    protected $primaryKey = 'id_appoiment';
    public $timestamps = false;
    
    public function patient()
    {
        return $this->belongsTo('Patient', 'id_patient');
    }
}
