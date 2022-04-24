$students = [
@foreach($numberlist as $list)
['phone' => '{{$list->phone}}','password' => '{{$list->password}}','name' => '{{$list->name}}','state_id' => '{{$list->state_id}}'],
@endforeach
]