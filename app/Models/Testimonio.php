<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Testimonio extends Model
{
    use SoftDeletes;
    protected $fillable = ['imagen_path', 'nombre', 'cargo', 'descripcion', 'referencia'];
    protected $appends = ['imagen', 'fecha_registro'];
    protected $dates = ['deleted_at'];

    public function getImagenAttribute()
    {
        return $this->imagen_path != null ? '/img/'.$this->imagen_path : null;
    }
    public function getFechaRegistroAttribute()
    {
        return Carbon::parse($this->created_at)->timezone(config('app.timezone'))->format('d-m-Y H:i');
    }
}
