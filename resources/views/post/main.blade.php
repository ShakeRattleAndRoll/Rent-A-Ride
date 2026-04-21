<x-layout>
    <div class="bg-[#121212] min-h-screen text-white p-10">
        <div class="max-w-6xl mx-auto bg-[#1a1a1a] p-10 rounded-3xl shadow-2xl border border-white/5">
            
            <h1 class="text-3xl font-bold mb-2">Add New Listing</h1>
            <p class="text-gray-400 mb-10 text-sm">Submit your vehicle details for verification.</p>

            <form action="/cars" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 md:grid-cols-3 gap-10">
                @csrf

                <div class="col-span-1 space-y-6">
                    <label class="block text-sm font-semibold text-gray-300">Car Picture</label>
                    
                    <label class="relative flex flex-col items-center justify-center w-full aspect-square bg-[#242424] rounded-2xl border-2 border-dashed border-gray-600 cursor-pointer hover:border-yellow-400 transition-all group">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg class="w-12 h-12 text-gray-500 mb-3 group-hover:text-yellow-400 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <p class="text-xs text-gray-500 text-center px-4">Click to upload or drag and drop</p>
                        </div>
                        <input type="file" name="car_image" class="hidden" />
                    </label>

                    <div class="flex flex-col gap-2">
                        <label class="text-sm text-gray-400 font-semibold">Date Bought/Owned</label>
                        <input type="date" name="date_owned" class="w-full bg-[#242424] text-white p-4 rounded-xl border border-white/5 outline-none focus:border-yellow-400">
                    </div>
                </div>

                <div class="col-span-1 md:col-span-2 grid grid-cols-1 md:grid-cols-2 gap-6">
                    
                    <div class="flex flex-col gap-2">
                        <label class="text-sm text-gray-400 font-semibold">Car Brand</label>
                        <input type="text" name="brand" placeholder="e.g. Toyota" class="w-full bg-[#242424] text-white p-4 rounded-xl border border-white/5 outline-none focus:border-yellow-400">
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-sm text-gray-400 font-semibold">Car Model</label>
                        <input type="text" name="model" placeholder="e.g. Corolla" class="w-full bg-[#242424] text-white p-4 rounded-xl border border-white/5 outline-none focus:border-yellow-400">
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-sm text-gray-400 font-semibold">Price (Per Day)</label>
                        <input type="number" name="price" placeholder="₱ Enter Amount" class="w-full bg-[#242424] text-white p-4 rounded-xl border border-white/5 outline-none focus:border-yellow-400">
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-sm text-gray-400 font-semibold">Rent Period</label>
                        <input type="text" name="rent_period" placeholder="e.g. Per Day" class="w-full bg-[#242424] text-white p-4 rounded-xl border border-white/5 outline-none focus:border-yellow-400">
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-sm text-gray-400 font-semibold">Transmission Type</label>
                        <select name="transmission" class="w-full bg-[#242424] text-white p-4 rounded-xl border border-white/5 outline-none focus:border-yellow-400">
                            <option value="Automatic">Automatic</option>
                            <option value="Manual">Manual</option>
                        </select>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-sm text-gray-400 font-semibold">Fuel Type</label>
                        <select name="fuel_type" class="w-full bg-[#242424] text-white p-4 rounded-xl border border-white/5 outline-none focus:border-yellow-400">
                            <option value="Gasoline">Gasoline</option>
                            <option value="Diesel">Diesel</option>
                            <option value="Electric">Electric</option>
                        </select>
                    </div>

                    <div class="flex flex-col gap-2 md:col-span-2">
                        <label class="text-sm text-gray-400 font-semibold">Description</label>
                        <textarea name="description" rows="6" placeholder="Enter description ..." class="w-full bg-[#242424] text-white p-4 rounded-xl border border-white/5 outline-none focus:border-yellow-400"></textarea>
                    </div>

                    <div class="md:col-span-2 flex justify-end gap-4 mt-4">
                        <a href="/" class="px-8 py-3 font-bold text-gray-400 flex items-center">Cancel</a>
                        <button type="submit" class="px-12 py-3 bg-yellow-400 text-black rounded-full font-bold hover:bg-yellow-300 transition">Post</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layout>