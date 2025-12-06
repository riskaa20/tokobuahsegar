<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $guarded = [];

    public function Kategori()
    {
        return $this->hasMany(Kategori::class, 'supplier_id');
    }
}
