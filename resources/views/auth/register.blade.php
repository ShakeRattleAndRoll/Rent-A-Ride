<x-layout>
<div class="bg-gray-900 min-h-screen">
    <div class="min-h-screen flex items-center justify-center py-10 px-4">

        <div class="bg-[#111] p-6 sm:p-8 md:p-10 rounded-2xl w-full max-w-md sm:max-w-lg text-white">

            <a href="/login" class="inline-flex items-center gap-2 text-sm text-gray-300 hover:text-white transition mb-4">
                <span class="text-xl">←</span>
                Login
            </a>

            <img src="{{ asset('images/Rent-My-Ride-Logo.png') }}"
            alt="Rent My Ride Logo"
            class="mx-auto mb-10 w-65">

            <form method="POST" action="/register" class="space-y-4">
                @csrf

                <input name="username" placeholder="Username" required
                    class="w-full px-4 py-3 rounded-full bg-[#1f2937] text-white outline-none focus:border focus:border-yellow-400">

                <input name="first_name" placeholder="First name" required
                    class="w-full px-4 py-3 rounded-full bg-[#1f2937] text-white outline-none focus:border focus:border-yellow-400">

                <input name="middle_name" placeholder="Middle name" required
                    class="w-full px-4 py-3 rounded-full bg-[#1f2937] text-white outline-none focus:border focus:border-yellow-400">

                <input name="last_name" placeholder="Last name" required
                    class="w-full px-4 py-3 rounded-full bg-[#1f2937] text-white outline-none focus:border focus:border-yellow-400">

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">

                    <input name="dob" type="date" required
                        class="w-full px-4 py-3 rounded-full bg-[#1f2937] text-white outline-none focus:border focus:border-yellow-400">

                    <div class="bg-[#1f2937] rounded-full px-4 py-2 flex items-center justify-around">
                        <label class="flex items-center gap-1 text-sm">
                            <input type="radio" name="sex" value="male" required>
                            Male
                        </label>
                        <label class="flex items-center gap-1 text-sm">
                            <input type="radio" name="sex" value="female" required>
                            Female
                        </label>
                    </div>

                </div>

                <input name="address" placeholder="Address" required
                    class="w-full px-4 py-3 rounded-full bg-[#1f2937] text-white outline-none focus:border focus:border-yellow-400">

                <input name="email" type="email" placeholder="Email" required
                    class="w-full px-4 py-3 rounded-full bg-[#1f2937] text-white outline-none focus:border focus:border-yellow-400">

                <input name="contact_number" placeholder="Contact Number" required
                    class="w-full px-4 py-3 rounded-full bg-[#1f2937] text-white outline-none focus:border focus:border-yellow-400">

                <input type="password" name="password" placeholder="Password" required
                    class="w-full px-4 py-3 rounded-full bg-[#1f2937] text-white outline-none focus:border focus:border-yellow-400">

                <input type="password" name="password_confirmation" placeholder="Confirm Password" required
                    class="w-full px-4 py-3 rounded-full bg-[#1f2937] text-white outline-none focus:border focus:border-yellow-400">

                <button class="bg-yellow-400 text-black w-full py-3 rounded-full mt-4 font-bold hover:bg-yellow-300 transition">
                    CREATE ACCOUNT
                </button>
            </form>

        </div>

    </div>
</div>
</x-layout>