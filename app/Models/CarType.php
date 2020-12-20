<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarType extends Model
{
    use HasFactory;

    //car types table
    protected $table = 'car_types';
    protected $primaryKey = 'type_id';

	//cars
	public function cars()
    {
        return $this->hasMany('App\Models\Car','type');
    }
}
