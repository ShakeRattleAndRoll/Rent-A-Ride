<x-layout>
    <div class="bg-[#121212] min-h-screen text-white p-10">
        <div class="max-w-4xl mx-auto bg-[#1a1a1a] p-10 rounded-3xl shadow-2xl border border-white/5">

            <form action="/profile/update" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

                    {{-- Left Column --}}
                    <div class="col-span-1 flex flex-col items-center gap-6">

                        <p class="text-sm text-gray-400 font-semibold">Change Profile Picture</p>

                        <label class="w-48 h-48 rounded-full bg-[#2a2a2a] border-2 border-dashed border-gray-600 hover:border-yellow-400 transition cursor-pointer flex items-center justify-center overflow-hidden group">
                            <svg class="w-16 h-16 text-gray-600 group-hover:text-yellow-400 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                      d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <input type="file" name="profile_picture" class="hidden" />
                        </label>

                        <div class="flex flex-col gap-2 w-full">
                            <label class="text-sm text-gray-400 font-semibold">Change Username</label>
                            <input type="text" name="username"
                                   value="{{ auth()->user()?->username ?? '' }}"
                                   class="w-full bg-[#242424] text-white p-4 rounded-xl border border-white/5 outline-none focus:border-yellow-400 transition">
                        </div>

                        <div class="flex flex-col gap-2 w-full">
                            <label class="text-sm text-gray-400 font-semibold">Change Password</label>
                            <input type="password" name="password"
                                   placeholder="Enter new password"
                                   class="w-full bg-[#242424] text-white p-4 rounded-xl border border-white/5 outline-none focus:border-yellow-400 transition">
                        </div>

                        <div class="flex flex-col gap-2 w-full">
                            <label class="text-sm text-gray-400 font-semibold">Confirm Password</label>
                            <input type="password" name="password_confirmation"
                                   placeholder="Confirm new password"
                                   class="w-full bg-[#242424] text-white p-4 rounded-xl border border-white/5 outline-none focus:border-yellow-400 transition">
                        </div>

                    </div>

                    {{-- Right Column --}}
                    <div class="col-span-1 md:col-span-2 flex flex-col gap-5">

                        <div class="flex flex-col gap-2">
                            <label class="text-sm text-gray-400 font-semibold">First Name</label>
                            <input type="text" name="first_name"
                                   value="{{ auth()->user()?->first_name ?? '' }}"
                                   class="w-full bg-[#242424] text-white p-4 rounded-xl border border-white/5 outline-none focus:border-yellow-400 transition">
                        </div>

                        <div class="flex flex-col gap-2">
                            <label class="text-sm text-gray-400 font-semibold">Middle Name</label>
                            <input type="text" name="middle_name"
                                   value="{{ auth()->user()?->middle_name ?? '' }}"
                                   class="w-full bg-[#242424] text-white p-4 rounded-xl border border-white/5 outline-none focus:border-yellow-400 transition">
                        </div>

                        <div class="flex flex-col gap-2">
                            <label class="text-sm text-gray-400 font-semibold">Last Name</label>
                            <input type="text" name="last_name"
                                   value="{{ auth()->user()?->last_name ?? '' }}"
                                   class="w-full bg-[#242424] text-white p-4 rounded-xl border border-white/5 outline-none focus:border-yellow-400 transition">
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div class="flex flex-col gap-2">
                                <label class="text-sm text-gray-400 font-semibold">Sex</label>
                                <select name="sex" class="w-full bg-[#242424] text-white p-4 rounded-xl border border-white/5 outline-none focus:border-yellow-400 transition">
                                    <option value="">Select</option>
                                    <option value="Male"   {{ auth()->user()?->sex === 'Male'   ? 'selected' : '' }}>Male</option>
                                    <option value="Female" {{ auth()->user()?->sex === 'Female' ? 'selected' : '' }}>Female</option>
                                </select>
                            </div>

                            <div class="flex flex-col gap-2">
                                <label class="text-sm text-gray-400 font-semibold">Date of Birth</label>
                                <input type="date" name="date_of_birth"
                                       value="{{ auth()->user()?->date_of_birth ?? '' }}"
                                       class="w-full bg-[#242424] text-white p-4 rounded-xl border border-white/5 outline-none focus:border-yellow-400 transition">
                            </div>
                        </div>

                        <div class="flex flex-col gap-2">
                            <label class="text-sm text-gray-400 font-semibold">Address</label>
                            <input type="text" name="address"
                                   value="{{ auth()->user()?->address ?? '' }}"
                                   class="w-full bg-[#242424] text-white p-4 rounded-xl border border-white/5 outline-none focus:border-yellow-400 transition">
                        </div>

                        <div class="flex flex-col gap-2">
                            <label class="text-sm text-gray-400 font-semibold">Contact Number</label>
                            <input type="text" name="contact_number"
                                   value="{{ auth()->user()?->contact_number ?? '' }}"
                                   class="w-full bg-[#242424] text-white p-4 rounded-xl border border-white/5 outline-none focus:border-yellow-400 transition">
                        </div>

                        <div class="flex flex-col gap-2">
                            <label class="text-sm text-gray-400 font-semibold">Email</label>
                            <input type="email" name="email"
                                   value="{{ auth()->user()?->email ?? '' }}"
                                   class="w-full bg-[#242424] text-white p-4 rounded-xl border border-white/5 outline-none focus:border-yellow-400 transition">
                        </div>

                    </div>
                </div>

                {{-- Buttons --}}
                <div class="flex justify-center gap-6 mt-10">
                    <a href="/profile" class="px-10 py-3 bg-yellow-400 text-black rounded-full font-bold hover:bg-yellow-300 transition">
                        Cancel
                    </a>
                    <button type="submit" class="px-10 py-3 bg-yellow-400 text-black rounded-full font-bold hover:bg-yellow-300 transition">
                        Save Changes
                    </button>
                </div>

            </form>
        </div>
    </div>
</x-layout>