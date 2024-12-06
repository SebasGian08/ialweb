<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Curso extends Model
{
    use SoftDeletes;
    protected $fillable = ['imagen_path', 'portada_path', 'nombre', 'slug', 'descripcion', 'informacion', 'fecha_inicio', 'duracion', 'turno', 'modalidad',
        'brochure_path', 'video_beneficios', 'galeria_path', 'categoria'];
    protected $appends = ['imagen', 'brochure', 'portada', 'fecha_registro', 'nombre_dos_lineas', 'galeria',];
    protected $dates = ['deleted_at'];
    public function getImagenAttribute()
    {
        return $this->imagen_path != null ? '/img/'.$this->imagen_path : null;
    }
    public function getPortadaAttribute()
    {
        return $this->portada_path != null ? '/img/'.$this->portada_path : null;
    }
    public function getBrochureAttribute()
    {
        return $this->brochure_path != null ? str_replace('public', '/storage', $this->brochure_path) : null;
    }
    public function getNombreDosLineasAttribute()
    {
        return preg_replace('/\s/', '<br>', $this->nombre, 1);
    }
    public function getFechaRegistroAttribute()
    {
        return Carbon::parse($this->created_at)->timezone(config('app.timezone'))->format('d-m-Y H:i');
    }
    public function getTurnoAttribute($value)
    {
        return $value != null ? json_decode($value) : null;
    }
    public function getModalidadAttribute($value)
    {
        return $value != null ? json_decode($value) : null;
    }
    public function getGaleriaAttribute()
    {
        $imagen = [];
        if($this->galeria_path != null){
            $imagenes = json_decode($this->galeria_path);
            if($imagenes != null){
                foreach ($imagenes as $q){
                    $imagen[] =  '/img/'.$q;
                }
            }
        }

        return $imagen;
    }
    public function beneficios()
    {
        return $this->hasMany(CursoBeneficio::class);
    }
}
