<x-layout>
        
    <div class="relative w-full h-[500px]">
        <img src="{{ asset('images/test-bg-picture.jpg') }}" 
                class="w-full h-full object-cover object-center">

        <div class="absolute inset-0 flex items-start justify-center px-4 pt-10">
            <div class="w-full max-w-2xl">
                <input type="text" 
                        name="search" 
                        placeholder="Search..." 
                        class="search-input-dark w-full p-4 rounded-full bg-black/60 text-white border border-white/10 backdrop-blur-md outline-none focus:ring-2 focus:ring-yellow-500 transition">
            </div>
        </div>

    </div>

    <div class="w-full bg-grey-600">
        <p></p>
    </div>



</x-layout>