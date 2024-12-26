<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Carrera extends Model
{
    use SoftDeletes;
    protected $fillable = ['imagen_path', 'portada_path', 'nombre', 'slug', 'descripcion', 'informacion', 'fecha_inicio', 'duracion', 'turno', 'modalidad',
        'brochure_path', 'imagen_habilidad_path', 'video_beneficios', 'oportunidades_profesionales', 'perfil_egresado', 'certificaciones'];
    protected $appends = ['imagen', 'imagen_habilidad', 'brochure', 'portada', 'fecha_registro', 'nombre_dos_lineas'];
    protected $dates = ['deleted_at'];

    public function getImagenAttribute()
    {
        return $this->imagen_path != null ? '/img/'.$this->imagen_path : null;
    }
    public function getPortadaAttribute()
    {
        return $this->portada_path != null ? '/img/'.$this->portada_path : null;
    }
    public function getImagenHabilidadAttribute()
    {
        return $this->imagen_habilidad_path != null ? '/img/'.$this->imagen_habilidad_path : null;
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
    public function getOportunidadesProfesionalesAttribute($value)
    {
        return $value != null ? json_decode($value) : null;
    }
    public function getPerfilEgresadoAttribute($value)
    {
        return $value != null ? json_decode($value) : null;
    }
    public function getCertificacionesAttribute($value)
    {
        return $value != null ? json_decode($value) : null;
    }
    public function getTurnoAttribute($value)
    {
        return $value != null ? json_decode($value) : null;
    }
    public function getModalidadAttribute($value)
    {
        return $value != null ? json_decode($value) : null;
    }
    public function habilidades()
    {
        return $this->hasMany(CarreraHabilidad::class);
    }

    public function beneficios()
    {
        return $this->hasMany(CarreraBeneficio::class);
    }
}
