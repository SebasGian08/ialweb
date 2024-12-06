<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MallaCurricular extends Model
{
    use SoftDeletes;
    protected $fillable = ['carrera_id', 'imagen_path', 'nombre', 'descripcion'];
    protected $appends = ['fecha_registro'];
    protected $dates = ['deleted_at'];
    public function getFechaRegistroAttribute()
    {
        return Carbon::parse($this->created_at)->timezone(config('app.timezone'))->format('d-m-Y H:i');
    }
    public function getDescripcionAttribute($value){
        return $value != null ? json_decode($value) : null;
    }
}
