<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adventures</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <x-app-layout>
<main>
    <a href="{{ route('AddAdventure') }}"
    class="p-2 px-6 border-green-700 mb-4 float-end rounded-md font-medium hover:bg-transparent hover:border-green-800 border bg-green-200 dark:bg-purple text-black">
    Add Adventure
</a> 

    <div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">
        <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2 gap-10">
            @foreach ($adventures as $adventure)
ù                <div class="border-r border-b border-l border-gray-400 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal">
                    {{-- <img src="../{{ $adventure->image->path }}" class="w-full mb-3"> --}}
                    <div class="p-4 pt-2">
                        <div class="mb-8">
                            <p class="text-sm text-gray-600 flex items-center">
                                <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z"></path>
                                </svg>
                                Members only
                            </p>
                            <a href="#" class="text-gray-900 font-bold text-lg mb-2 hover:text-indigo-600 inline-block">{{ $adventure->title }}</a>
                            <p class="text-gray-700 text-sm">{{ $adventure->description }}</p>
                        </div>
                        <div class="flex items-center">
                            {{-- <a href="#"><img class="w-10 h-10 rounded-full mr-4" src="{{ $adventure->author->profile_image }}" alt="Avatar"></a> --}}
                            <a href="#"><img class="w-10 h-10 rounded-full mr-4"src="https://images.pexels.com/photos/1181467/pexels-photo-1181467.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=1&amp;w=500" class="w-full mb-3">
                                </a>
                            {{-- <img src="https://images.pexels.com/photos/1181467/pexels-photo-1181467.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=1&amp;w=500" class="w-full mb-3"> --}}

                            <div class="text-sm">
                                <a href="#" class="text-gray-900 font-semibold leading-none hover:text-indigo-600">{{ $adventure->user->name }}</a>
                                <p class="text-gray-600">{{ $adventure->publication_date }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main>
</x-app-layout>
<script>
    // Get references to the button and modal
    const openModalBtn = document.getElementById('openModalBtn');
    const modal = document.getElementById('exampleModal');
  
    // Add click event listener to the button
    openModalBtn.addEventListener('click', function () {
      // Toggle the 'hidden' class on the modal to show/hide it
      modal.classList.toggle('hidden');
    });
  </script>
</body>
</html>