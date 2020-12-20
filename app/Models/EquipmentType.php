<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipmentType extends Model
{
    use HasFactory;

    //equipment types table
    protected $table = 'equipment_types';
    protected $primaryKey = 'type_id';

	//equipment
	public function equipment()
    {
        return $this->hasMany('App\Models\Equipment','type');
    }
}
