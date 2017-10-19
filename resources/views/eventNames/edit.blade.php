@extends('layouts.app')

@section('content')
	<h1>Edit {{$eventName->name}}</h1>

	<hr>

	<form method="POST" action="/eventNames/{{$eventName->id}}">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		<div class="form-group">
			<label for="name">Name:</label>
			<input type="text" class="form-control" id="name" name="name" value="{{$eventName->name}}">
		</div>
		<div class="form-group">
			<label for="category_id">Category:</label>
			<select class="form-control" id="category_id" name="category_id" >
				@foreach($categories as $category)
					<option value={{$category->id}} @if($eventName->category_id == $category->id) selected @endif>{{$category->name}}</option>
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