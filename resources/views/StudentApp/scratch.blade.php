<?php 
$form_fields = array(
	'first_name' => "John",
	'middle_name' => "Middle",
	'last_name' => "Doe",
	'address' => "Your Address",
	'birthday' => "01-01-1990",
	'email_address' => "youremail@domain.com",
);
?>

{!! Form::model($students, ['action' => 'StudentController@index']) !!}
	@foreach ($form_fields as $field => $propertyvalue)
	<?php $form_label = ucwords(str_replace("_", " ", $field)); ?>
	{!! Form::label($field, ($form_label . ": ")) !!}
			 {!! Form::text($field, '',[
			 	'class' => '',
			 	'placeholder' => $propertyvalue
			 	]) !!}<br>
	@endforeach
	<br>
	<p>Field count: {{ count($form_fields) }}</p>
	{!! Form::submit('Submit',[
		'class'=>'test-class'
		]) !!}
{!! Form::close() !!}