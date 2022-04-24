<x-app-layout>
	<div class="container">
		@foreach($questions as $question)
		<div class="card card-body">
			<div>{{$question->content}}</div>
			<div>{{$question->answer}}</div>
			<div>
				<a href="{{route('question.delete',$question->id)}}">حذف</a>
			</div>
		</div>
		@endforeach
	</div>


</x-app-layout>