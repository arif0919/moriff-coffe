<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisKopi extends Model
{
    protected $guarded = [];

    public function menu()
    {
        return $this->hasMany(MenuKopi::class, 'jenis_id');
    }
}
