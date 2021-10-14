<form action="{{route('question.store')}}" method="post">
    @csrf
    <div class="input-container">
    	محتوى السؤال
    <input class="input" name="content">
    </div>
    <div class="input-container">
    	رابط الصورة إن وجد
    <input class="input" name="url">
    </div>
     <div class="input-container">
     	الخيار الأول
    <input class="input" name="op1">
    </div>
     <div class="input-container">
     	الخيار الثاني
    <input class="input" name="op2">
    </div>
     <div class="input-container">
     	الخيار الثالث
    <input class="input" name="op3">
    </div>
     <div class="input-container">
     	الإجابة
    <select class="input" name="answer">
        <option value="op1">الخيار الأول</option>
        <option value="op2">الخيار الثاني</option>
        <option value="op3">الخيار الثالث</option>
    </select>
    </div>
    <div class="btn-container">
    	<input type="hidden" name="questiontype" value="multichoice">
    	<input type="hidden" name="questiongroup_id" value="{{$questiongroup->id}}">
    	<button class="btn btn-block btn-primary mt-3"><b>حفظ السؤال</b></button>
    </div>
</form>