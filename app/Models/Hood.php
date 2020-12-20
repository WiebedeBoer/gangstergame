<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hood extends Model
{
    use HasFactory;

    //hoods table
    protected $table = 'hoods';
    protected $primaryKey = 'hood_id';

    //fk
    public function games()
    {
        return $this->belongsTo('App\Models\Game','game');
    } 

	//buildings
	public function buildings()
    {
        return $this->hasMany('App\Models\Building','hood');
    }	
}
