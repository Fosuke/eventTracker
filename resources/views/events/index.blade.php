@extends('layouts.app')

@section('content')
	<a class="btn btn-primary" href="/events/create">Add New Event</a>
	@foreach($events as $event)
		<a href="/events/{{$event->id}}">
		@include('events.event')</a>
	@endforeach
@endsection