<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndikatorMaturity extends Model
{
    use HasFactory;

    public function aspek_maturity()
    {
        return $this->belongsTo(AspekMaturity::class, 'kode_aspek', 'aspek_id');
    }

    public function kriteria_maturity()
    {
        return $this->hasMany(KriteriaMaturity::class, 'indikator_maturity_id', 'kode_indikator');
    }
}
