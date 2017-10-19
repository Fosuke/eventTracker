@extends('layouts.app')

@section('content')
	<a class="btn btn-primary" href="/eventNames/create">Add New Event Name</a>
	@foreach($eventNames as $eventName)
		<a href="/eventNames/{{$eventName->id}}">
		@include('eventNames.eventName')</a>
	@endforeach
@endsection