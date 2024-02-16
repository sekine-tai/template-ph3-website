<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            個別表示
        </h2>
    </x-slot>
    <div class="max-auto px-6">
        @foreach ($questions as $question)
            <div class="bg-white w-full rounded-2xl">
                <div class="mt-4 p-4">
                    <hi class="text-lg font-semibold">
                        {{ $question->id }}
                    </hi>
                    <div class="text-right flex">
                        <a href="{{route('quizze.edit-question', ['quizze' => $quizze->id, 'question' => $question->id])}}" class="flex-1">
                            <x-primary-button>
                                編集
                            </x-primary-button>
                        </a>
                        <form action="{{route('quizze.delete-question',['quizze'=>$quizze->id,'question'=>$question->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <x-secondary-button type="submit" class="flex-2" >削除</x-secondary-button>
                        </form>
                    </div>
                    <hr class="w-full">
                    <p class="mt-4 whitespace-pre-line">
                        @if($question->deleted_at)
                        <div>
                            <span class="text-red-500">
                                削除済み
                            </span>
                        </div>
                        @endif
                        {{ $question->text }}
                        @foreach ($questionChoices[$question->id] as $choice)
                            <div class="text-sm font-semibold flex flex-row-reverse">
                                <p>{{ $choice->text }}</p>
                            </div>
                        @endforeach
                    <div class="text-sm font-semibold flex flex-row-reverse">
                        <p>{{ $question->created_at }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
