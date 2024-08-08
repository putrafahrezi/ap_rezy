<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class DataObat extends Model
{
    protected $table = 'dataobats';
    protected $primaryKey = 'id';

    public function stokobats(): HasOne
    {
        return $this->hasOne(StokObat::class, 'id','stokobats_id');
    }

    public function supliers(): HasOne
    {
        return $this->hasOne(Suplier::class, 'id','suppliers_id');
    }
}
