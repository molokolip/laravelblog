<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Article') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            
            <a href="{{route('articles.edit', $article)}}" class="btn-link  btn-lg"> Edit Article</a><br><br>
           
            <form action="{{route('articles.destroy', $article)}}" method="post">@method('delete') @csrf <button onclick="return confirm('Do you want to delete this Article')">Delete Article</button></form>

            <br>
            <br>
            <div>
                <h2>
               <a href="{{route('articles.show', $article->id)}}">{{$article->title}} </a>
                    
                </h2>
                <p>
                    {{$article->body}}
                </p>
            </div>
              

          

           

        </div>
        
    </div>
</x-app-layout>
