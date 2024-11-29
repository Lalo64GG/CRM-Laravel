<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CRM')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-200">

    <!-- Barra de navegación superior -->
    <nav class="bg-blue-600 h-16 flex items-center justify-between gap-x-6 px-10 shadow-md">
        <h1 class="text-white font-bold text-4xl">
            CRM
            <span class="font-normal"> Marketing</span>
        </h1>
        <input type="search" class="bg-slate-200 px-4 py-2 rounded-md w-80%" placeholder="Search...">
        <ul class="flex">
            <li class="flex gap-x-8">
                <a href="">
                    <i class="fas fa-user"></i>
                </a>
                <a href="">
                    <i class="fas fa-cogs"></i>
                </a>
            </li>
        </ul>
    </nav>

    <div class="flex">
        <!-- Barra lateral -->
        <aside class="bg-slate-200 min-h-screen w-64 p-6 shadow-sm">
            <nav class="flex flex-col gap-y-12 py-8">
                <ul class="text-slate-500 text-xl flex flex-col gap-y-12 font-semibold">
                    <li>
                        <a class="relative inline-block group hover:cursor-pointer hover:text-slate-600">
                            <i class="fas fa-home" aria-hidden="true"></i>
                            <span
                                class="absolute left-0 bottom-0 block h-[2px] w-0 bg-slate-600 transition-all duration-300 group-hover:w-full"></span>
                            Home
                        </a>
                    </li>

                    <li>
                        <a class="relative inline-block group hover:cursor-pointer hover:text-slate-600">
                            <i class="fas fa-address-book" aria-hidden="true"></i>
                            <span
                                class="absolute left-0 bottom-0 block h-[2px] w-0 bg-slate-600 transition-all duration-300 group-hover:w-full"></span>
                            Clients
                        </a>
                    </li>

                    <li>
                        <a class="relative inline-block group hover:cursor-pointer hover:text-slate-600">
                            <i class="fas  fa-users" aria-hidden="true"></i>
                            <span
                                class="absolute left-0 bottom-0 block h-[2px] w-0 bg-slate-600 transition-all duration-300 group-hover:w-full"></span>
                            About us
                        </a>
                    </li>

                    <li>
                        <a class="relative inline-block group hover:cursor-pointer hover:text-slate-600">
                            <i class="fas fa-sign-out" aria-hidden="true"></i>
                            <span
                                class="absolute left-0 bottom-0 block h-[2px] w-0 bg-slate-600 transition-all duration-300 group-hover:w-full"></span>
                            Logout
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Contenido principal -->
        <main class="flex-1 p-6">
            <section>
                @yield('content')
            </section>
        </main>
    </div>

</body>

</html>
