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
				<td>
					<b>الولاية</b>
				</td>
				<td>
					<b>عدد المشتركين</b>
				</td>
			</tr>
			@foreach($states as $state)
			<tr>
				<td>{{$state->name}}</td>
				<td>{{$state->students_count}}</td>
			</tr>
			@endforeach
			<tr>
				<td>
					المجموع
				</td>
				<td>
					{{$totalStudent}}
				</td>
			</tr>
		</table>
	</div>

@endsection