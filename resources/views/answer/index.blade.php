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
		<center class="bar mt-3">
			<h3 class="text-blue-600">{{$questiongroup->title}}</h3>
			عدد المشاركين في هذه الأسئلة: {{count($answers)}}
		</center>

		<table class="table table-bordered mt-3">
			<tr>
				<td>التسلسل</td>
				<td>هاتف الطالب</td>
				<td>هل صحيحة</td>
				<td>وقت الإرسال</td>
			</tr>
			@foreach($answers as $answer)
			<tr>
				<td>({{$answer->id}})</td>
				<td>{{$answer->phone}}</td>
				
				<td>{{$answer->correct==1?'اجابته صحيحة':'اجابته خاطئة'}}</td>
				<td>@if($answer->created_at){{$answer->created_at->diffForHumans()}}@endif</td>
			</tr>
			@endforeach
		</table>
	</div>
