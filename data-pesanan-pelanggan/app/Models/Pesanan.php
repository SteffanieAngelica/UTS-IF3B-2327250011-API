<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Pesanan extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'pesanans';

    protected $fillable = ["nama","barang","harga"];
}
