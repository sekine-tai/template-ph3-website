<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            フォーム
        </h2>
        @if (session('message'))
            <div>
                {{ session('message') }}
            </div>
        @endif
    </x-slot>
    <div class="max-auto px-6">
        @foreach ($questionsList as $question)
            <div class="mt-4 p-8 bg-white w-full rounded-2xl">
                <h1 class="p-4 text-lg font-semibold">
                    {{ $question->id }}
                </h1>
                <hr class="w-full">
                <p class="mt-4 p-4">
                    <a class="text-blue-600">
                        {{ $question->text }}
                    </a>
                </p>
                <div class="p-4 text-sm font-semibold">
                    <p>
                        {{ $question->created_at }}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
<script>
    function confirmDelete(event) {
        if (!confirm("本当に削除しますか？")) {
            event.preventDefault();
        } 
    }
</script>
