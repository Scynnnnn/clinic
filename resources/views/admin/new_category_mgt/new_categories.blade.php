@extends('admin.layout')
@section('content')
@section('title','New categories management')

<form action="">
	@if (Session::has('success'))
        <h4>{{Session::get('success')}}</h4>
    @endif

    @if (Session::has('error'))
        <h4>{{Session::get('error')}}</h4>
    @endif
	<a href="{{route('add_new_category')}}">Add</a>
	<table class="table" >
		<tr>
			<td>ID</td>
			<td>Category name</td>
			<td>Update</td>
			<td>Delete</td>
			
			
			

		</tr>
		<?php foreach ($result as $each): ?>
		<tr>
			<td>{{$each->new_category_id}}</td>
			<td>{{$each->new_category_name}}</td>
			<td><a href="{{route('view_update_new_category',['new_category_id'=>$each->new_category_id])}}">Update</a></td>
			<td><a href="{{route ('check_new_category_to_delete',['new_category_id'=>$each->new_category_id])}}">Delete</a></td>
			
			
			
			
		</tr>
		<?php endforeach ?>

</table>
</form>
@endsection