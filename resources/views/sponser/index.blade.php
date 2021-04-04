@extends('layouts.master')
@section('content')
<style>
	img{
		width: 200px;
    	display: block;
	}
</style>
	<div class="container">
		<form action="{{route('sponser.store')}}" method="post">
			@csrf
			<div class="input-container">
				الداعم
			<input class="input" name="title">
			</div>

			<div class="input-container">
				الوصف
			<input class="input" name="descr">
			</div>

			<div class="input-container">
				رابط الصورة إن وجد
			<input class="input" name="url">
			</div>
			<div class="btn-container">
				<button class="btn"><b>حفظ </b></button>
			</div>
		</form>
	</div>


	<div class="container">

		
	   @foreach($sponsers as $sponser)
	   <div class="bar mt-1 {{$sponser->active==1?'active':''}}">
	   	@if($sponser->url)
	   	<img src="{{$sponser->url}}" alt="img">@endif
	   	({{$sponser->id}}) - {{$sponser->title}}
	   	<div>{{$sponser->descr}}</div>
	   	<a href="{{route('sponser.edit',['sponser'=>$sponser->id])}}">تعديل</a>
	   	<a href="{{route('sponser.toggle',['sponser'=>$sponser->id])}}">تفعيل وتعطيل</a>
	   </div>
	   @endforeach
	</div>


@endsection