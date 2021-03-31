@extends('layouts.master')
@section('content')
<div class="px-3">
	<form action="{{route('deleteAllAnswer')}}" method="post">
		@csrf
		<input type="number" name="passcode" class="form-control my-3" placeholder="passcode">
		<button class="btn btn-danger">حذف كل الإجابات</button>
	</form>
	<div class="mt-5">
		<a class="btn btn-success" href="{{route('answer.shuffle')}}">اسحب 10 أسماء بشكل عشوائي</a>
	</div>
	@forelse($answers as $answer)
	<div class="py-3">
		[{{$answer->id}}]
		@if($answer->student)
		{{$answer->student->name}}
		@else
		الاسم لا يتطابق
		@endif
		 {{$answer->phone}}
	</div>
	@empty
	<h3 class="mt-5 text-center">لا يوجد إجابات</h3>
	@endforelse
	</div>
@endsection