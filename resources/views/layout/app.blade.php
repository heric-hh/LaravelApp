<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <div class="bg-gray-200 h-screen lg:w-64 w-16 fixed">
        <h1>SideBar</h1>
    </div>
    
    <div class="flex flex-col h-screen w-full lg:pl-64 pl-16">
        <header class="p-4 border-2 border-amber-500  rounded-md">
            @yield('header')
        </header>

        <div class="flex-grow p-3">
            <h3>Contenido</h3>
            @yield('contenido')
        </div>

        <footer class="p-3">
            <h3> Eric Hernandez </h3>
            @yield('footer')
        </footer>
    </div>
        
</body>
</html>