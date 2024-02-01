<!--Modal body-->

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
<div class="relative flex-auto p-4" data-te-modal-body-ref>
    {{$errors}}
    <form action="{{ route('save') }}" method="post" id="adventureForm" enctype="multipart/form-data">
        @csrf
        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
        <input type="text" name="title" id="title" class="mt-1 p-2 w-full border rounded-md">
        <label for="description" class="block mt-4 text-sm font-medium text-gray-700">Description</label>
        <textarea name="description" id="description" rows="3" class="mt-1 p-2 w-full border rounded-md"></textarea>
        <label for="country" class="block mt-4 text-sm font-medium text-gray-700">Country</label>
        <input type="text" name="country" id="country" class="mt-1 p-2 w-full border rounded-md">
        <!-- other form fields -->
        <label for="images" class="block mt-4 text-sm font-medium text-gray-700">Images</label>
        <input type="file" name="images[]" id="images" class="mt-1 p-2 w-full border rounded-md" multiple>

        <div id="uploadedImages" class="mt-4 flex flex-wrap gap-4">
        </div>

        <label for="destination" class="block mt-4 text-sm font-medium text-gray-700">Select Destination</label>
        <select name="destination_id" id="destination" class="mt-1 p-2 w-full border rounded-md">
        @foreach($destinations as $destination)
                <option class="text-black" value="{{ $destination->id }}">{{ $destination->continent}}</option>
            @endforeach
        </select>
        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
       
        <div class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
           
            <button type="submit" class="ml-1 inline-block rounded bg-purple-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]" 
            {{-- onclick="submitAdventureForm()"  --}}
            data-te-ripple-init data-te-ripple-color="light">
                Save changes
            </button>
        </div>
    </form>
</div>

<script>
    document.getElementById('images').addEventListener('change', handleImageUpload);
    
    function handleImageUpload(event) {
        const uploadedImagesContainer = document.getElementById('uploadedImages');
    
        // Display image previews
        for (const file of event.target.files) {
            const imgPreview = document.createElement('img');
            imgPreview.src = URL.createObjectURL(file);
            imgPreview.alt = 'Image Preview';
            imgPreview.className = 'w-20 h-20 object-cover rounded-md';
    
            // Add close (remove) button
            const closeButton = document.createElement('button');
            closeButton.innerHTML = 'X';
            closeButton.className = 'absolute top-0 right-0 text-red-500 cursor-pointer';
            closeButton.addEventListener('click', () => removeImage(imgPreview));
    
            // Append image and close button to the container
            const imageContainer = document.createElement('div');
            imageContainer.className = 'relative';
            imageContainer.appendChild(imgPreview);
            imageContainer.appendChild(closeButton);
    
            uploadedImagesContainer.appendChild(imageContainer);
        }
    }
    
    function removeImage(imgPreview) {
        const uploadedImagesContainer = document.getElementById('uploadedImages');
        uploadedImagesContainer.removeChild(imgPreview.parentNode);
    }
    </script>
    

</main>
    </x-app-layout>
</body>
</html>