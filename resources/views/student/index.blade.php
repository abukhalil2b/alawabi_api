@extends('layouts.master')
@section('content')
<style>
.text-xs{
	font-size:12px;
}
.bar2{
	border: 1px solid #ccc;
	width: 95%;
	margin: 1% auto;
	padding: 1%;
}
.title{
	color: darkred;
	font-weight: bolder;
}
</style>

	<div class="bar2">
		<h4 class="title">التسجيل</h4>
		<form action="{{route('student.store')}}" method="post">
			@csrf
			<div class="input-container">
				<input class="input" name="phone" type="number" placeholder="الهاتف">
			</div>

			<div class="input-container">
				<input class="input" name="name" placeholder="الإسم">
			</div>
			
			 <div class="input-container">
			 	<select class="input" name="state_id" placeholder="">
			 		<option value="">..الولاية..</option>
			 		@foreach($states as $state)
			 		<option value="{{$state->id}}">{{$state->name}}</option>}
			 		@endforeach
			 	</select>
			</div>
			كلمة المرور نفس رقم الهاتف
			<div class="btn-container">
				<button class="btn btn-primary"><b>حفظ </b></button>
			</div>
		</form>
	</div>

	<center>
		<a href="{{route('student.by_state')}}">
			<div class="bar">عدد المشتركين: {{count($students)}}</div>
		</a>
	</center>
	<center class="bar mt-3">
		<a class="m-3" href="{{route('student.student_index',1)}}">المشاركين المحدثين بياناتهم</a>
		<a class="m-3" href="{{route('student.student_index',0)}}">المشاركين الغير محدثين بياناتهم</a>
	</center>

	<div class="bar2">
		<h4 class="title">البحث</h4>
		<form action="{{route('student.search')}}" method="post">
			@csrf
			<div class="input-container">
				<input class="input" name="phone" type="number" placeholder="الهاتف">
			</div>
			<div class="btn-container">
				<button class="btn btn-info"><b>بحث </b></button>
			</div>
		</form>
	</div>




@endsection