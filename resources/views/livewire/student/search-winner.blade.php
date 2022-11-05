<div>
   <textarea class="w-full" wire:model.defer="searchKey" cols="30" rows="10" 
   placeholder="99999999
99999999
99999999
99999999
99999999"
   ></textarea>

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
            <td>{{$student->phone}}</td>
			</tr>
			@endforeach
		</table>
</div>
