<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('') }}
         
        </h2>
    </x-slot>

<!-- component -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-5 mx-auto">
          <div class="flex flex-wrap -m-4">

<!--start here-->
@foreach ($posts as $post)
    

<div class="p-4 md:w-1/3" >
    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden bg-cyan-600 bg-sky-500/50">
        <div class="w-full">
            <div class="w-full flex p-2">
                
                <div class="pl-2 pt-2 ">
                  <p class="text-xs text-gray-900">
                    {{ $post->created_at->format('d M Y') }} {{-- recupère la date du post au format jour/mois/année --}}
                  </p>
                </div>
              </div>
        </div>
        
      
      <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{ asset('/storage/'. $post->image) }}" alt="blog cover"/> {{--récupère l'image du post --}}
      
      <div class="p-4">
        <h2 class="tracking-widest text-xs title-font font-bold text-gray-900 mb-1 uppercase "> {{ $post->title }} </h2>  {{--récupère le titre du post --}}
        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">

          {{Str::limit ($post->content, 50) }} {{-- recupère le contenu du post et limite à 50 caractères max --}}

          </h1>
        <div class="flex items-center flex-wrap">
          <a href="{{route('userposts.show', $post)}}" class="text-gray-900  md:mb-2 lg:mb-0">
            <p class="inline-flex items-center">Afficher la suite
              <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14"></path>
                <path d="M12 5l7 7-7 7"></path>
              </svg>
            </p>
          </a>
          @auth
          <a href="{{route('cardposts.store',['post' => $post->id])}}" class="text-gray-800  md:mb-2 lg:mb-0">
            <p class="inline-flex items-center">Ajouter au pannier
              <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14"></path>
                <path d="M12 5l7 7-7 7"></path>
              </svg>
            </p>
          </a>

          @endauth
        </div>
        
        
      </div>
    </div>
  </div>

  @endforeach
<!--End here-->
          </div>
        </div>
      </section>
      <footer class="p-4 bg-white rounded-lg shadow md:flex md:items-center md:p-6 dark:bg-gray-800 justify-center" style=" bottom: 0; width: 100%">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="hover:underline">Fumbling Gargoyles</a>. All Rights Reserved.
        </span>
    </footer>
</body>
</html>

</x-app-layout>