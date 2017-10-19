@extends('layouts.app')

@section('content')
	<a href="/eventNames/{{$eventName->id}}/edit">
		@include('eventNames.eventName')
	</a>
@endsection