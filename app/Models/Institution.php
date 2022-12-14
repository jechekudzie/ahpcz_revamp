<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function accredited_institutions()
    {
        return $this->hasMany(AccreditedInstitution::class);
    }
}
