<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Unnamed Learn</title>
</head>
<body>
    <div class="bg-gray-800 min-h-screen text-gray-50">
        <x-navbar/>

        {{ $slot }}
        
    </div>
</body>
</html>