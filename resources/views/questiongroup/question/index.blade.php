@extends('layouts.master')
@section('content')

	<div class="container">
		
	   <div class="bar">
	   	{{$questiongroup->title}}
	   </div>
	   @if($questiongroup->questiontype=='multichoice')
	   @include('questiongroup.question._multichoice')
	   @else
	   @include('questiongroup.question._correct_answer')
	   @endif
	</div>

<style>
	img{
		width: 100px;
	}
</style>
	<div class="container">
		
		@foreach($questions as $question)
		<div class="bar mt-3">
			<div class="bar">
				السؤال: 
				<a href="{{route('question.show',['question'=>$question->id])}}">
					{{$question->content}}
				</a>
			</div>
			<div>
				@if($question->url)
				<img src="{{$question->url}}" alt="">
				@endif
			</div>

			@if($questiongroup->questiontype=='multichoice')

			<div>(1): {{$question->op1}}</div>
			<div>(2): {{$question->op2}}</div>
			<div>(3): {{$question->op3}}</div>
			<div>
				الإجابة الصحيحة: 
				@if($question->answer=='op1')  الخيار الأول @endif
				@if($question->answer=='op2')  الخيار الثاني @endif
				@if($question->answer=='op3')  الخيار الثالث @endif
			</div>

			@else
				الإجابة الصحيحة: 
				@if($question->answer=='correct')  صح @else خطأ @endif

			@endif
		</div>
		@endforeach
	</div>


@endsection