@extends('layouts.master')
@section('content')

	<div class="container">
		<form action="{{route('winner.store')}}" method="post">
			@csrf
			
			<div class="input-container">
				الهاتف
			<input class="input" name="phone">
			</div>

			<div class="input-container">
				الإسم
			<input class="input" name="name">
			</div>
			 
			<div class="btn-container">
				<button class="btn btn-primary"><b>حفظ </b></button>
			</div>
		</form>
	</div>
<style>
.text-xs{
	font-size:12px;
}
</style>

	<div class="container">
		<div class="bar">عدد الطلاب: {{count($winners)}}</div>
		<table class="table text-xs">
			<tr>
				<td>التسلسل</td>
				<td>الإسم</td>
				<td>الهاتف</td>
				<td>إدارة</td>
			</tr>
			@foreach($winners as $winner)
			<tr>
				<td>{{$winner->id}}</td>
				<td>{{$winner->name}}</td>
				<td>{{$winner->phone}}</td>
				
				<td>
					<a href="{{route('winner.delete',['winner'=>$winner->id])}}">حذف</a>
				</td>
			</tr>
			@endforeach
		</table>
	</div>


@endsection