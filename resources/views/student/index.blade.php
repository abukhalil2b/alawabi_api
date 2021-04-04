@extends('layouts.master')
@section('content')

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
			<input class="input" name="state">
			</div>
			كلمة المرور نفس رقم الهاتف
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
		<div class="bar">عدد الطلاب: {{count($students)}}</div>
		<table class="table text-xs">
			<tr>
				<td>التسلسل</td>
				<td>الإسم</td>
				<td>الهاتف</td>
				<td>الولاية</td>
				<td>كلمة المرور</td>
				<td>إدارة</td>
			</tr>
			@foreach($students as $student)
			<tr>
				<td>{{$student->id}}</td>
				<td>{{$student->name}}</td>
				<td>{{$student->phone}}</td>
				<td>{{$student->state}}</td>
				<td>{{$student->password}}</td>
				<td>
					<a href="{{route('student.edit',['student'=>$student->id])}}">تعديل</a>
				</td>
			</tr>
			@endforeach
		</table>
	</div>


@endsection