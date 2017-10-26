@extends('layouts.layout')
@section('title')
Enter a New Student Record
@stop

@section('body')
<div class="container">

<?php 
// the form field names and their placeholders on the right
// referenced from the fields from the database
$form_fields = array(
	'first_name' 		=>		"John",
	'middle_name' 		=>		"Middle",
	'last_name' 		=>		"Doe",
	'address' 			=>		"Your Address",
	'birthday' 			=>		"YYYY-MM-DD",
	'email_address'		=>		"youremail@domain.com",
);
?>

<!--	This form is for the New action -->

{!! Form::open(['route' => 'students.store']) !!}
<!--{{-- 	@foreach ($form_fields as $field => $placeholder)
	<?php $form_label = ucwords(str_replace("_", " ", $field)); ?>
	{!! Form::label($field, ($form_label . ": ")) !!}
			 {!! Form::text($field, null,[
			 	'class' => '',
			 	'placeholder' => $placeholder,
			 	'autofocus' => 'autofocus',
			 	'required' => ''
			 	]) !!}<br>
	@endforeach --}}-->

	{!! Form::label('first_name', ("First Name: ")) !!}
		{!! Form::text('first_name', null,[
			 	'class' => '',
			 	'placeholder' => 'John',
			 	'autofocus' => 'autofocus',
			 	'required' => ''
			 	]) !!}<br>
	{!! Form::label('middle_name', ("Middle Name: ")) !!}
		{!! Form::text('middle_name', null,[
			 	'class' => '',
			 	'placeholder' => 'Doey',
			 	'autofocus' => 'autofocus'
			 	]) !!}<br>
	{!! Form::label('last_name', ("Last Name: ")) !!}
		{!! Form::text('last_name', null,[
			 	'class' => '',
			 	'placeholder' => 'Doe',
			 	'autofocus' => 'autofocus',
			 	'required' => ''
			 	]) !!}<br>
	{!! Form::label('address', ("Address: ")) !!}
		{!! Form::text('address', null,[
			 	'class' => '',
			 	'placeholder' => 'Your Address',
			 	'autofocus' => 'autofocus',
			 	'required' => ''
			 	]) !!}<br>
	{!! Form::label('birthday', ("Birthday: ")) !!}
		{!! Form::date('birthday', null,[
			 	'class' => '',
			 	'placeholder' => 'YYYY-MM-DD',
			 	'autofocus' => 'autofocus',
			 	'required' => '',
			 	]) !!}<br>
	{!! Form::label('email_address', ("Email Address: ")) !!}
		{!! Form::email('email_address', null,[
			 	'class' => '',
			 	'placeholder' => 'youremail@domain.com',
			 	'autofocus' => 'autofocus',
			 	'required' => '',
			 	]) !!}<br>


	<p>Field count: {{ count($form_fields) }}</p>
	{!! Form::submit('Save',[
		'class'=>'bttn-submit'
		]) !!}
{!! Form::close() !!}
<hr>
	<a class="bttn" href="/students">Go back to main page.</a>
</div>
@stop