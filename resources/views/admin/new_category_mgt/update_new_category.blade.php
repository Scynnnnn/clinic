@extends('admin.layout')
@section('content')
@section('title','Update new category')


@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
		
<form method="post" action="{{ route('process_update_new_category',['new_category_id'=>$array_new_category[0]->new_category_id]) }}">
	<h1>Update new category</h1>
	@foreach ($array_new_category as $each)
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Category name</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="text"
					value="{{$each->new_category_name}}"
					name="new_category_name"
					number="true"
					/>
				</div>
				
			</div>


			
		</fieldset>
	<button>Update</button>
	@endforeach

</form>
@endsection
