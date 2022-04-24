$questions = [
@foreach($questions as $list)
['content' => '{{$list->content}}','op1' => '{{$list->op1}}','op2' => '{{$list->op2}}','op3' => '{{$list->op3}}','answer' => '{{$list->answer}}','questiongroup_id' => '{{$list->questiongroup_id}}'],
@endforeach
]