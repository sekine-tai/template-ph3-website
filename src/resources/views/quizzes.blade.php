<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            フォーム
        </h2>
    </x-slot>
    <div class="max-auto px-6">
        @foreach ($quizzes as $quizze)
            <div class="mt-4 p-8 bg-white w-full rounded-2xl">
                <h1 class="p-4 text-lg font-semibold">
                    {{ $quizze->id }}
                </h1>
                <hr class="w-full">
                <p class="mt-4 p-4">
                    {{ $quizze->name }}
                </p>
                <div class="p-4 text-sm font-semibold">
                    <p>
                        {{ $quizze->created_at }}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
