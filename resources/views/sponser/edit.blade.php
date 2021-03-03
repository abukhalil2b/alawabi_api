@extends('layouts.master')
@section('content')

	<div class="container">
		<form action="{{route('sponser.update',['sponser'=>$sponser->id])}}" method="post">
			@csrf
			<div class="input-container">
				الداعم
			<input class="input" name="title" value="{{$sponser->title}}">
			</div>

			<div class="input-container">
								رابط الصورة إن وجد
			<input class="input" name="url" value="{{$sponser->url}}">
			</div>
			<div class="btn-container">
				<button class="btn"><b>حفظ </b></button>
			</div>
		</form>
	</div>

@endsection