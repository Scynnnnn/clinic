@extends('admin.layout')
@section('content')
@section('title','Update your information')

<div class="table">


	<form id="allInputsFormValidation" class="form-horizontal"  method="post" action="{{ route('process_update_admin',['admin_id'=>$array_admin[0]->admin_id]) }}" novalidate="novalidate">
		
	{{-- <form method="post" action="{{ route('process_update_admin',['admin_id'=>$array_admin[0]->admin_id]) }}"> --}}

		<legend>Update an Admin</legend>

		@foreach ($array_admin as $each)
		<input type="hidden" name="_token" value="{{csrf_token()}}">
	<div class="col-md">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Profile</h4>
                            </div>
                            <div class="content">
                                <form>
                                    

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control"  name="password" value="{{$each->password}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone number</label>
                                                <input type="text" class="form-control"  name="phone_numb" value="{{$each->phone_numb}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" name="address"  value="{{$each->address}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>About Me</label>
                                                <textarea rows="5" class="form-control" placeholder="Here can be your description" value="Mike">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
		@endforeach
	</form>
</div>








@endsection
