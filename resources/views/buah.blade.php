<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buah</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2ffef;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #2e7d32;
        }

        .buah-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            margin-top: 30px;
        }

        .buah-card {
            background: white;
            width: 260px;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            text-align: center;
        }

        .buah-icon {
            font-size: 45px;
            margin-bottom: 10px;
        }

        .buah-card h3 {
            margin: 0;
            color: #388e3c;
            font-size: 22px;
        }

        .buah-card p {
            margin: 6px 0;
            font-size: 15px;
        }

        .label {
            font-weight: bold;
            color: #444;
        }
    </style>

</head>
<body>

    <h2>Data Buah 🍎</h2>

    <div class="buah-container">
        @php
            // Menentukan icon berdasarkan nama buah
            function iconBuah($nama) {
                $nama = strtolower($nama);

                return match (true) {
                    str_contains($nama, 'apel') => '🍎',
                    str_contains($nama, 'jeruk') => '🍊',
                    str_contains($nama, 'pisang') => '🍌',
                    str_contains($nama, 'semangka') => '🍉',
                    str_contains($nama, 'anggur') => '🍇',
                    str_contains($nama, 'nanas') => '🍍',
                    str_contains($nama, 'melon') => '🍈',
                    str_contains($nama, 'pepaya') => '🧡',
                    default => '🍏'
                };
            }
        @endphp

        @foreach ($buah as $b)
            <div class="buah-card">

                <div class="buah-icon">{{ iconBuah($b->nama_buah) }}</div>

                <h3>{{ $b->nama_buah }}</h3>

                <p><span class="label">Harga:</span> Rp{{ number_format($b->harga, 0, ',', '.') }}</p>
                <p><span class="label">Stok:</span> {{ $b->stok }}</p>
            </div>
        @endforeach
    </div>

    <a href="/"
   style="
      position: fixed;
      bottom: 20px;
      left: 20px;
      background: #4CAF50;
      color: white;
      padding: 10px 18px;
      border-radius: 8px;
      text-decoration: none;
      font-weight: bold;
   ">
   ⬅ Kembali
</a>

</body>
</html>
