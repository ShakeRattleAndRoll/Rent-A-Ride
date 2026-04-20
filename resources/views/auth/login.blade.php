<x-layout>
<div class="bg-[#111] p-10 rounded-2xl w-96 shadow-lg text-center">

    <img src="{{ asset('images/Rent-My-Ride-Logo.png') }}"
         alt="Rent My Ride Logo"
         class="mx-auto mb-10 w-65">

    <form method="POST" action="/login">
        @csrf

        <input type="text" name="email" placeholder="Email/Username"
            class="w-full mb-4 p-3 rounded-full bg-gray-800 text-white border-none">

        <input type="password" name="password" placeholder="Password"
            class="w-full mb-6 p-3 rounded-full bg-gray-800 text-white border-none">

        <button class="bg-yellow-400 w-full py-2 rounded-full font-bold text-black">
            LOGIN
        </button>
    </form>

    <p class="text-gray-400 mt-4">
        Don't have account?
        <a href="/register" class="text-blue-400">Sign Up</a>
    </p>

</div>
</x-layout>