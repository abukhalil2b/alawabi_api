<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
    <head>
	    <style>
	    	.bar2{
				padding: 2px;
				text-align: center;
				border-radius: 6px;
	    	}
	    	.success{
	    		color: #0f5132;
				background-color: #d1e7dd;
				border: 0.5px solid #d6d6d6;	
	    	}
	    	.warning{
				color: #d28713;
				background-color: #ffead0;
				border: 0.5px solid #d6d6d6;	
	    	}
			.bar{
				border:1px solid #eee;
				padding: 5px;
				border-radius:4px;
				box-shadow: 0px 2px 10px 0px #afb0b1;
			}
			.container{
				padding: 10px;
			}
			.input{
				height:30px;
				width: 100%;
				box-sizing: border-box;
			}
			.input-container{
				margin: 5px 0;
			}
			.btn{
				height:30px;
				width: 100%;
			}
			.mt-1{
				margin-top: 1%;
			}
			.active{
				background-color: #dbffe2;
			}
			.bg-lightgreen{
				background-color: #dbffe2;
			}

		</style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->

        <!-- Styles -->
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

        <!-- Scripts -->
    </head >
    <body style="text-align:right !important; direction: rtl !important;" >
    	<div class="container">
			@if(session('status'))
			<h4  class="bar2 {{session('status')}}">{{session('message')}}</h4>
			@endif
			@if($errors->any())
			@foreach($errors->all() as $error)
			<div class="alert alert-danger">{{$error}}</div>
			@endforeach
			@endif
    	</div>	
    	 <div class="px-2 mx-1">
    	 	<a class="btn btn-block btn-secondary" href="{{route('dashboard')}}">الرئيسية</a>
    	 </div>
        @yield('content')
    </body>
</html>
