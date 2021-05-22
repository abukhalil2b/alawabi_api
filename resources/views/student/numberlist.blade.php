$students = [
@foreach($numberlist as $list)
['phone' => '{{$list->phone}}','password' => '{{$list->phone}}'],
@endforeach
]