@extends('patient.layout')
@section('content')
@section('title','Records Information')
<form action="">
	@if (Session::has('success'))
        <h4>{{Session::get('success')}}</h4>
    @endif
	<table class="table" >

		<tr>
			<td>Record ID</td>
			<td>Date</td>
			<td>Doctor ID</td>
			<td>Doctor Name</td>
			<td>Begin</td>
			<td>End</td>
			<td>Delete</td>
			
			
			
			

		</tr>
		@foreach ($records as $each)
		@if(Session::get('patient_id')==$each->patient_id)
		<tr>
			<td>{{$each->record_id}}</td>
			<td>{{$each->date}}</td>
{{-- 			<td>@if ($each->gender==2)
				{{$each->}}
			@else
				Female
			@endif</td> --}}
			<td>{{$each->doctor_id}}</td>
			<td>{{$each->name}}</td>
			<td>{{$each->begin}}</td>
			<td>{{$each->end}}</td>

			
			<td><a href="{{route ('delete_appointment',['record_id'=>$each->record_id])}}">Delete</a></td>
			
		</tr>
		@endif
		@endforeach
		

</table>
</form>
@endsection