<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Configuracion extends Model
{
    protected $fillable = ['imagen_path', 'telefono', 'celular', 'whatsapp', 'email', 'facebook', 'instagram', 'tiktok', 'linkedin'];
    protected $appends = ['imagen'];
    public $timestamps = false;

    public function getImagenAttribute()
    {
        return $this->imagen_path != null ? '/img/'.$this->imagen_path : null;
    }
}
