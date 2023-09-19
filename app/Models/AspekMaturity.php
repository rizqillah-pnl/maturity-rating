<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AspekMaturity extends Model
{
    use HasFactory;

    public function indikator_maturity()
    {
        return $this->hasMany(IndikatorMaturity::class, 'aspek_maturity_id', 'kode_aspek');
    }
}
