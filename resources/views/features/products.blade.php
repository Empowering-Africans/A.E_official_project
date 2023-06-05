<x-app-layout><br>
    {{-- The title section --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
        
                    <b> 
                    <h2>
                        {{ Auth::user()->name }}'s {{ __(' Recent Products') }}
                    </h2></b>
                </div>
            </div>
        </div>
    </div>

     {{-- To check it actually display's it  {{ $posts }} --}}

    @if (session()->has('message'))
        <div class="pt-15 w-4/5 text-center m-auto"
                style="margin-left: 24px; margin-bottom: 20px; padding-top: 14px; background-color: green; width: 15%; border-radius: 20px; font-size: 10px;">
                <br>
                <p>
                    {{ session()->get('message') }}
                </p>
        </div>
        
    @endif



    @if (Auth::check())
        <div class="pt-15 w-4/5 text-center m-auto"
            style="margin-left: 24px; margin-bottom: 20px; padding-top: 14px; background-color: blue; width: 15%; border-radius: 20px; font-size: 10px;">
            <a href="/products/create"
                class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                Create a Product
            </a>
            <br><br>
        </div>
        
    @endif

    @foreach ($posts as $post)
         
    
            {{-- Fruits --}}
            <div class="max-w-5xl sm:px-6 lg:px-8">
                <div class="bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
            
                    <div class="sm:grid grid-cols-4 gap-20 w-4/5 py-15 border-gray-200">
                        
                            <img src="/img/fruits.jpg" width="400" style="border-radius: 20px; margin-bottom: 8%;" alt="fruits">
                        
                    </div>
                    <div style="padding-left: 2px; padding-top: -10px; margin-left: 45%; margin-top: -20%;">
                        <b> <h2 style="font-size: 20px; " class="text-gray-700 font-bold text-7xl pb-4">
                            {{ $post->title }}
                        </h2> </b>
                        <span class="text-gray-500">
                            By <span class="font-bold italic text-gray-800">
                            <strong> {{ $post->user->name }}</strong>
                            </span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
                        </span>
                        <br><br>
                        <p class="text-xl text-gray-700  leading-8 font-light"
                            style="padding-bottom: 30px;">
                            {{ $post->description }}
                        </p>
            
                    </div>
                    </div>
                
                    </div>
            </div>
            <br><br>

    @endforeach

            {{-- Food Preservation 2 --}}
            <div class="max-w-5xl sm:px-6 lg:px-8">
                <div class="bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
            
                    <div class="sm:grid grid-cols-4 gap-20 w-4/5 py-15 border-gray-200">
                        
                            <img src="/img/foodPreservation2.jpg" width="400" style="border-radius: 20px; margin-bottom: 30px;" alt="foodPreservation2">
                        
                    </div>
                    <div style="padding-left: 2px; padding-top: -10px; margin-left: 45%; margin-top: -20%;">
                        <b> <h2 style="font-size: 20px; " class="text-gray-700 font-bold text-7xl pb-4">
                            Learn how to preserve this foods.
                        </h2> </b>
                        <span class="text-gray-500">
                            By <span class="font-bold italic text-gray-800">
                            <strong> Praise Ebuka</strong>
                            </span>, 9months ago
                        </span>
                        <br><br>
                        <p class="text-xl text-gray-700  leading-8 font-light"
                            style="padding-bottom: 30px;">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure facilis, iste quisquam ratione tempore, maiores possimus nemo veritatis consequatur aspernatur tenetur similique voluptates placeat quos exercitationem velit tempora pariatur quo.
                        </p>
            
                    </div>
                    </div>
                
                    </div>
            </div>
            <br><br>

            {{-- Food Preservation --}}
            <div class="max-w-5xl sm:px-6 lg:px-8">
                <div class="bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
            
                    <div class="sm:grid grid-cols-4 gap-20 w-4/5 py-15 border-gray-200">
                        
                            <img src="/img/foodPreservation.jpg" width="400" style="border-radius: 20px; margin-bottom: 30px;" alt="Food Preservation">
                        
                    </div>
                    <div style="padding-left: 2px; padding-top: -10px; margin-left: 45%; margin-top: -20%;">
                        <b> <h2 style="font-size: 20px; " class="text-gray-700 font-bold text-7xl pb-4">
                            Learn how to preserve this foods.
                        </h2> </b>
                        <span class="text-gray-500">
                            By <span class="font-bold italic text-gray-800">
                            <strong> Praise Ebuka</strong>
                            </span>, 5months ago
                        </span>
                        <br><br>
                        <p class="text-xl text-gray-700  leading-8 font-light"
                            style="padding-bottom: 30px;">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure facilis, iste quisquam ratione tempore, maiores possimus nemo veritatis consequatur aspernatur tenetur similique voluptates placeat quos exercitationem velit tempora pariatur quo.
                        </p>
            
                    </div>
                    </div>
                
                    </div>
            </div>
            <br><br>

            {{-- Food Preservation 3 --}}
            <div class="max-w-5xl sm:px-6 lg:px-8">
                <div class="bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
            
                    <div class="sm:grid grid-cols-4 gap-20 w-4/5 py-15 border-gray-200">
                        
                            <img src="/img/foodPreservation3.jpg" width="400" style="border-radius: 20px; margin-bottom: 30px;" alt="Food Preservation 3">
                        
                    </div>
                    <div style="padding-left: 2px; padding-top: -10px; margin-left: 45%; margin-top: -20%;">
                        <b> <h2 style="font-size: 20px; " class="text-gray-700 font-bold text-7xl pb-4">
                            Learn how to preserve this foods.
                        </h2> </b>
                        <span class="text-gray-500">
                            By <span class="font-bold italic text-gray-800">
                            <strong> Praise Ebuka</strong>
                            </span>, 3weeks ago
                        </span>
                        <br><br>
                        <p class="text-xl text-gray-700  leading-8 font-light"
                            style="padding-bottom: 30px;">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure facilis, iste quisquam ratione tempore, maiores possimus nemo veritatis consequatur aspernatur tenetur similique voluptates placeat quos exercitationem velit tempora pariatur quo.
                        </p>
            
                    </div>
                    </div>
                
                    </div>
            </div>
            <br><br>


            {{-- Cherries --}}
            <div class="max-w-5xl sm:px-6 lg:px-8">
                <div class="bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
            
                    <div class="sm:grid grid-cols-4 gap-20 w-4/5 py-15 border-gray-200">
                        
                            <img src="/img/cherries.jpg" width="400" style="border-radius: 20px; margin-bottom: 30px;" alt="Cherries">
                        
                    </div>
                    <div style="padding-left: 2px; padding-top: -10px; margin-left: 45%; margin-top: -20%;">
                        <b> <h2 style="font-size: 20px; " class="text-gray-700 font-bold text-7xl pb-4">
                            Learn how to preserve this foods.
                        </h2> </b>
                        <span class="text-gray-500">
                            By <span class="font-bold italic text-gray-800">
                            <strong> Praise Ebuka</strong>
                            </span>, 2days ago
                        </span>
                        <br><br>
                        <p class="text-xl text-gray-700  leading-8 font-light"
                            style="padding-bottom: 30px;">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure facilis, iste quisquam ratione tempore, maiores possimus nemo veritatis consequatur aspernatur tenetur similique voluptates placeat quos exercitationem velit tempora pariatur quo.
                        </p>
            
                    </div>
                    </div>
                
                    </div>
            </div>
            <br><br>




            <br><br>








    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in right now to your products section!") }}
                </div>
            </div>
        </div>
    </div> --}}
</x-app-layout>
