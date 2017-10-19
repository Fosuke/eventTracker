@extends('layouts.app')

@section('content')
	<a href="/events/{{$event->id}}/edit">
		@include('events.event')
	</a>
@endsection