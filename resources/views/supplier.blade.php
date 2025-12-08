@extends('layout.tm')

@section('content')
<style>
    .supplier-container {
        padding: 30px;
    }

    .supplier-title {
        font-size: 28px;
        font-weight: bold;
        margin-bottom: 20px;
        color: #333;
    }

    .supplier-grid {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
    }

    .supplier-card {
        background: white;
        padding: 25px;
        width: 180px;
        border-radius: 15px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        cursor: pointer;
        text-align: center;
        transition: 0.2s;
    }

    .supplier-card:hover {
        transform: scale(1.05);
    }

    .supplier-card img {
        width: 50px;
        margin-bottom: 15px;
    }
</style>

<div class="supplier-container">
    <h2 class="supplier-title">Supplier</h2>

    <div class="supplier-grid">

        <div class="supplier-card">
            <img src="https://cdn-icons-png.flaticon.com/512/1995/1995515.png">
            <strong>PT riska</strong>
            <strong>081280437247</strong>
        </div>

        <div class="supplier-card">
            <img src="https://cdn-icons-png.flaticon.com/512/3176/3176366.png">
            <strong>PT alfin</strong>
            <strong>082374913747</strong>
        </div>

    </div>
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
