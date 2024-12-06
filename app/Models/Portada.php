<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Portada extends Model
{
    use SoftDeletes;
    protected $fillable = ['imagen_path', 'imagen_mobile_path', 'nombre', 'link'];
    protected $appends = ['imagen', 'imagen_mobile', 'fecha_registro'];
    protected $dates = ['deleted_at'];

    public function getImagenAttribute()
    {
        return $this->imagen_path != null ? '/img/'.$this->imagen_path : null;
    }
    public function getImagenMobileAttribute()
    {
        return $this->imagen_mobile_path != null ? '/img/'.$this->imagen_mobile_path : null;
    }
    public function getFechaRegistroAttribute()
    {
        return Carbon::parse($this->created_at)->timezone(config('app.timezone'))->format('d-m-Y H:i');
    }
}
