<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-200">

    <!-- Sidebar -->
    <aside class="bg-gray-800 text-white w-64 space-y-6 py-7 px-2 fixed left-0 top-0 h-screen">
        <div class="text-center">
            <h1 class="text-2xl font-bold">Admin Panel</h1>
        </div>

        @include('menu')

    </aside>

    <!-- Content -->
    <main class="ml-64 p-8">
        @yield('content')
    </main>

</body>

</html>
