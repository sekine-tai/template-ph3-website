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
        @foreach ($quizzes as $quizze)
            <div class="mt-4 p-8 bg-white w-full rounded-2xl">
                <h1 class="p-4 text-lg font-semibold">
                    {{ $quizze->id }}
                </h1>
                @if($quizze->trashed())
                    <span class="text-red-600">削除済み</span>
                @endif
                <div class="text-right flex">
                    <a href="{{ route('quizze.edit', $quizze) }}" class="flex-1">
                        <x-primary-button>
                            編集
                        </x-primary-button>
                    </a>
                    <form action="{{ route('quizze.destroy', $quizze) }}" method="post" class="flex-2" id="delete-form">
                        @csrf
                        @method('delete')
                        <x-primary-button class="bg-red-700 ml-2" onclick="confirmDelete(event)">
                            削除
                        </x-primary-button>
                    </form>
                </div>
                <hr class="w-full">
                <p class="mt-4 p-4">
                    <a href="{{ route('quizze.show', $quizze) }}" class="text-blue-600">
                        {{ $quizze->name }}
                    </a>
                </p>
                <div class="p-4 text-sm font-semibold">
                    <p>
                        {{ $quizze->created_at }}
                    </p>
                </div>
            </div>
        @endforeach
        <div class="mb-4">
            {{$quizzes->links()}}
        </div>
    </div>
</x-app-layout>
<script>
    function confirmDelete(event) {
        if (!confirm("本当に削除しますか？")) {
            event.preventDefault();
        } 
    }
</script>
