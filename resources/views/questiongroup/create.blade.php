@extends('layouts.master')
@section('content')
	<div class="container">
		<form action="{{route('questiongroup.store')}}" method="post">
			@csrf
			<div class="input-container">
				عنوان (مثلا: أسئلة اليوم الأول)
				<input class="form-control mt-2" name="title" >
				<select class="form-control mt-2" name="questiontype">
					<option value="multichoice">خيار متعدد</option>
					<option value="correct_answer">صح وخطأ</option>
				</select>
			</div>
			<button class="mt-5 btn btn-outline-secondary"><b>حفظ </b></button>
		</form>
	</div>

	<div class="container">
		@foreach($questiongroups as $questiongroup)

		<div class="bar mt-5  {{$questiongroup->active==1?'bg-lightgreen':'bg-black'}}">
			<a  onclick="return confirm('Are you sure?')"
			 class="mr-3" href="{{route('questiongroup.destroy',$questiongroup->id)}}">حذف</a>
			<a class="mr-3" href="{{route('questiongroup.edit',$questiongroup->id)}}">تعديل</a>
			<a class="mt-5 btn btn-sm btn-outline-info"  
				href="{{route('questiongroup.question.index',['questiongroup'=>$questiongroup->id])}}">
				{{$questiongroup->title}}
			</a>
			<a class="mt-5 btn btn-sm btn-outline-warning" href="{{route('questiongroup.toggle',['questiongroup'=>$questiongroup->id])}}">تعطيل وتغعيل </a>
			<a class="mt-5 btn btn-sm btn-outline-primary" href="{{route('answer.index',['questiongroup'=>$questiongroup->id])}}">الإجابات</a>
		</div>
		
		@endforeach
	</div>

@endsection