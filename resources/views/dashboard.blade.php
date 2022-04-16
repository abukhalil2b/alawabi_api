<x-app-layout>
    <x-slot name="header">
        <a class="shadow-xl px-3" href="{{route('question.index')}}">كل الإسئلة</a>
        <a class="shadow-xl px-3" href="{{route('questiongroup.create')}}">مجموعة الأسئلة</a>
        <a class="shadow-xl px-3" href="{{route('student.index')}}">قائمة المشاركين</a>
        <a class="shadow-xl px-3" href="{{route('answer.dashboard')}}">الإجابات</a>
        <a class="shadow-xl px-3" href="{{route('sponser.index')}}">الداعمون</a>
    </x-slot>
</x-app-layout>
