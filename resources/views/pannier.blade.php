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
    <section class="text-gray-600 body-font" style="height:100vh; overflow: scroll;">
        <div class="container px-5 py-5 mx-auto">
          <div class="flex flex-wrap -m-4">

<!--start here-->
@foreach ($cards as $card)
    

<div class="p-4 md:w-1/3 flex flex-wrap" >
    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden bg-cyan-600 bg-sky-500/50 ">
        <div class="w-full">
            <div class="w-full flex p-2">
              
                <div class="pl-2 pt-2 ">
                 
                  <p class="text-xs text-gray-900">
                    {{ $card->created_at->format('d M Y') }} {{-- recupère la date du post au format jour/mois/année --}}
                  </p>
                </div>
              </div>
        </div>
        
      
      <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{ asset('/storage/'. $card->image) }}" alt="blog cover"/> {{--récupère l'image du post --}}
      
      <div class="p-4">
        <h2 class="tracking-widest text-xs title-font font-bold text-gray-900 mb-1 uppercase "> {{ $card->title }} </h2>  {{--récupère le titre du post --}}
        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">

          {{Str::limit ($card->content, 50) }} {{-- recupère le contenu du post et limite à 50 caractères max --}}

          </h1>

        </div>
        
        
      </div>
    </div>
  </div>

  @endforeach
<!--End here-->
          </div>
        </div>
      </section>
      
</body>
</html>

</x-app-layout>