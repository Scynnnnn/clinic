@extends('admin.layout')
@section('content')
@section('title','Add new')
<div class="table">
<form method="post" action="{{route('process_add_new')}}">
	<h1>Create news</h1>
	<input type="hidden" name="_token" value="{{csrf_token()}}">

@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
		
		<div class="content">
		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">subject</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="text"
					name="subject"
					aria-required="true"
					/>
				</div>
				<div class="col-sm-4"><code>required*</code></div>
			</div>
		</fieldset>


		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Content</label>
				<div class="col-sm-6">
					<textarea class="form-control" name="content"> 
						
					</textarea>
				</div>
				<div class="col-sm-4"><code>required*</code></div>
			</div>
		</fieldset>

		<input type="hidden" name="date" value="<?php echo date('Y-m-d'); ?>">
		<input type="hidden" name="admin_id" value="{{Session::get('admin_id')}}">

		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Category</label>
				<div class="col-sm-6">
					<select name  ="new_category_id" class="form-control">
					@foreach ($result as $each)
					<option value ="{{$each->new_category_id}}">
					{{$each->new_category_name}}
					</option>
					@endforeach
					</select>
				</div>
				<div class="col-sm-4"><code>required*</code></div>
			</div>
		</fieldset>
	
	
	<button>add</button>
</form>
@endsection
</div>



