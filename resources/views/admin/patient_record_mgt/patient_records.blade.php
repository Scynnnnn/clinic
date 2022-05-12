@extends('admin.layout')
@section('content')
@section('title','Patient records management')
<form action="">

	<a href="{{route('view_add_patient_record')}}">Add</a>

<div class="container">
      <div id="calendar"></div>
    </div>
</form>
@endsection
@push('ajax')
<script type="text/javascript">
  $(document).ready(function() {
   var calendar = $('#calendar').fullCalendar();
 });
</script>
@endpush