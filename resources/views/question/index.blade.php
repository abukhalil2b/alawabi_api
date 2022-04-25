<x-app-layout>
	<div class="container">
		@foreach($questions as $question)
		<div class="card card-body mt-2">
			<div>{{$question->content}}</div>
			<hr>
			<div class="flex justify-between">
				<a href="{{route('question.edit',$question->id)}}">تعديل</a>
				<a onclick="confirmDelete('{{route('question.delete',$question->id)}}');" href="javascript:void(0);">حذف</a>
			</div>
		</div>
		@endforeach
	</div>

	
@include('question._confirm_delete')
</x-app-layout>