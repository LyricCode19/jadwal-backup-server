<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Jadwal Backup</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f7f9fc;
            margin: 0;
            padding: 0;
        }
        header {
            background: #0066cc;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .container {
            max-width: 800px;
            background: white;
            margin: 30px auto;
            padding: 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
        }
        footer {
            text-align: center;
            padding: 20px;
            background: #eeeeee;
            color: #666;
            margin-top: 40px;
        }
        a {
            color: #0066cc;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <header>
        <h1>Aplikasi Jadwal Backup</h1>
        <p>Kelola dan atur jadwal backup server dengan mudah</p>
    </header>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        &copy; {{ date('Y') }} Aplikasi Jadwal Backup. Dibuat dengan 🤯
    </footer>

</body>
</html>
