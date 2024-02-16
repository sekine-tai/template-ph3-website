<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          フォーム
      </h2>
  </x-slot>
  <div class="max-w-7xl mx-auto px-6">
    @if(session('message'))
      <div class="text-red-600 font-bold">
        {{session('message')}}
      </div>
    @endif
    <form method="post" action="{{route('quizzes.store')}}">
      @csrf
      <div class="mt-8">
        <div class="w-full flex flex-col">
          <label for="name" class="font-semibold mt-4">クイズ名</label>
          @foreach($errors->all as $error)
            <li>{{$error}}</li>
          @endforeach
          <x-input-error :messages="$errors->get('name')" class="mt-2" />
          <input type="text" name="name" class="w-auto py-2 border border-gray-300 rounded-md" id="name" value="{{old('name')}}">
        </div>
      </div>
      {{-- <div class="w-full flex flex-col">
        <label for="body" class="font-semibold mt-4">本文</label>
        <x-input-error :messages="$errors->get('body')" class="mt-2" />
        <textarea name="body" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="5" >{{old('body')}}</textarea>
      </div> --}}
      <x-primary-button class="mt-4">
        送信する
      </x-primary-button>
    </form>
  </div>
</x-app-layout>