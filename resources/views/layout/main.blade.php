<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moriff Coffee</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5e6d3;
            margin: 0;
        }

        nav {
            background: #4e342e;
            padding: 15px;
        }

        nav a {
            color: white;
            margin-right: 20px;
            text-decoration: none;
            font-weight: bold;
        }

        .container {
            width: 90%;
            margin: auto;
            margin-top: 30px;
        }

        .card {
            background: #fff;
            padding: 15px;
            margin-bottom: 15px;
            border-left: 5px solid #6d4c41;
            border-radius: 6px;
        }
    </style>
</head>

<body>

    {{-- NAVBAR --}}
    <nav>
        <a href="/">Home</a>
        <a href="/menu-kopi">Menu Kopi</a>
        <a href="/jenis-kopi">Jenis Kopi</a>
        <a href="/barista">Barista</a>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    {{-- FOOTER --}}
    <footer style="background:#3e2723; color:#fff; padding:20px; margin-top:40px;">
        <div style="text-align:center;">
            <h3 style="margin:0;">Moriff Coffee</h3>
            <p style="margin:5px 0 10px;">Tempat ngopi terbaik dengan cita rasa premium.</p>

            <p style="font-size:14px; margin-top:10px; opacity:0.8;">
                &copy; {{ date('Y') }} Moriff Coffee. Semua hak cipta dilindungi.
            </p>
        </div>
    </footer>

</body>
</html>
