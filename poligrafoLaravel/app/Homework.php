<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
	protected $table = 'itcp_homeworks';
	protected $primaryKey = 'id_homework';
	public $timestamps = false;
}
