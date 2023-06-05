<x-app-layout><br>
        {{-- The title section --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
        
                    <b> 
                    <h2>
                        {{ Auth::user()->name }}'s {{ __('Sales') }}
                    </h2></b>
                </div>
            </div>
        </div>
    </div>

  {{-- Gabbage --}}
  <div class="max-w-5xl sm:px-6 lg:px-8">
    <div class="bg-white shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">

        <div class="sm:grid grid-cols-4 gap-20 w-4/5 py-15 border-gray-200">
            
                <img src="/img/gabbage.jpg" width="400" style="border-radius: 20px; margin-bottom: 130px;" alt="gabbage">
            
        </div>
        <div style="padding-left: 2px; margin-left: 45%; margin-top: -20%;">
            <p>
                This was sold for
            </p>
            <b> <h2 style="font-size: 20px; " class="text-gray-700 font-bold text-7xl pb-4">
                $50
            </h2> </b>
            <span class="text-gray-500">
                By <span class="font-bold italic text-gray-800">
                <strong> Praise Ebuka</strong>
                </span>, 9months ago
            </span>
            <br><br>
            <p class="text-xl text-gray-700  leading-8 font-light"
                style="padding-bottom: 30px;">
            </p>

        </div>
        </div>
    
        </div>
</div>
<br><br>


  {{-- Peppers --}}
  <div class="max-w-5xl sm:px-6 lg:px-8">
    <div class="bg-white shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">

        <div class="sm:grid grid-cols-4 gap-20 w-4/5 py-15 border-gray-200">
            
                <img src="/img/peppers.jpg" width="400" style="border-radius: 20px; margin-bottom: 30px;" alt="peppers">
            
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


  {{-- Maize Like --}}
  <div class="max-w-5xl sm:px-6 lg:px-8">
    <div class="bg-white shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">

        <div class="sm:grid grid-cols-4 gap-20 w-4/5 py-15 border-gray-200">
            
                <img src="/img/maizeLike.jpg" width="400" style="border-radius: 20px; margin-bottom: 30px;" alt="Maize_Like">
            
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



</x-app-layout>