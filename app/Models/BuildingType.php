<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuildingType extends Model
{
    use HasFactory;

    //equipment types table
    protected $table = 'building_types';
    protected $primaryKey = 'type_id';

	//buildings
	public function buildings()
    {
        return $this->hasMany('App\Models\Building','type');
    }
}
