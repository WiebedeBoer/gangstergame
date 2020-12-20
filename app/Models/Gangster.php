<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gangster extends Model
{
    use HasFactory;

    //gangs table
    protected $table = 'gangsters';
    protected $primaryKey = 'gangster_id';

    //fk
    public function games()
    {
        return $this->belongsTo('App\Models\Game','game');
    } 

    public function gangs()
    {
        return $this->belongsTo('App\Models\Gang','gang');
    } 

	//equipment
	public function equipment()
    {
        return $this->hasMany('App\Models\Equipment','gangster');
    }	

	//guards
	public function guards()
    {
        return $this->hasMany('App\Models\Guard','gangster');
    }	

	//passengers
	public function passengers()
    {
        return $this->hasMany('App\Models\Passenger','gangster');
    }	
}
