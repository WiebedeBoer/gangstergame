<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    //buildings table
    protected $table = 'games';
    protected $primaryKey = 'game_id';

	//gangs
	public function gangs()
    {
        return $this->hasMany('App\Models\Gang','game');
    }	

	//buildings
	public function buildings()
    {
        return $this->hasMany('App\Models\Building','game');
    }	

	//hoods
	public function hoods()
    {
        return $this->hasMany('App\Models\Hood','game');
    }	

	//cars
	public function cars()
    {
        return $this->hasMany('App\Models\Car','game');
    }	
}
