<x-guest-layout><br>
    {{-- The title section --}}

        <div class="w-4/5 m-auto text-center">
            <div class="py-15">        
                    <b><h1 class="text-6xl">
                        Create a Product
                    </h1></b><br>
            </div>
        </div>


        @if ($errors->any())
            <div class="w-4/5 m-auto">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                            {{ error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="w-4/5 m-auto pt-20">
            <form method="POST" action="/products"  enctype="multipart/form-data">
                @csrf

                <input type="text" name="title" placeholder="Title...." class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none"><br><br>
                <div class="w-4/5 m-auto text-left">       
                            <b>
                               Description
        
                <textarea name="description" placeholder="Description..." class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none"> </textarea> <br>
    </div>
                <div class="bg-grey-lighter pt-15">
                    <label class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                        <span class="mt-2 text-base leading-normal">
                            Select an image
                        </span>
                        <input type="file" name="image" class="hidden">
                    </label>
                </div>
                        <br>
                
            <button type="submit" class="text-black-600" style="margin-left: 30%;">
                Submit Post
            </button>
            </form>
        </div>


</x-guest-layout>
