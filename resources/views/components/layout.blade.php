<!DOCTYPE html>
<html>
<head>
    <title>{{ $title ?? 'Rent My Ride' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-700">

    @if (!request()->is('login') && !request()->is('register'))
        @include('navbar.nav')  
    @endif

    <main>
        {{ $slot }}
    </main>


</body>
</html>