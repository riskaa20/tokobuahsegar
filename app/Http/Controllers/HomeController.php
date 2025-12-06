<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buah;
use App\Models\Kategori;
use App\Models\Supplier;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function buah()
    {
        // Ambil semua data buah dan kirim ke view
        $buah = Buah::all();
        return view('buah', compact('buah'));
    }

    public function kategori()
    {
        // Ambil semua kategori
        $kategori = Kategori::all();
        return view('kategori', compact('kategori'));
    }

        public function supplier()
        {
            // Ambil semua supplier
            $supplier = Supplier::all() ;
            return view('supplier', compact('supplier'));
        }
    }
