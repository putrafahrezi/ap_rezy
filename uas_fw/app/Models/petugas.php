<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class petugas extends Model
{
    protected $table = 'petugas';

    public function stokobat():BelongTo{
        return $this->belongTo(StokObat::class);
    }
}
