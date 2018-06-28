@extends('layouts.master')
@section('title', 'Nike Fake Website')
@section('content')

<h3 class="text-center my-4">New arrivals</h3>

<div class="row">
	@if ($products->isEmpty())
		<div class="col-md-12 text-center"><p>There are no items.</p></div>
	@else
	@foreach ($products as $product)
	<div class="col-lg-3 col-md-4 col-sm-6 mb-4">
		<div class="card card-product h-100 text-center">
			<a href="{{ route('product.show', $product->id) }}">
				<img class="card-img-top" src="{{ asset('images/product/' . $product->image) }}" alt="">
			</a>
			<div class="card-body">
				<h5 class="card-title m-0 p-0">
					<small>
						<a class="text-dark" href="{{ route('product.show', $product->id) }}">{{ $product->name }}</a>
					</small>
				</h5>
				<p class="card-text m-0 p-0">{{ $product->colors()->count() }} Colors | {{ $product->sizes()->count() }} Sizes</p>
				<p class="card-text m-0 p-0">${{ $product->price }}</p>
			</div>
		</div>
	</div>
	@endforeach
	@endif
</div>

<div class="d-flex justify-content-center my-4">{{ $products->links() }}</div>

@endsection