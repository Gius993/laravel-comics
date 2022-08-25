@extends('layouts.app')

@section('content')
<section>
	<div class="container">
		<div class="row">
			
			@foreach ($comic_array as $comics)
			
			<div class="card">
				<div class="image">
							<a href="{{route('card', ['id' => $comics['id']])}}">
								<img src="{{$comics['thumb']}}" alt="">
							</a>
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