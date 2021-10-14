@extends('layouts.master')
@section('content')
	<div class="container">
		<form action="{{route('questiongroup.store')}}" method="post">
			@csrf
			<div class="input-container">
				عنوان (مثلا: أسئلة اليوم الأول)
				<input class="input" name="title" >
			</div>
			<div class="btn-container">
				<button class="btn btn-secondary"><b>حفظ </b></button>
			</div>
		</form>
	</div>

	<div class="container">
		@foreach($questiongroups as $questiongroup)
		<div class="bar {{$questiongroup->active?'bg-lightgreen':'bg-black'}}">
			<a href="{{route('question.index',['questiongroup'=>$questiongroup->id])}}">
				{{$questiongroup->title}}
			</a>
			<a class="mt-5 btn btn-sm btn-outline-warning" href="{{route('questiongroup.toggle',['questiongroup'=>$questiongroup->id])}}">تعطيل وتغعيل </a>
		</div>

		<div class="row justify-content-center">
			<div class="col-lg-2">
				<a class="mt-5 btn btn-sm btn-outline-primary" href="{{route('answer.index',['questiongroup'=>$questiongroup->id])}}">الإجابات</a>
			</div>
		</div>
		
		@endforeach
	</div>

@endsection