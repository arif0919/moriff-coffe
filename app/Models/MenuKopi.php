<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuKopi extends Model
{
    protected $table = 'menu_kopis';

    protected $fillable = [
        'nama_menu',
        'harga',
        'jenis_id',
        'barista_id',
    ];

    public function jenis()
    {
        return $this->belongsTo(JenisKopi::class, 'jenis_id');
    }

    public function barista()
    {
        return $this->belongsTo(Barista::class, 'barista_id');
    }
}
