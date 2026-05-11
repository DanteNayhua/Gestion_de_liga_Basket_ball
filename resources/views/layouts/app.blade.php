<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liga de Básquetbol</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(rgba(15, 23, 42, 0.95), rgba(30, 41, 59, 0.95)),
                        url('https://picsum.photos/id/1015/1920/1080') center/cover no-repeat fixed;
        }
        .navbar {
            background: linear-gradient(90deg, #1e3a8a, #ea580c);
        }
    </style>
</head>
<body class="min-h-screen text-white">

    <!-- Navbar -->
    @include('layouts.navigation')

    <!-- Contenido principal -->
    <main class="py-10">
        @yield('content')
    </main>

</body>
</html>