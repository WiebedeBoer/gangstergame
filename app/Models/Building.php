<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;

    //buildings table
    protected $table = 'buildings';
    protected $primaryKey = 'building_id';

    //fk
    public function games()
    {
        return $this->belongsTo('App\Models\Game','game');
    } 

    public function hoods()
    {
        return $this->belongsTo('App\Models\Hood','hood');
    } 
    
    public function owners()
    {
        return $this->belongsTo('App\Models\Gang','owner');
    } 

    public function types()
    {
        return $this->belongsTo('App\Models\BuildingType','type');
    } 

	//guards
	public function guards()
    {
        return $this->hasMany('App\Models\Guard','building');
    }	
}
