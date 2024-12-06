<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sede extends Model
{
    use SoftDeletes;
    protected $fillable = ['imagen_path', 'nombre', 'link', 'telefono', 'direccion', 'horarios'];
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

    public function getHorariosAttribute($value)
    {
        return $value != null ? json_decode($value) : null;
    }
    //Aumente
    public function getDireccionAttribute($value)
    {
        return $value ? json_decode($value, true) : [];
    }
    
    

}
