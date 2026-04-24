<!DOCTYPE html>
<html>
<head>
    <title>{{ $title ?? 'Rent My Ride' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
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