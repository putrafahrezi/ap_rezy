<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ObatKeluar extends Model
{
    protected $table = 'obatkeluars';

    public function stokobats(): HasOne
    {
        return $this->hasOne(StokObat::class, 'id','stokobats_id');
    }
}
