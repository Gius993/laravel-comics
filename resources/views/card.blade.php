@extends('layouts.app')

@section('content')
	<section class="main_card">
		<h1>{{ $current_card['title'] }}</h1>
		<p>{{ $current_card['price'] }}</p>
		<p>{{ $current_card['description'] }}</p>
		<ul>
			
			@foreach($current_card['artists'] as $artist)
				<li>
					{{ $artist }}
				</li>
			@endforeach
		</ul>
		@dump($current_card)
	</section>
@endsection