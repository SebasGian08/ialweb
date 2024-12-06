<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Configuracion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConfiguracionController extends Controller
{
    protected $viewName = 'configuracion';

    public function index()
    {
        return view('auth.pages.'.$this->viewName.'.index', ['Model' => Configuracion::find(1), 'ViewName' => ucfirst($this->viewName)]);
    }

    public function store(Request $request)
    {
        $Result = (object)['Success' => false, 'Message' => null, 'Errors' => null];

        try {

            DB::beginTransaction();

            $imagen_path = null;

            if($request->file('imagen')) $imagen_path = $request->imagen->store('public/uploads/images/configuraciones');

            $request->merge(['imagen_path' => $imagen_path != null ? $imagen_path : $request->imagen_path]);

            $entity = Configuracion::find(1);
            $entity->update($request->all());

            DB::commit();

            $Result->Success = true;

        }catch (\Exception $e)
        {
            $Result->Message = $e->getMessage();
            DB::rollBack();
        }

        return response()->json($Result);
    }
}
