@extends('layouts.app')

@section('content')
	<a href="/categories/{{$category->id}}/edit">
		@include('categories.category')
	</a>
@endsection