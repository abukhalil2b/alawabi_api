@extends('layouts.master')
@section('content')
	<div class="container">
		<div class="bar">
			<form action="{{route('answer.delete',['questiongroup'=>$questiongroup->id])}}" method="post">
				@csrf
				<input class="input" type="number" name="passcode" value="" placeholder="passcode">
				<button class="btn btn-block btn-danger mt-3" type="submit">حذف</button>	
			</form>
		</div>
		<div class="bar mt-3">
			{{$questiongroup->title}}
		</div>
		<div class="bar mt-1">
			<div>عدد الطلاب الذين جاوبوا: {{count($answers)}}</div>
			@foreach($questiongroup->questions as $question)
			<div>
				<div>السؤال: {{$question->content}} </div>
				<div>الخيار الأول: {{$question->op1}} </div>
				<div>الخيار الثاني: {{$question->op2}} </div>
				<div>الخيار الثالث: {{$question->op3}} </div>
				الإجابة: 
				@if($question->answer=='op1') الخيار الأول @endif
				@if($question->answer=='op2') الخيار الثاني @endif
				@if($question->answer=='op3') الخيار الثالث @endif

			</div>
			@endforeach
		</div>
		<table class="table table-bordered mt-3">
			<tr>
				<td>التسلسل</td>
				<td>رقم السؤال</td>
				<td>هاتف الطالب</td>
				<td>اجابته</td>
				<td>هل صحيحة</td>
				<td>وقت الإرسال</td>
			</tr>
			@foreach($answers as $answer)
			<tr>
				<td>({{$answer->id}})</td>
				<td>{{$answer->question_id}}</td>
				<td>{{$answer->phone}}</td>
				<td>
					@foreach(json_decode($answer->answers) as $answer)
					@if($answer->answer=='op1') الخيار الأول @endif
					@if($answer->answer=='op2') الخيار الثاني @endif
					@if($answer->answer=='op3') الخيار الثالث @endif
					@endforeach
				</td>
				<td>{{$answer->correct==1?'اجابته صحيحة':'اجابته خاطئة'}}</td>
				<td>@if($answer->created_at){{$answer->created_at->diffForHumans()}}@endif</td>
			</tr>
			@endforeach
		</table>
	</div>
