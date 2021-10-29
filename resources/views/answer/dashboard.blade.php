@extends('layouts.master')
@section('content')
<div class="px-3">
	<form action="{{route('deleteAllAnswer')}}" method="post">
		@csrf
		<input type="number" name="passcode" class="form-control my-3" placeholder="passcode">
		<button class="btn btn-danger">حذف كل الإجابات</button>
	</form>
	<hr>

	<div class="mt-5">
		<a class="btn btn-success" href="{{route('answer.correct_numbers')}}">سحب أرقام الهواتف (الاجابات الصحيحة)</a>
	</div>

	<div class="mt-5">
		<a class="btn btn-success" href="{{route('answer.all_numbers')}}">سحب أرقام الهواتف (الكل) بدون تكرار</a>
	</div>

	</div>
@endsection