<x-layout title="Messages">
    
    <div class="bg-[#121212] text-white min-h-screen p-6">

        <!-- Main Container -->
        <div class="bg-gray-800 rounded-lg p-6 flex gap-6 h-[80vh]">

            <!-- Sidebar -->
            <div class="w-1/4 bg-gray-700 rounded-lg p-4 flex flex-col">
                
                <!-- User Header (placeholder)-->
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 bg-gray-300 rounded-full"></div>
                    <span>Ur Username</span>
                </div>

                <hr class="border-gray-400 mb-4">

                <!-- Contacts (placeholder, dri ibutang ang mga profiles)-->
                <div class="space-y-3 overflow-y-auto">
                    
                    <div class="flex items-center gap-3 bg-gray-600 p-3 rounded-lg">
                        <div class="w-8 h-8 bg-white rounded-full"></div>
                        <span>Reconnes</span>
                    </div>

                    <div class="flex items-center gap-3 p-3 rounded-lg hover:bg-gray-600 cursor-pointer">
                        <div class="w-8 h-8 bg-white rounded-full"></div>
                        <span>James</span>
                    </div>

                    <div class="flex items-center gap-3 p-3 rounded-lg hover:bg-gray-600 cursor-pointer">
                        <div class="w-8 h-8 bg-white rounded-full"></div>
                        <span>Joshua</span>
                    </div>

                    <div class="flex items-center gap-3 p-3 rounded-lg hover:bg-gray-600 cursor-pointer">
                        <div class="w-8 h-8 bg-white rounded-full"></div>
                        <span>Carl</span>
                    </div>

                    <div class="flex items-center gap-3 p-3 rounded-lg hover:bg-gray-600 cursor-pointer">
                        <div class="w-8 h-8 bg-white rounded-full"></div>
                        <span>Tony</span>
                    </div>

                </div>
            </div>

            <!-- Chat Area -->
            <div class="flex-1 bg-gray-700 rounded-lg p-6 flex flex-col justify-between">

                <!-- Chat Header -->
                <div>
                    <div class="flex flex-col items-center">
                        <div class="w-12 h-12 bg-white rounded-full mb-2"></div>
                        <h2 class="text-lg font-semibold">Reconnes</h2>
                    </div>

                    <hr class="border-gray-400 mt-4">
                </div>

                <!-- Messages -->
                <div class="flex flex-col gap-4 mt-4 overflow-y-auto flex-1"></div>

                <!-- Input -->
                <div class="flex items-center gap-4 mt-4">
                    <input 
                        type="text" 
                        placeholder="Type a message..." 
                        class="flex-1 px-4 py-3 rounded-full bg-gray-600 text-white outline-none"
                    >
                    <button class="bg-yellow-400 text-black px-6 py-3 rounded-full font-semibold">
                        Send
                    </button>
                </div>

            </div>

        </div>

    </div>

</x-layout>
