@extends('layouts.layout')
@section('title')
Our Student App
@stop

@section('body')
<div class="container">
	<div>
		<a class="bttn" href="{{ route('students.create') }}">Add New</a>
	</div>
	<section id="students-table">
		<table class="table table-hover">
			<caption>{{-- test caption --}}</caption>
			<thead>
				<th>ID</th>
				@foreach($DIF as $d)
					<?php $cleand = ucwords(str_replace("_", " ", $d));?>
					<th>{{ $cleand }}</th>
				@endforeach
			</thead>
			<tbody>
				@foreach($students as $student)
					<tr id="students{{$student->id}}">
						<td>
							<a href="students/{{$student->id}}">
							{{$student->id}}
							</a>
						</td>
						
						@foreach($DIF as $d)
							<td>
								<a href="students/{{$student->id}}">
								{{ $student->$d }}
								</a>
							</td>
						@endforeach
					</tr>
				@endforeach
			</tbody>
		</table>
	</section>
</div>

@stop
@section('footer')
	This is the Footer area
@stop