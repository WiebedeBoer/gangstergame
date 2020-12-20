<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    //equipment table
    protected $table = 'equipment';
    protected $primaryKey = 'equipment_id';

    //fk
    public function gangsters()
    {
        return $this->belongsTo('App\Models\Gangster','gangster');
    } 

    public function types()
    {
        return $this->belongsTo('App\Models\EquipmentType','type');
    } 

}
