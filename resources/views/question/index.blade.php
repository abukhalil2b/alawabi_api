@extends('layouts.master')
@section('content')

	<div class="container">
	   
	   <form action="{{route('question.store')}}" method="post">
	        @csrf
	        <div class="input-container">
	        	محتوى السؤال
	        <input class="input" name="content">
	        </div>
	        <div class="input-container">
	        	رابط الصورة إن وجد
	        <input class="input" name="url">
	        </div>
	         <div class="input-container">
	         	الخيار الأول
	        <input class="input" name="op1">
	        </div>
	         <div class="input-container">
	         	الخيار الثاني
	        <input class="input" name="op2">
	        </div>
	         <div class="input-container">
	         	الخيار الثالث
	        <input class="input" name="op3">
	        </div>
	         <div class="input-container">
	         	الإجابة
	        <select class="input" name="answer">
	            <option value="op1">الخيار الأول</option>
	            <option value="op2">الخيار الثاني</option>
	            <option value="op3">الخيار الثالث</option>
	        </select>
	        </div>
	        <div class="btn-container">
	        	<button class="btn btn-block btn-primary mt-3"><b>حفظ السؤال</b></button>
	        </div>
	    </form>
	</div>

<style>
	img{
		width: 100px;
	}
</style>
	<div class="container">
		
		@foreach($questions as $question)
		<div class="bar mt-1">
			<div>السؤال: {{$question->content}}</div>
			<div>
				@if($question->url)
				<img src="{{$question->url}}" alt="">
				@endif
			</div>
			<div>(1): {{$question->op1}}</div>
			<div>(2): {{$question->op2}}</div>
			<div>(3): {{$question->op3}}</div>
			<div>
				الإجابة الصحيحة: 
				@if($question->answer=='op1')  الخيار الأول @endif
				@if($question->answer=='op2')  الخيار الثاني @endif
				@if($question->answer=='op3')  الخيار الثالث @endif
			</div>
			<div>{{$question->active?'السؤال فعال':'السؤال معطل'}}</div>
			<div class="row justify-content-center">
				<div class="col-lg-3">
					<a class="mt-5 btn btn-sm btn-outline-danger" href="{{route('question.delete',['question'=>$question->id])}}">حذف</a>
				</div>
				<div class="col-lg-3">
					<a class="mt-5 btn btn-sm btn-outline-warning" href="{{route('question.toggle',['question'=>$question->id])}}">تعطيل وتغعيل السؤال</a>
				</div>
				<div class="col-lg-3">
					<a class="mt-5 btn btn-sm btn-outline-primary" href="{{route('answer.index',['question'=>$question->id])}}">الإجابات</a>
				</div>
			</div>
		</div>
		@endforeach
	</div>


@endsection