@extends('layouts.master')
@section('content')
<div class="px-3">

	
	@forelse($answers as $answer)
	<div class="py-3">
		[{{$answer->id}}]
		@if($answer->student)
		{{$answer->student->name}}
		@else
		الاسم لا يتطابق
		@endif
		 {{$answer->phone}}
	</div>
	@empty
	<h3 class="mt-5 text-center">لا يوجد إجابات</h3>
	@endforelse
	</div>
@endsection