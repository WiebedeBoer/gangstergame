<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    //cars table
    protected $table = 'cars';
    protected $primaryKey = 'car_id';

    //fk
    public function games()
    {
        return $this->belongsTo('App\Models\Game','game');
    } 

    public function gangs()
    {
        return $this->belongsTo('App\Models\Gang','gang');
    } 

    public function types()
    {
        return $this->belongsTo('App\Models\CarType','type');
    } 

	//passengers
	public function passengers()
    {
        return $this->hasMany('App\Models\Passenger','car');
    }	
}
