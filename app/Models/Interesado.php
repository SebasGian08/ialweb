<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Interesado extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'nom', 'ape', 'dni', 'tel', 'email', 'provincia_id', 'distrito_id', 'modalidad_id', 'carrera_id', 'fuente_id'
    ];
    protected $appends = [ 'fecha_registro'];
    protected $dates = ['deleted_at'];

    public function getFechaRegistroAttribute()
    {
        return Carbon::parse($this->created_at)->timezone(config('app.timezone'))->format('d-m-Y H:i');
    }
}
