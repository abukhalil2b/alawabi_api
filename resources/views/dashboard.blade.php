<x-app-layout>
    <x-slot name="header">
        <a class="shadow-xl px-3" href="{{route('question.index')}}">قائمة الأسئلة</a>
        <a class="shadow-xl px-3" href="{{route('student.index')}}">قائمة الطلاب</a>
        <a class="shadow-xl px-3" href="{{route('answer.lot')}}">القرعة</a>
        <a class="shadow-xl px-3" href="{{route('sponser.index')}}">الداعمون</a>
    </x-slot>
</x-app-layout>
