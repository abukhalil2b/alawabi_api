<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	@foreach($numbers as $number)
	<div>{{$number->phone}},</div>
	@endforeach
</body>
</html>