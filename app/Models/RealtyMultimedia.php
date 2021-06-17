<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealtyMultimedia extends Model
{
    use HasFactory;
    public function realty(){
        return $this->belongsTo(Realty::class);
    }
}
