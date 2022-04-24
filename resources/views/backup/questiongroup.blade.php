$questiongroups = [
@foreach($questiongroups as $list)
['title' => '{{$list->title}}','questiontype' => '{{$list->questiontype}}','active' => '{{$list->active}}'],
@endforeach
]