<!DOCTYPE html>
<html >
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	@foreach($students as $student)
		<div>{{$student->phone}},</div>
	@endforeach
</body>
</html>