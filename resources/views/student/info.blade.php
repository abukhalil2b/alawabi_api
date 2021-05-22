<!DOCTYPE html>
<html dir="rtl">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	@foreach($students as $student)
		<div>{{$student->name}} - {{$student->state}} - {{$student->phone}}  - {{$student->password}}</div>
	@endforeach

</body>
</html>