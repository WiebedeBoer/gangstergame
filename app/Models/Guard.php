<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guard extends Model
{
    use HasFactory;

    //guards table
    protected $table = 'guards';
    protected $primaryKey = 'guard_id';

    //fk
    public function gangsters()
    {
        return $this->belongsTo('App\Models\Gangster','gangster');
    } 
    
    public function buildings()
    {
        return $this->belongsTo('App\Models\Building','building');
    } 
}
