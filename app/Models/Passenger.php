<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    use HasFactory;

    //passengers table
    protected $table = 'passengers';
    protected $primaryKey = 'passenger_id';

    //fk
    public function gangsters()
    {
        return $this->belongsTo('App\Models\Gangster','gangster');
    } 
    
    public function cars()
    {
        return $this->belongsTo('App\Models\Car','car');
    } 
}
