<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DataObat extends Model
{
    public function obatkeluars(): hasOne
    {
        return $this->hasOne(ObatKeluar::class, 'id', 'obatkeluars_id');
    }
}
