<?
    // dd($quizzesSelect);
?>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            作問フォーム
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto px-6">
        @if (session('message'))
            <div class="text-red-600 font-bold">
                {{ session('message') }}
            </div>
        @endif
        <form method="post" action="{{ route('questionsList.store') }}">
            @csrf
            <div class="mt-8">
                <div class="w-full flex flex-col">
                    <label for="text" class="font-semibold mt-4">クイズの本文</label>
                    <x-input-error :messages="$errors->get('text')" class="mt-2" />
                    <input type="text" name="text" class="w-auto py-2 border border-gray-300 rounded-md"
                        id="text">
                </div>
                <div class="w-full flex flex-col">
                    <label for="name" class="font-semibold mt-4">クイズの種類</label>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    <select name="quiz_id" id="">
                        @foreach ($quizzesSelect as $quizze)
                            <option value="{{ $quizze->id }}">{{ $quizze->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="w-full flex flex-col">
                    <label for="choice1" class="font-semibold mt-4">選択肢1</label>
                    <x-input-error :messages="$errors->get('choice1')" class="mt-2" />
                    <input type="text" name="choice1" class="w-auto py-2 border border-gray-300 rounded-md"
                        id="choice1" value="{{ old('choice1') }}">
                </div>
                <div class="w-full flex flex-col">
                    <label for="choice2" class="font-semibold mt-4">選択肢2</label>
                    <x-input-error :messages="$errors->get('choice2')" class="mt-2" />
                    <input type="text" name="choice2" class="w-auto py-2 border border-gray-300 rounded-md"
                        id="choice2" value="{{ old('choice2') }}">
                </div>
                <div class="w-full flex flex-col">
                    <label for="choice3" class="font-semibold mt-4">選択肢3</label>
                    <x-input-error :messages="$errors->get('choice3')" class="mt-2" />
                    <input type="text" name="choice3" class="w-auto py-2 border border-gray-300 rounded-md"
                        id="choice3" value="{{ old('choice3') }}">
                </div>
                <div class="w-full flex flex-col">
                    <label for="name" class="font-semibold mt-4">正解の選択肢</label>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    <input type="radio" name="choiceRadio" id="choiceRadio1" value="1"><label for="choiceRadio1">選択肢1</label>
                    <input type="radio" name="choiceRadio" id="choiceRadio2" value="2"><label for="choiceRadio2">選択肢2</label>
                    <input type="radio" name="choiceRadio" id="choiceRadio3" value="3"><label for="choiceRadio3">選択肢3</label>
                </div>
            </div>
            <x-primary-button class="mt-4">
                送信する
            </x-primary-button>
        </form>
    </div>
</x-app-layout>
