<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Game;
use App\Models\Hood;
use App\Models\Building;
use App\Models\Gang;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
	//main 
    public function index()
    {            	
		$games = Game::with('gangs','buildings','hoods','cars')->orderBy('building_name','ASC')->paginate(50);
        $user = auth()->user();
		return view('games.index', compact('games','user'));        
    }
	
	//show form
    public function show($id)
    {       
        $game = Game::with('gangs','buildings','hoods','cars')->where('game_id', $id)->firstOrFail();
        $hoods = Hood::with('games','buildings','types','owners','guards')->where('game', $id)->get();
        $buildings = Building::with('games','hoods','types','owners','guards')->where('game', $id)->get();
        $gangs = Gang::with('games','users','buildings','cars')->where('game', $id)->get();
        $user = auth()->user();
		return view('games.show', compact('game','user','hoods','buildings','gangs'));        
    }	

	//edit form
    public function edit($id)
    {       
        $game = Game::with('gangs','buildings','hoods','cars')->where('game_id', $id)->firstOrFail();
        $hoods = Hood::with('games','buildings','types','owners','guards')->where('game', $id)->get();
        $buildings = Building::with('games','hoods','types','owners','guards')->where('game', $id)->get();
        $gangs = Gang::with('games','users','buildings','cars')->where('game', $id)->get();
        $user = auth()->user();
		return view('games.edit', compact('game','user','hoods','buildings','gangs'));      
    }

    //create form
    public function create(Request $request, $id)
    {
        $user = auth()->user();
        return view('games.create', compact('user')); 
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
