<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndikatorHasil extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function indikator_maturity()
    {
        return $this->belongsTo(IndikatorMaturity::class, 'kode_indikator', 'indikator_maturity_id');
    }
}
