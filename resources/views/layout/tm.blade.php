<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Buah Segar</title>

    <style>
        body { font-family: Arial; background: #f5fff5; margin: 0; }
        .header { background: #4CAF50; padding: 15px; color: white; font-size: 20px; }

        .grid {
            display: grid;
            grid-template-columns: repeat(2, 150px);
            gap: 20px;
            padding: 20px;
        }

        .card {
            background: white;
            padding: 10px;
            border-radius: 12px;
            box-shadow: 0 0 5px #ccc;
            text-align: center;
        }

        img { width: 100px; border-radius: 10px; }
    </style>
</head>

<body>
@yield('content')

</body>
</html>
