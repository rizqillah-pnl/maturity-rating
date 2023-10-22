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

    public function variabel_indikator()
    {
        return $this->hasMany(VariabelIndikator::class, 'indikator_maturity_id', 'kode_indikator');
    }

    public function inputan_maturity()
    {
        return $this->hasMany(InputanMaturity::class, 'indikator_maturity_id', 'kode_indikator');
    }
    public function komponen_hasil()
    {
        return $this->hasMany(KomponenHasil::class, 'indikator_maturity_id', 'kode_indikator');
    }
    public function dokumen_pendukung()
    {
        return $this->hasMany(DokumenPendukung::class, 'indikator_maturity_id', 'kode_indikator');
    }
}
