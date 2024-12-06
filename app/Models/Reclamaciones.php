<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reclamaciones extends Model
{
    use SoftDeletes;
    protected $fillable = ['nom_consu','ape_consu','dni','tel','email','nom_apod','depa_id','prov_id','dist_id','direccion','servicio','monto','tipo_serv','tipo_reclamo','sede_id','carrera_id','detalle','pedido','prueba'];
    protected $appends = ['fecha_registro'];
    protected $dates = ['deleted_at'];

    public function getFechaRegistroAttribute()
    {
        return Carbon::parse($this->created_at)->timezone(config('app.timezone'))->format('d-m-Y H:i');
    }
}
