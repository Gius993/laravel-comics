@extends('layouts.app')
@section('main')
	<section>
		<div class="container">
			<div class="row">
				@foreach ($comic_array as $item)
					
				<div class="card">
					<div class="image">
						<img src="https://media-assets.wired.it/photos/615f453651b7b2945256d47a/1:1/w_354%2Cc_limit/faq-poster.6a05e15.jpg" alt="">
					</div>
					<div class="texts">
						<h3>action comics</h3>
					</div>
				</div>
				@endforeach
				
			</div>
		</div>
	</section>
@endsection