<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KriteriaMaturity extends Model
{
    use HasFactory;

    protected $guarder = ['kode_kriteria'];
}
