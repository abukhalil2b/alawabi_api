<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body{
			margin: 0;
			padding: 0;
			display: flex;
			width: 100vw;
			height: 100vh;
			justify-content: center;
			align-items: center;
		}
		img{
			position: fixed;
			width: 0px;
			height: 0px;
			transition: all 4s ease;
			opacity: 0.1;
		}
		
		.showImg{
			display: block;
			width: 100%;
			height: 100vh;
			opacity: 1;
		}
	</style>
</head>
<body>
	<img id="img" src="{{asset('img/opening.jpg')}}" alt="">
</body>

<script>
	var checkOpeningEvent = ()=>{
		fetch("{{route('check_opening')}}")
		.then(res=>res.json())
		.then(data=>{
			if(data.status == 1){
				var img = document.getElementById('img')
				
				img.classList.add("showImg");

				clearInterval(checking)
			}

			console.log(data.status)
		})
		.catch(error=>console.log(error))
	}

	var checking = setInterval(checkOpeningEvent, 2000);




	
</script>
</html>