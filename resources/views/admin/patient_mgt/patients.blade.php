@extends('admin.layout')
@section('content')
@section('title','Patients management')
<form action="">
	@if (Session::has('success'))
        <h4>{{Session::get('success')}}</h4>
    @endif
	<a href="{{route('view_add_patient')}}">Add</a>
	<table class="table" >

		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Email</td>
			<td>Date of Birth</td>
			<td>Gender</td>
			<td>Address</td>
			<td>Phone number</td>
			<td>Update</td>
			<td>Delete</td>
			
			
			
			

		</tr>
		<?php foreach ($result as $each): ?>
		<tr>
			<td>{{$each->patient_id}}</td>
			<td>{{$each->name}}</td>
			<td>{{$each->email}}</td>
			<td>{{$each->dob}}</td>
			<td>@if ($each->gender==1)
				Male
			@else
				Female
			@endif</td>
			<td>{{$each->address}}</td>
			<td>{{$each->phone_numb}}</td>
			<td><a href="{{route('view_update_patient',['patient_id'=>$each->patient_id])}}">Update</a></td>
			<td><a href="{{route ('delete_patient',['patient_id'=>$each->patient_id])}}">Delete</a></td>
			
			
			
			
			
		</tr>
		<?php endforeach ?>

</table>
<hr>
</form>
<div class="content">
<ul class="pagination">
{{ $result->link() }}
</ul>
@endsection
