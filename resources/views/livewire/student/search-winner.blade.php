<div>
	<textarea class="w-full" wire:model.defer="searchKey" cols="30" rows="10" placeholder="99999999
99999999
99999999
99999999
99999999"></textarea>

	<div wire:loading.remove>
		<x-jet-button class="mt-3" wire:click="search">بحث</x-jet-button>
	</div>

	<table class=" text-xs table-bordered table mt-3">
		<tr>
			<td>التسلسل</td>
			<td>الإسم</td>
			<td>الولاية</td>
			<td>الهاتف</td>
		</tr>
		@foreach($students as $key => $student)
		<tr>
			<td>{{$key + 1}}</td>
			<td>{{$student->name}}</td>
			<td>@if($student->state){{$student->state->name}}@endif</td>
			<td>
				{{$student->phone}}
				<div class="my-3 btn w-full btn-sm" onClick="sendMessage({{$student->phone}})">
					رسالة واتسأب
				</div>
			</td>
		</tr>
		@endforeach
	</table>
	<script>
		const sendMessage = (number) => {

			var url = 'https://api.whatsapp.com/send';
			var message = encodeURIComponent(` أنت أحد الفائزين `);
			window.open(url + `?phone=968${number}&text=${message}`)
		}
	</script>
</div>