@extends('layouts.app')

@section('content')
	<section class="main_card">
		<h1>{{ $current_card['title'] }}</h1>
		<p>{{ $current_card['price'] }}</p>
		@dump($current_card)
	</section>
@endsection