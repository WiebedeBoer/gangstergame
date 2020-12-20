<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newspaper extends Model
{
    use HasFactory;

    //gangs table
    protected $table = 'newspapers';
    protected $primaryKey = 'newspaper_id';

    //fk
    public function games()
    {
        return $this->belongsTo('App\Models\Game','game');
    } 

    public function gangs()
    {
        return $this->belongsTo('App\Models\Gang','gang');
    } 

    public function users()
    {
        return $this->belongsTo('App\Models\User','user');
    } 
}
