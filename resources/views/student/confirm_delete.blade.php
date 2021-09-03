@extends('layouts.master')
@section('content')
	<div class="container">
		<center>
			<a class="text-danger" href="{{route('student.delete',['student'=>$student->id])}}"><h2>تأكيد الحذف</h2></a>
		</center>
	</div>

@endsection
