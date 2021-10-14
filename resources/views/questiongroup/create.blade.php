@extends('layouts.master')
@section('content')
	<div class="container">
		<form action="{{route('questiongroup.store')}}" method="post">
			@csrf
			<div class="input-container">
				عنوان (مثلا: أسئلة اليوم الأول)
				<input class="input" name="title" >
				<select class="input" name="questiontype">
					<option value="multichoice">خيار متعدد</option>
					<option value="correct_answer">صح وخطأ</option>
				</select>
			</div>
			<div class="btn-container">
				<button class="btn btn-secondary"><b>حفظ </b></button>
			</div>
		</form>
	</div>

	<div class="container">
		@foreach($questiongroups as $questiongroup)
		<div class="bar mt-5  {{$questiongroup->active==1?'bg-lightgreen':'bg-black'}}">
			<a href="{{route('question.index',['questiongroup'=>$questiongroup->id])}}">
				{{$questiongroup->title}}
			</a>
			<a class="mt-5 btn btn-sm btn-outline-warning" href="{{route('questiongroup.toggle',['questiongroup'=>$questiongroup->id])}}">تعطيل وتغعيل </a>
			<a class="btn btn-sm btn-outline-primary" href="{{route('answer.index',['questiongroup'=>$questiongroup->id])}}">الإجابات</a>
		</div>
		
		@endforeach
	</div>

@endsection