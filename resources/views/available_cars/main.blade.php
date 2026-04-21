<x-layout>
        
    <div class="w-full flex justify-center px-4 py-10 bg-gray-900">
        <div class="w-full max-w-2xl">
            <input type="text" 
                    name="search" 
                    placeholder="Search..." 
                    class="search-input-dark w-full p-4 rounded-full bg-black/60 text-white border border-white/10 backdrop-blur-md outline-none focus:ring-2 focus:ring-yellow-500 transition">
        </div>
    </div>

    {{-- Car Cards if mo gana na --}}
    {{--@foreach($cars as $car) 
            @include('available_cars.card', ['car' => $car]) 
        @endforeach --}}

    <div class="w-full bg-grey-600">
        <p></p>
    </div>

</x-layout>