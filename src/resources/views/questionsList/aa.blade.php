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
              @foreach ($errors->all as $error)
                  <li>{{ $error }}</li>
              @endforeach
              {{-- <div class="w-full flex flex-col">
                  <label for="name" class="font-semibold mt-4">クイズの種類</label>
                  <x-input-error :messages="$errors->get('name')" class="mt-2" />
                  <input type="text" name="name" class="w-auto py-2 border border-gray-300 rounded-md"
                      id="name" value="{{ old('name') }}">
              </div> --}}
              <div class="w-full flex flex-col">
                  <label for="text" class="font-semibold mt-4">クイズの本文</label>
                  <x-input-error :messages="$errors->get('text')" class="mt-2" />
                  <input type="text" name="text_input" class="w-auto py-2 border border-gray-300 rounded-md"
                      id="text">
              </div>
          </div>
          {{-- <div class="w-full flex flex-col">
              <label for="name" class="font-semibold mt-4">選択肢1</label>
              <x-input-error :messages="$errors->get('name')" class="mt-2" />
              <input type="text" name="name" class="w-auto py-2 border border-gray-300 rounded-md"
                  id="name" value="{{ old('name') }}">
          </div>
          <div class="w-full flex flex-col">
              <label for="name" class="font-semibold mt-4">選択肢2</label>
              <x-input-error :messages="$errors->get('name')" class="mt-2" />
              <input type="text" name="name" class="w-auto py-2 border border-gray-300 rounded-md"
                  id="name" value="{{ old('name') }}">
          </div>
          <div class="w-full flex flex-col">
              <label for="name" class="font-semibold mt-4">選択肢3</label>
              <x-input-error :messages="$errors->get('name')" class="mt-2" />
              <input type="text" name="name" class="w-auto py-2 border border-gray-300 rounded-md"
                  id="name" value="{{ old('name') }}">
          </div>
          <div class="w-full flex flex-col">
              <label for="name" class="font-semibold mt-4">正解の選択肢</label>
              <x-input-error :messages="$errors->get('name')" class="mt-2" />
              <input type="radio" name="name" id="choice1" value="{{ old('name') }}"><label for="choice1">選択肢1</label>
              <input type="radio" name="name" id="choice2" value="{{ old('name') }}"><label for="choice2">選択肢2</label>
              <input type="radio" name="name" id="choice3" value="{{ old('name') }}"><label for="choice3">選択肢3</label>
          </div> --}}
          <x-primary-button class="mt-4">
              送信する
          </x-primary-button>
      </form>
  </div>
</x-app-layout>
