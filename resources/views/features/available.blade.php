<x-app-layout><br>
        {{-- The title section --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
        
                    <b> 
                    <h2>
                        {{ Auth::user()->name }}'s {{ __('Purchase a product') }}
                    </h2></b>
                </div>
            </div>
        </div>
    </div>





    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in right now to your available products section!") }}
                </div>
            </div>
        </div>
    </div> --}}
</x-app-layout>