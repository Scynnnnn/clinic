@extends('admin.layout')
@section('content')
@section('title','Add new category')
<form method="post" action="{{route('check_new_category_exits')}}">
	<h1>Create new category</h1>
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	 @if (Session::has('error'))
        <h4>{{Session::get('error')}}</h4>
     @endif

     	@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
	<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Category name</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="text"
					name="new_category_name"
					number="true"
					/>
				</div>
				
			</div>


			
		</fieldset>
	<button>add</button>
</form>
@endsection

