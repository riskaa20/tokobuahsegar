<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Buah Segar</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f8fff6;
        }

        .navbar {
            background: #4CAF50;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar strong {
            color: white;
            font-size: 22px;
        }

        .nav-links button {
            margin-left: 10px;
            background: white;
            border: none;
            padding: 10px 18px;
            border-radius: 8px;
            cursor: pointer;
        }

        .hero {
            padding: 40px;
            text-align: center;
            background: #e4ffe4;
        }

        /* ---------------------------- */
        /* Tambahan untuk Slider        */
        /* ---------------------------- */
        .slider-container {
            width: 90%;
            margin: 30px auto;
            overflow: hidden;
            border-radius: 12px;
        }

        .slide {
            display: none;
            width: 100%;
        }

        .slide img {
            width: 100%;
            border-radius: 12px;
        }

        /* Tombol next / prev */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 55%;
            padding: 12px;
            font-size: 20px;
            background: rgba(0,0,0,0.4);
            color: white;
            border-radius: 50%;
        }

        .prev {
            left: 25px;
        }

        .next {
            right: 25px;
        }

        /* ---------------------------- */
        /* Kartu "Mengapa Belanja"      */
        /* ---------------------------- */
        .benefit-section {
            text-align: center;
            padding: 40px;
        }

        .benefit-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 25px;
        }

        .benefit-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .benefit-card {
            background: white;
            width: 260px;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
            text-align: center;
        }

        .benefit-card h3 {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <div class="navbar">
        <strong>TOKO BUAH</strong>

        <div class="nav-links">
            <button onclick="window.location.href='/buah'">Buah</button>
            <button onclick="window.location.href='/kategori'">Kategori</button>
            <button onclick="window.location.href='/supplier'">Supplier</button>
        </div>
    </div>

    <!-- Hero -->
    <div class="hero">
        <h1>Selamat Datang di Toko Buah Segar 🍎</h1>
        <p>Belanja buah segar, murah, dan berkualitas langsung dari supplier terpercaya.</p>
    </div>

    <!-- 🌿 MENGAPA BELANJA -->
    <div class="benefit-section">
        <div class="benefit-title">Mengapa Harus BerBelanja di Toko Buah Ini?</div>

        <div class="benefit-container">
            <div class="benefit-card">
                <h3>🍏 Buah Selalu Fresh</h3>
                <p>Langsung dari supplier pilihan setiap hari.</p>
            </div>

            <div class="benefit-card">
                <h3>💸 Harga Terjangkau</h3>
                <p>Cocok untuk rumah tangga dan bisnis.</p>
            </div>

            <div class="benefit-card">
                <h3>⚡ Berkualitas</h3>
                <p>Benar benar Buah Pilihan.</p>
            </div>
        </div>
    </div>

    <!-- Slider Script -->
    <script>
        let slideIndex = 0;
        showSlides();

        function plusSlides(n) {
            slideIndex += n - 1;
            showSlides();
        }

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("slide");

            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1 }

            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 4000); // 4 detik
        }
    </script>

</body>
</html>
