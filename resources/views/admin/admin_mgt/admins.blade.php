@extends('admin.layout')
@section('content')
@section('title','Admins management')
<form action="">
	<h1>Admin management</h1>
	@if (Session::has('success'))
        <h4>{{Session::get('success')}}</h4>
    @endif
	<h5><a href="{{route('add_admin')}}"><i class="pe-7s-add-user"></i>Add user</a></h5>
	<table class="table" style="" >
		<tr>
			<td>ID</td>
			<td>Name</td>

			<td>Dob</td>
			<td>Address</td>
			<td>Phone number</td>
			<td>Admin level</td>
			<td>Update</td>
			<td>Delete</td>
			
			
			

		</tr>
		<?php foreach ($result as $each): ?>
		<tr>
			<td>{{$each->admin_id}}</td>
			<td>{{$each->name}}</td>

			<td>{{$each->age}}</td>
			<td>{{$each->address}}</td>
			<td>{{$each->phone_numb}}</td>
			<td>@if ($each->level==1)
				Super Admin
			@else
				Admin
			@endif</td>
			<td><a href="{{route('view_update_admin',['admin_id'=>$each->admin_id])}}">Update</a></td>
			<td><a href="{{route ('delete_admin',['admin_id'=>$each->admin_id])}}">Delete</a></td>
			
			
			
			
		</tr>
		<?php endforeach ?>

</table>




</form>
@endsection
