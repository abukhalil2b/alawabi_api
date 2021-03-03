@extends('layouts.master')
@section('content')
	<div class="container">
		<div class="bar">
			<div>عدد الطلاب الذين جاوبوا: {{count($answers)}}</div>
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
		</div>
		<table class="table table-bordered">
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
					@if($answer->answer=='op1') الخيار الأول @endif
					@if($answer->answer=='op2') الخيار الثاني @endif
					@if($answer->answer=='op3') الخيار الثالث @endif
				</td>
				<td>{{$answer->correct===1?'اجابته صحيحة':'اجابته خاطئة'}}</td>
				<td>{{$answer->created_at->diffForHumans()}}</td>
			</tr>
			@endforeach
		</table>
	</div>
@endsection