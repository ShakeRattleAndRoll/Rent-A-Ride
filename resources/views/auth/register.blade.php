<x-layout>
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

    <input name="username" placeholder="Username" class="input" required>

    <input name="first_name" placeholder="First name" class="input" required>
    <input name="middle_name" placeholder="Middle name" class="input" required>
    <input name="last_name" placeholder="Last name" class="input" required>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">

        <input name="dob" type="date" class="input" required>

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

    <input name="address" placeholder="Address" class="input" required>
    <input name="email" type="email" placeholder="Email" class="input" required>
    <input name="contact_number" placeholder="Contact Number" class="input" required>

    <input type="password" name="password" placeholder="Password" class="input" required>
    <input type="password" name="password_confirmation" placeholder="Confirm Password" class="input" required>

    <button class="bg-yellow-400 text-black w-full py-3 rounded-full mt-4 font-bold hover:bg-yellow-300 transition">
        CREATE ACCOUNT
    </button>
</form>

    </div>

</div>

<style>
.input {
    width: 100%;
    padding: 12px 16px;
    border-radius: 999px;
    background: #1f2937;
    color: white;
    outline: none;
}

.input:focus {
    border: 1px solid #facc15;
}
</style>
</x-layout>