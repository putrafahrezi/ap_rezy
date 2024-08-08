<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class StokObat extends Model
{
    protected $table = 'stokobats';

    public function dataobats():BelongTo{
        return $this->belongTo(DataObat::class);
    }

    public function obatkeluars():BelongTo{
        return $this->belongTo(ObatKeluar::class);
    }

    public function petugas(): HasOne
    {
        return $this->hasOne(Petugas::class,'id','petugas_id');
    }
}

