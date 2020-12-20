<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Game;
use App\Models\Hood;
use App\Models\Building;
use App\Models\Gang;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

class GangController extends Controller
{
	//main 
    public function index()
    {            	
		$gangs =  Gang::with('games','users','buildings','cars')->orderBy('gang_name','ASC')->paginate(50);
        $user = auth()->user();
		return view('gangs.index', compact('gangs','user'));        
    }
	
	//show form
    public function show($id)
    {       
        $gang = Gang::with('games','users','buildings','cars')->where('gang_id', $id)->firstOrFail();
        $user = auth()->user();
		return view('gangs.show', compact('gang','user'));        
    }	

	//edit form
    public function edit($id)
    {       
        $gang = Gang::with('games','users','buildings','cars')->where('gang_id', $id)->firstOrFail();
        $user = auth()->user();
		return view('gangs.edit', compact('gang','user'));     
    }

    //create form
    public function create(Request $request, $id)
    {
        $user = auth()->user();
        $game = Game::with('gangs','buildings','hoods','cars')->where('game_id', $id)->firstOrFail();
        return view('gangs.create', compact('user','game')); 
    }

    //update function
    public function update(Request $request, $id)
    {

    }

    //store function
    public function store(Request $request, $id)
    {

    }

    //destroy function
    public function destroy(Request $request, $id)
    {

    }
}
