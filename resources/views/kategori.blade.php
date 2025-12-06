@extends('layout.tm')

@section('content')
<style>
    .kategori-container {
        display: flex;
        justify-content: center;
        gap: 30px;
        margin-top: 40px;
    }

    .kategori-card {
        width: 200px;
        height: 140px;
        background: #ffffff;
        border-radius: 15px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-decoration: none;
        transition: 0.2s;
    }

    .kategori-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 14px rgba(0, 0, 0, 0.15);
    }

    .kategori-icon {
        font-size: 40px;
        margin-bottom: 8px;
    }
</style>

<h1 style="text-align:center; font-weight:bold; margin-top:20px;">
    Kategori 🍇
</h1>

<div class="kategori-container">

    <a href="#" class="kategori-card">
        <div class="kategori-icon">🍎</div>
        <div style="font-size:18px; font-weight:600;">Buah</div>
    </a>

    <a href="#" class="kategori-card">
        <div class="kategori-icon">🥦</div>
        <div style="font-size:18px; font-weight:600;">Sayur</div>
    </a>

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


@endsection
