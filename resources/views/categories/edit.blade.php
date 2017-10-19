@extends('layouts.app')

<h1>Edit a Category</h1>

	<hr>

	<form method="POST" action="/categories/{{$category->id}}">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		<div class="form-group">
			<label for="name">Name:</label>
			<input type="text" class="form-control" id="name" name="name" value="{{$category->name}}">
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
		<div class="form-group">
			@include('layouts.errors')
		</div>
	</form>