@extends('admin.layout')
@section('content')
@section('title','News management')
<form action="">

	<a href="{{route('add_new')}}">Add</a>
	<table class="table" >
		<tr>
			<td>ID</td>
			<td>Subject</td>
			<td>Content</td>
			<td>Date</td>
			<td>Admin ID</td>
			<td>Category</td>
			<td>Update</td>
			<td>Delete</td>
			
			
			

		</tr>
		<?php foreach ($result as $each): ?>
		<tr>
			<td>{{$each->new_id}}</td>
			<td>{{$each->subject}}</td>
			<td>{{$each->content}}</td>
			<td>{{$each->date}}</td>
			<td>{{$each->admin_id}}</td>
			<td>{{$each->new_category_name}}</td>
			<td><a href="{{route('view_update_new',['new_id'=>$each->new_id])}}">Update</a></td>
			<td><a href="{{route ('delete_new',['new_id'=>$each->new_id])}}">Delete</a></td>
			
			
			
			
		</tr>
		<?php endforeach ?>

</table>
</form>
@endsection
