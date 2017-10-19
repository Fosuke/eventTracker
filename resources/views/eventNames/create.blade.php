@extends('layouts.app')

@section('content')
	<h1>Create an Event Name</h1>

	<hr>

	<form method="POST" action="/eventNames">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="name">Name:</label>
			<input type="text" class="form-control" id="name" name="name" >
		</div>
		<div class="form-group">
			<label for="category_id">Category:</label>
			<select class="form-control" id="category_id" name="category_id" >
				@foreach($categories as $category)
					<option value={{$category->id}}>{{$category->name}}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
		<div class="form-group">
			@include('layouts.errors')
		</div>
	</form>

@endsection