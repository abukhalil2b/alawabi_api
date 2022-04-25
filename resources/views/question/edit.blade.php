<x-app-layout>

@if($question->questiongroup->questiontype == 'multichoice')

	<form action="{{route('question.update',$question->id)}}" method="post">
		@csrf
	<div class="container">
		<div class="card card-body mt-1">
			<div class="mt-5">
				<textarea class="form-control" name="content">{{$question->content}}</textarea>
			</div>
			<div class="mt-5">
				<input class="form-control" name="op1" value="{{$question->op1}}">
			</div>
			<div class="mt-5">
				<input class="form-control" name="op2" value="{{$question->op2}}">
			</div>
			<div class="mt-5">
				<input class="form-control" name="op3" value="{{$question->op3}}">
			</div>
			<div class="mt-5">
		     	الإجابة
			    <select class="form-control" name="answer" style="padding:10px 30px">
			        <option @if($question->answer=='op1') selected @endif value="op1">الخيار الأول</option>
			        <option @if($question->answer=='op2') selected @endif value="op2">الخيار الثاني</option>
			        <option @if($question->answer=='op3') selected @endif value="op3">الخيار الثالث</option>
			    </select>
		    </div>

		    <div class="mt-5">
		     	التصنيف
			    <select class="form-control" name="questiongroup_id" style="padding:10px 30px">
				    @foreach($questiongroups as $questiongroup)
				    <option  value="{{$questiongroup->id}}" @if($questiongroup->id==$question->questiongroup_id) selected @endif>
				    	{{$questiongroup->title}}
				    </option>
				    @endforeach
		     	</select>
		    </div>

		    <button class="mt-5 btn btn-outline-secondary">تحديث</button>
		</div>
	</div>
	</form>

@endif

</x-app-layout>