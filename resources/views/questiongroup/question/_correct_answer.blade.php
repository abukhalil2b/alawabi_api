<form action="{{route('question.store')}}" method="post">
    @csrf
    <div class="input-container">
    	محتوى السؤال
    <input class="input" name="content">
    </div>

     <div class="input-container">
     	الإجابة
    <select class="input" name="answer">
        <option value="correct">صح</option>
        <option value="wrong">خطأ</option>
    </select>
    </div>
    <div class="btn-container">
    	<input type="hidden" name="questiontype" value="correct_answer">
    	<input type="hidden" name="questiongroup_id" value="{{$questiongroup->id}}">
    	<button class="btn btn-block btn-primary mt-3"><b>حفظ السؤال</b></button>
    </div>
</form>