@extends('layouts.app')

@section('content')
<section>
	<div class="container">
		<div class="row">
			
			@foreach ($comic_array as $comics)
			
			<div class="card">
				<div class="image">
					<img src="{{$comics['thumb']}}" alt="">
				</div>
				<div class="texts">
					<h3>{{$comics['title']}}</h3>
				</div>
			</div>
			@endforeach
							
		</div>
	</div>
</section>
@endsection