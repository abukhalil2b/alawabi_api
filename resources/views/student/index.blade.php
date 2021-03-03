@extends('layouts.master')
@section('content')

	<div class="container">
		<form action="{{route('student.store')}}" method="post">
			@csrf
			<div class="input-container">
				الإسم
			<input class="input" name="name">
			</div>

			<div class="input-container">
				الهاتف
			<input class="input" name="phone">
			</div>

			 <div class="input-container">
			 	الولاية
			<input class="input" name="state">
			</div>

			 <div class="input-container">
			 	كلمة المرور
			<input class="input" name="password">
			</div>
			 
			<div class="btn-container">
				<button class="btn"><b>حفظ السؤال</b></button>
			</div>
		</form>
	</div>


	<div class="container">

		<div class="bar">عدد الطلاب: {{count($students)}}</div>
	   @foreach($students as $student)
	   <div class="bar mt-1">({{$student->id}}) - {{$student->phone}} - {{$student->state}}</div>
	   @endforeach
	</div>


@endsection