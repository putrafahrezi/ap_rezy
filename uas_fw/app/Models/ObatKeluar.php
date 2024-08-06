<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ObatKeluar extends Model
{
    public function dataobats(): hasOne
    {
        return $this->hasOne(DataObat::class, 'id', 'dataobats_id');
    }
}
