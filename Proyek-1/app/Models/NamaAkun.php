<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NamaAkun extends Model
{
    use HasFactory;

    public function company(){
        return $this->belongsTo(Company::class);
    }
    public function detailakun()
    {
        return $this->hasOne(DetailAkun::class);
    }
}
