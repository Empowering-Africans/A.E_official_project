
<footer class="bg-gray-800 py-20 mt-20 ">
    <div class="max-w-7xl mx-auto px-4 sm:px-2 lg:px-10 text-center">
                <div class="sm:grid grid-cols-3 w-2 pb-10 m-auto border-gray-700">
                    <div class=" space-x-4">
                        <ul class="py-4 sm:text-s pt-4 text-gray-400 ">
                            <li class="">
                                <a class="text-center" href=" {{ route('dashboard') }}">
                                    Dashboard  
                                </a>
                                ||
                                <a href="{{ route('products') }}">
                                    My products
                                </a> 
                                ||
                                <a href="{{ route('sales') }}">
                                    Sold products
                                </a> 
                            </li>
                        </ul>
                    </div>
                </div>
        </div>
    <p class="text-center w-25 w-4/5 pb-3 m-auto text-xs text-gray-100 pt-6">
        Copyright 2021-2023 Praise Ebuka. All Rights Reserved
    </p>
</footer>

           
