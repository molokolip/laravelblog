<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Article') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <a href="{{route('articles.create')}}" class="btn-link  btn-lg"> Add Article</a><br><br>
            <a href="" class="btn-link  btn-lg"> Add Cartegories</a><br><br>
           
            @forelse ($articles as $article)

            <div>
                <h2>
               <a href="{{route('articles.show', $article->id)}}">{{$article->title}} </a>
                    
                </h2>
                <p>
                    {{$article->body}}
                </p>
            </div>
               @empty

               <p>No Articles</p> 

            @endforelse

            {{ $articles->links() }}

        </div>
        
    </div>
</x-app-layout>
