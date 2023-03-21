<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $post->title }}
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
    <section class="text-gray-600 body-font h-full">
        <div class="container px-5 py-5 mx-auto">
          <div class="flex flex-wrap -m-4 justify-center ">

<!--start here-->
    
<div class="p-4 md:w-3/4" >
    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
        <div class="w-full">
            <div class="w-full flex p-2">
                
                <div class="pl-2 pt-2 ">
                  
                </div>
              </div>
        </div>
        
      
      <img class=" w-full object-contain object-center h-96" src="{{ asset('/storage/'. $post->image) }}" alt="blog cover"/> {{--récupère l'image du post --}}
      
      <div class="p-4 flex flex-col">
        {{--récupère le titre du post --}}
        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">

          {{$post->content}} {{-- recupère le contenu du post et limite à 50 caractères max --}}

          </h1>
        <div class="flex items-center flex-wrap">

            </p>
          </a>
        </div>
              <form action="{{ route('userposts.index') }}" method="GET" class="">
        <button type="submit" class="font-semibold py-2 px-4 border">Précédent</button>
    </form>

    
@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
      </div>
    </div>

  </div>
 

 
<!--End here-->
          </div>
        </div>
      </section>

    
</body>
</html>

</x-app-layout>


