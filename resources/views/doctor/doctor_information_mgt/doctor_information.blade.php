@extends('doctor.layout')
@section('content')
@section('title','Doctor Information')
<form action="">
	

	<a href="{{route('view_update_doctor',['doctor_id'=>Session::get('doctor_id')])}}">Update</a>

	<?php foreach ($result as $each): ?>
	<table class="table" >

		<tr>
			<td>ID</td>
			<td>Email</td>
			<td>Name</td>
			<td>Phone number</td>
			<td>Major</td>
			
			
			

		</tr>
		
		<tr>
			<td>{{$each->doctor_id}}</td>
			<td>{{$each->email}}</td>
			<td>{{$each->name}}</td>
			<td>{{$each->phone_numb}}</td>
			<td>{{$each->major_id}}</td>
			
			
			
			
			
		</tr>
		<?php endforeach ?>

</table>
</form>
@endsection