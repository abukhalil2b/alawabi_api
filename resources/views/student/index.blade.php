@extends('layouts.master')
@section('content')
<style>
.text-xs{
	font-size:12px;
}
</style>

	<div class="container">
		<form action="{{route('student.store')}}" method="post">
			@csrf
			<div class="input-container">
				الهاتف
			<input class="input" name="phone" type="number">
			</div>

			<div class="input-container">
				الإسم
			<input class="input" name="name">
			</div>
			
			 <div class="input-container">
			 	الولاية
			 	<select class="input" name="state_id">
			 		<option value=""></option>
			 		@foreach($states as $state)
			 		<option value="{{$state->id}}">{{$state->name}}</option>}
			 		@endforeach
			 	</select>
			</div>
			كلمة المرور نفس رقم الهاتف
			<div class="btn-container">
				<button class="btn btn-primary"><b>حفظ </b></button>
			</div>
		</form>
	</div>

	<hr>
	<a class="m-3" href="{{route('student.numberlist')}}">numberlist</a>
	<a class="m-3" href="{{route('student.info')}}">info</a>
	<a class="m-3" href="{{route('student.info_phone_only')}}">info_phone_only</a>
	<hr>

	<div class="container">
		<form action="{{route('student.search')}}" method="post">
			@csrf
			<div class="input-container">
				الهاتف
			<input class="input" name="phone" type="number">
			</div>
			<div class="btn-container">
				<button class="btn btn-info"><b>بحث </b></button>
			</div>
		</form>
	</div>

	<div class="container">
		<div class="bar">عدد الطلاب: {{count($students)}}</div>
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

					<div class="my-3" onClick="sendMessage({{$student->phone}})">
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
	var message=encodeURIComponent(`السلام عليكم.
لقد مر الأسبوع الأول  على المسابقة الثقافية  التي تنظمها اللجنة الثقافية بولاية العوابي وأنت لم تشارك معنا هذا العام. 
اذا كنت تود المشاركة ما عليك إلا دخول البرنامج الإلكتروني وتكتب رقم هاتفك في كل الحقول ثم عندما تدخل تقوم بتحديث بياناتك.
قم بحفظ هذا الرقم حتى تصلك الرسائل الجماعية.
رابط البرنامج:
https://al-awabi.web.app`);
	window.open(url + `?phone=968${number}&text=${message}`)		
	}

</script>

@endsection