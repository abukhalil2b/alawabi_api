@extends('layouts.master')
@section('content')
	<div class="container">
		<form action="{{route('questiongroup.update',$questiongroup->id)}}" method="post">
			@csrf
			<div class="input-container">
				عنوان (مثلا: أسئلة اليوم الأول)
				<input class="form-control mt-2" name="title" value="{{$questiongroup->title}}" >
			</div>
			<button class="mt-5 btn btn-outline-secondary"><b>تحديث </b></button>
		</form>
	</div>
@endsection