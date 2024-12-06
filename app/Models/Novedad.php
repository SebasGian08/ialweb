<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Novedad extends Model
{
    use SoftDeletes;
    protected $fillable = ['imagen_path', 'categoria', 'nombre', 'slug', 'fecha', 'descripcion', 'informacion', 'visible', 'vista'];
    protected $appends = ['imagen', 'fecha_registro', 'descripcion_breve'];
    protected $dates = ['deleted_at'];

    public function getImagenAttribute()
    {
        return $this->imagen_path != null ? '/img/'.$this->imagen_path : null;
    }
    public function getCategoriaAttribute($value)
    {
        return ucfirst($value);
    }
    public function getFechaRegistroAttribute()
    {
        return Carbon::parse($this->created_at)->timezone(config('app.timezone'))->format('d-m-Y H:i');
    }
    public function getDescripcionBreveAttribute()
    {
        return strlen($this->descripcion) > 200 ? substr($this->descripcion, 0, 200).'...' : $this->descripcion;
    }
}
