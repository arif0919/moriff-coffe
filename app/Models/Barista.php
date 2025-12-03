<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barista extends Model
{
    protected $guarded = [];

    public function menu()
    {
        return $this->hasMany(MenuKopi::class, 'barista_id');
    }
}
