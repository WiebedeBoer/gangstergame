<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gang extends Model
{
    use HasFactory;

    //gangs table
    protected $table = 'gangs';
    protected $primaryKey = 'gang_id';

    //fk
    public function games()
    {
        return $this->belongsTo('App\Models\Game','game');
    } 

    public function users()
    {
        return $this->belongsTo('App\Models\User','user');
    } 

	//buildings
	public function buildings()
    {
        return $this->hasMany('App\Models\Building','owner');
    }
    
	//cars
	public function cars()
    {
        return $this->hasMany('App\Models\Car','owner');
    }

	//newspapers
	public function newspapers()
    {
        return $this->hasMany('App\Models\Newspaper','gang');
    }

	//godfathers
	public function godfathers()
    {
        return $this->hasMany('App\Models\Godfather','gang');
    }
}
