<x-app-layout>
    <div class="pt-4 bg-gray-100">

        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
            <div data-bs-toggle="modal" data-bs-target="#addWhatsapp">رسالة جديدة +</div>
            <div class="w-full sm:max-w-2xl mt-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg prose">
                @if($whatsapp)
                    {{$whatsapp->text}}
                @endif
            </div>
        
            <div class="w-full sm:max-w-2xl mt-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg prose">
                @foreach($whatsapps as $whatsapp)
                {{$whatsapp->text}}
                <span class="float-left">
                    <a class="mx-3" onclick="return confirm('متأكد من الحذف');" href="{{route('whatsapp.destroy',$whatsapp->id)}}">حذف</a>
                    <a class="mx-3" href="{{route('whatsapp.activate',$whatsapp->id)}}">تفعيل</a>
                </span>
                <hr>
                @endforeach
            </div>
        
            

        </div>
    </div>
    
<!-- Modal -->
<div class="modal fade" id="addWhatsapp" tabindex="-1" role="dialog" aria-labelledby="addWhatsappLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
        <form action="{{route('whatsapp.store')}}" method="post">
            @csrf
            <div class="card">
                <div class="card-body">
                    <textarea name="text" class="form-control" rows="4"></textarea>
                    <div class="d-grid">
                        <button class="btn btn-outline-secondary mt-2 full-width">حفظ</button>
                    </div>
                </div>
            </div>
        </form>
      
    </div>
  </div>
</div>

</x-app-layout>
