<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManualController extends Controller
{
	//manual main
    public function index()
    {       
        return view('manual.index');        
    }
	
    public function gang()
    {       
        return view('manual.gang');        
    }
	
    public function organization()
    {       
        return view('manual.organization');        
    }
	
    public function city()
    {       
        return view('manual.city');        
    }	

    public function equipment()
    {       
        return view('manual.equipment');        
    }	

    public function business()
    {       
        return view('manual.business');        
    }	

    public function illegal()
    {       
        return view('manual.illegal');        
    }
}
