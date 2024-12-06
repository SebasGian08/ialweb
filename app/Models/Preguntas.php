<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Preguntas extends Model
{
    use SoftDeletes;
    protected $fillable = ['pregunta','respuesta'];
    protected $appends = ['fecha_registro'];
    protected $dates = ['deleted_at'];

    public function getFechaRegistroAttribute()
    {
        return Carbon::parse($this->created_at)->timezone(config('app.timezone'))->format('d-m-Y H:i');
    }
}
