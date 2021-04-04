@extends('layouts.master')
@section('content')
	<div class="container">
		<form action="{{route('student.update',['student'=>$student->id])}}" method="post">
			@csrf
			
			<div class="input-container">
				الهاتف
				<input value="{{$student->phone}}" class="input" name="phone" type="number">
			</div>

			<div class="input-container">
				الإسم
				<input value="{{$student->name}}" class="input" name="name">
			</div>

			 <div class="input-container">
			 	الولاية
				<input value="{{$student->state}}" class="input" name="state">
			</div>

			<div class="input-container">
			 	كلمة المرور
			<input value="{{$student->password}}" class="input" name="password">
			</div>
			<div class="btn-container">
				<button class="btn btn-secondary"><b>حفظ </b></button>
			</div>

		</form>
	</div>

@endsection