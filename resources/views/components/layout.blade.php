<!DOCTYPE html>
<html>
<head>
    <title>{{ $title ?? 'Rent My Ride' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black flex items-center justify-center min-h-screen">

    {{ $slot }}

</body>
</html>