{{-- <pre> --}}
<?
// var_dump($quizee);
    // var_dump($question);
?>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            問題編集
        </h2>
    </x-slot>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="max-auto px-6">
        <form method="POST"
            action="{{ route('quizze.update-question', ['quizze' => $quizze->id, 'question' => $question->id]) }}">
            @csrf
            @method('PUT')
            <div class="bg-white w-full rounded-2xl">
                <div class="mt-4 p-4">
                    <div class="text-lg font-semibold">
                        ID: {{ $question->id }}
                    </div>
                    <div class="w-full flex flex-col">
                        <label for="name" class="font-semibold mt-4">クイズの種類</label>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        {{-- <select name="quiz_id" id="">
                                <option value="{{ $quizze->id}}">{{$quizze->name}}</option>
                            @foreach ($quizzesAll as $quiz)
                                <option value="{{ $quiz->id }}">{{ $quiz->name }}</option>
                            @endforeach
                        </select> --}}
                        <select name="quiz_id" id="">
                            @foreach ($quizzesAll as $quizOption)
                                <option value="{{ $quizOption->id }}"
                                    {{ $quizOption->id === $quizze->id ? 'selected' : '' }}>
                                    {{ $quizOption->name }}
                                </option>
                            @endforeach
                        </select>

                    </div>
                    <hr class="w-full">
                    <div class="mt-4">
                        <label for="text" class="block text-sm font-medium text-gray-700">設問</label>
                        <input id="text" name="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ $question->text }}"">
                    </div>
                    <div class="mt-4">
                        <label for="choices" class="block Ftext-sm font-medium text-gray-700">選択肢</label>
                        @foreach ($questionChoices as $choice)
                            <div class="mt-2">
                                <input type="text" name="choices[]" value="{{ $choice->text }}"
                                    class="form-input rounded-md shadow-sm mt-1 block w-full">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <x-primary-button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    更新
                </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
