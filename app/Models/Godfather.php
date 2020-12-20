<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Godfather extends Model
{
    use HasFactory;

    //cars table
    protected $table = 'godfathers';
    protected $primaryKey = 'godfather_id';

    //fk
    public function games()
    {
        return $this->belongsTo('App\Models\Game','game');
    } 

    public function gangs()
    {
        return $this->belongsTo('App\Models\Gang','gang');
    } 

    public function gangsters()
    {
        return $this->belongsTo('App\Models\Gangster','gangster');
    } 
}
