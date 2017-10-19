@extends('layouts.app')

@section('content')
	<a class="btn btn-primary" href="/categories/create">Add New Category</a>
	@foreach($categories as $category)
		<a href="/categories/{{$category->id}}">
		@include('categories.category')</a>
	@endforeach
@endsection