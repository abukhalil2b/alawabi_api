@extends('layouts.master')
@section('content')
<style>
.text-xs{
	font-size:12px;
}
</style>

	<div class="container">
		
		<table class=" text-xs table-bordered table">
			<tr>
				<td>الولاية</td>
				<td>العدد</td>
			</tr>
			@foreach($students as $student)
			<tr>
				<td>{{$student->state->title}}</td>
				<td>{{$student->total}}</td>
			</tr>
			@endforeach
		</table>
	</div>



@endsection