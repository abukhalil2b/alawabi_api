@extends('layouts.master')
@section('content')

	<div class="container">
		<div class="bar mt-1">
			{{$question->content}}
		</div>
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<a class="mt-5 btn btn-sm btn-outline-danger" href="{{route('question.delete',['question'=>$question->id])}}">حذف</a>
			</div>
		</div>
		
	</div>

@endsection