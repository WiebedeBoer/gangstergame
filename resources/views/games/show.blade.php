@extends('layouts.city')
@section('title')
Game
@endsection
@section('content')

<h1>{{$game->game_name}}</h1>

<div class="container-fluid justify-content-center">
	<div class="py-5">
		<div class="customcanvas" id="customcanvas" style="width:100%; height:800px; background-color: rgb(0, 76, 76);margin:auto;"></div>
		<div id="game" class="game"></div>
		@include('place.showscript')
		<!--message-->
        <div id="message" class="ce"></div>
    </div>
</div>

@endsection