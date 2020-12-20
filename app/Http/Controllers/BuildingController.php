<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Game;
use App\Models\Hood;
use App\Models\Building;
use App\Models\Gang;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

class BuildingController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }	
	
	//main 
    public function index()
    {            	
		$buildings = Building::with('games','hoods','types','owners','guards')->orderBy('building_name','ASC')->paginate(50);
        $user = auth()->user();
		return view('buildings.index', compact('buildings','user'));        
    }
	
	//show form
    public function show($id)
    {       
        $building = Building::with('games','hoods','types','owners','guards')->where('building_id', $id)->firstOrFail();
        $user = auth()->user();
		return view('buildings.show', compact('building','user'));        
    }	

	//edit form
    public function edit($id)
    {       
        $building = Building::with('games','hoods','types','owners','guards')->where('building_id', $id)->firstOrFail();
        $user = auth()->user();
		return view('buildings.edit', compact('building','user'));        
    }

    //update function
    public function update(Request $request, $id)
    {

    }
}
