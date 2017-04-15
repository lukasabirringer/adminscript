@extends('layouts.frontend')

@section('content')

<div class="container">
		<div class="row">
				<div class="col-xs-12"> 

				<h2>{{ $page->name }}</h2>
				<h3>Kurzbeschreibung</h3>
				<p>{{ $page->description }}</p>
				<h3>Inhalt</h3>
				<p>{{ $page->content }}</p>
				
				</div>
		</div>
</div>

@endsection