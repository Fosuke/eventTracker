@extends('layouts.app')

@section('content')
	<h1>Create a Category</h1>

	<hr>

	<form method="POST" action="/categories">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="name">Name:</label>
			<input type="text" class="form-control" id="name" name="name" >
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
		<div class="form-group">
			@include('layouts.errors')
		</div>
	</form>

@endsection