@extends('Layouts.layout')
@section('title')
	{{ $student->last_name }}, {{ $student->first_name }}
@stop

@section('body')
<div class="container">
	<h1>
		{{ ucwords($student->last_name) }}, 
		{{ ucwords($student->first_name) }} 
		{{ substr(ucwords($student->middle_name),0,1) }}.
	</h1>
	<hr>
	{!! Form::open([
		'method' => 'delete',
		'route' => ['students.destroy', $student->id]
		]) !!}
		Address: {{ $student->address }}<br>
		Birthday: {{ $student->birthday }}<br>
		Email Address: {{ $student->email_address }}<br>

	<hr>
		<a class="bttn" href="{{ route('students.edit', $student->id) }}">Edit</a>
{{-- 		<input name="_method" type="hidden" value="DELETE"> --}}
	{!! Form::submit('Delete',[
		'class'=>'bttn-submit'
		]) !!}
{{-- 		<a class="bttn" href="{{route('students.destroy', $student->id)}}">Delete</a> --}}
	{!! Form::close() !!}
	<hr>
		<a class="bttn" href="/students">Go back to main page.</a>
</div>
@stop

{{-- {{ route('students.destroy') }} --}}