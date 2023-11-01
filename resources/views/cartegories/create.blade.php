<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cartegory') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

           <form action="{{route('cartegories.store')}}" method="post">
            @csrf
            <input type="text" name="title" placeholder="title">
            @error('title')
            {{$message}}
                
            @enderror
            <textarea name="text"  rows="10" placeholder="body"></textarea>
            @error('text')
            {{$message}}
            @enderror

            <button>Save Cartegory</button>

           </form>

        </div>
        
    </div>
</x-app-layout>
