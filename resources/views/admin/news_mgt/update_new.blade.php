@extends('admin.layout')
@section('content')
@section('title','Update new')
<h1>Update New</h1>
<form method="post" action="{{ route('process_update_new',['new_id'=>$array_new[0]->new_id]) }}">
	
@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
	
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	@foreach ($array_new as $each)
		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">subject</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="text"
					name="subject"
					value="{{$each->subject}}"
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
					<input class="form-control"
					type="text"
					name="content"
					value="{{$each->content}}"
					aria-required="true"
					/>
				</div>
				<div class="col-sm-4"><code>required*</code></div>
			</div>
		</fieldset>

		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Date</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="date"
					name="content"
					value="{{$each->date}}"
					aria-required="true"
					/>
				</div>
				<div class="col-sm-4"><code>required*</code></div>
			</div>
		</fieldset>

		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Date</label>
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
	<button>Update</button>
	@endforeach	

</form>
@endsection



