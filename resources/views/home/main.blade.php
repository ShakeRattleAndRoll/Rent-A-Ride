<x-layout>

    <div class="relative w-full h-[600px] flex items-center justify-center overflow-hidden">
        
        <img src="{{ asset('images/test-bg-picture.jpg') }}" 
             class="absolute inset-0 w-full h-full object-cover object-center"
             alt="Rent My Ride Hero">

        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/10 to-black/10"></div>

        <div class="relative z-10 w-full max-w-4xl px-6 text-center" style="font-family: 'Montserrat', sans-serif;">
            
            <h1 class="text-4xl md:text-6xl font-black text-white mb-4 tracking-tighter uppercase">
                Drive the <span class="text-lime-400">Experience</span>
            </h1>
            
            <p class="text-gray-300 text-lg md:text-xl mb-10 font-medium tracking-wide">
                Car rentals for your next adventure.
            </p>

            <div class="relative w-full max-w-2xl mx-auto group">

                <div class="absolute inset-y-0 left-6 flex items-center pointer-events-none">
                    <svg class="w-6 h-6 text-gray-400 group-focus-within:text-lime-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>

                <input type="text" 
                       name="search" 
                       placeholder="Search by brand, model, or category..." 
                       class="w-full pl-14 pr-6 py-4 rounded-full bg-[#1a1a1a] text-white border border-white/10 outline-none focus:border-yellow-400 transition-all shadow-lg placeholder:text-gray-600">
                
            </div>
        </div>
    </div>

    <section class="py-20 bg-black">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-2xl font-bold text-white mb-10" style="font-family: 'Montserrat', sans-serif;">???</h2>
        </div>
    </section>

</x-layout>