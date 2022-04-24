@extends('layouts.master')
@section('content')
<style>
.text-xs{
	font-size:12px;
}
</style>

	<div class="container">
		
		<table class=" text-xs table-bordered table">
			<tr>
				<td>التسلسل</td>
				<td>الإسم</td>
				<td>الهاتف</td>
				<td>الولاية</td>
				<td>كلمة المرور</td>
				<td>إدارة</td>
			</tr>
			@foreach($students as $student)
			<tr>
				<td>{{$student->id}}</td>
				<td>{{$student->name}}</td>
				<td>
					{{$student->phone}}
					
				</td>
				<td>@if($student->state){{$student->state->name}}@endif</td>
				<td>{{$student->password}}</td>
				<td>
					<a class="mt-2" href="{{route('student.edit',['student'=>$student->id])}}">تعديل</a>

					<div class="my-3" onClick="sendMessage({{$student->phone}})" >
						رسالة تذكير
					</div>
					<div class="mt-2">
						<a href="{{route('student.show_delete_form',['student'=>$student->id])}}">حذف</a>
					</div>
				</td>
			</tr>
			@endforeach
		</table>
	</div>

<script>

	const sendMessage = (number)=>{

	var url='https://api.whatsapp.com/send';
	var message=encodeURIComponent(`{{$whatsapp->text}}
رابط البرنامج:
https://al-awabi.web.app`);
	window.open(url + `?phone=968${number}&text=${message}`)		
	}

</script>

@endsection