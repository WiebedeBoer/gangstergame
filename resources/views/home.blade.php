@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>

                <div class="links">
						<a href="/forum">Forum</a>
						<a href="/manual">Manual</a>
						<a href="/gangs">Gang</a>
						<a href="/games">City</a>
						<a href="/newspaper">Newspaper</a>
						<a href="/users/{{ Auth::user()->id }}">Account</a>
				</div>


            </div>
        </div>
    </div>
</div>
@endsection
