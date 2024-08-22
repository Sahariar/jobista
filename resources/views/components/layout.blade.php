<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <title>Jobista</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
<x-header> </x-header>
    <h1 class="text-3xl font-bold underline">
        {{ $heading }}
    </h1>
<x-footer> </x-footer>
</body>
</html>
