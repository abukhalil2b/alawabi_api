@extends('layouts.master')
@section('content')
<style>
.text-xs{
	font-size:12px;
}
</style>

	<div class="container">
		<form action="{{route('student.store')}}" method="post">
			@csrf
			<div class="input-container">
				الهاتف
			<input class="input" name="phone" type="number">
			</div>

			<div class="input-container">
				الإسم
			<input class="input" name="name">
			</div>
			
			 <div class="input-container">
			 	الولاية
			 	<select class="input" name="state_id">
			 		<option value=""></option>
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
		<div class="bar">عدد المشتركين: {{count($students)}}</div>
	</center>
	<center class="bar mt-3">
		<a class="m-3" href="{{route('student.numberlist')}}">نسخة احتياطية من الأرقام</a>
		<a class="m-3" href="{{route('student.student_index',1)}}">المشاركين المحدثين بياناتهم</a>
		<a class="m-3" href="{{route('student.student_index',0)}}">المشاركين الغير محدثين بياناتهم</a>
	</center>

	<div class="container">
		<form action="{{route('student.search')}}" method="post">
			@csrf
			<div class="input-container">
				الهاتف
			<input class="input" name="phone" type="number">
			</div>
			<div class="btn-container">
				<button class="btn btn-info"><b>بحث </b></button>
			</div>
		</form>
		
	</div>



@endsection