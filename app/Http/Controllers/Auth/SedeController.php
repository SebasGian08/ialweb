<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Sede;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class SedeController extends Controller
{
    protected $viewName = 'sede';

    public function index()
    {
        return view('auth.pages.'.$this->viewName.'.index');
    }

    public function listJson()
    {
        return response()->json(['data' => Sede::all()]);
    }

    public function partialView($id)
    {
        $entity = null;
        if($id != 0) $entity = Sede::find($id);
        return view('auth.pages.'.$this->viewName.'.ajax.partial_view', ['Model' => $entity, 'ViewName' => ucfirst($this->viewName)]);
    }

    public function store(Request $request)
    {
        $Result = (object)['Success' => false, 'Message' => null, 'Errors' => null];

        try {

            DB::beginTransaction();

            $Validator = Validator::make($request->all(), [
                'nombre' => 'required|max:150',
                'telefono' => 'nullable|max:50',
                'direccion' => 'required|array|min:1',
                'direccion.*.texto' => 'required|string|max:255',
                'direccion.*.link' => 'required|url',
                
            ]);

            if (!$Validator->fails()){

                $entity = null;

                if($request->id != 0) $entity = Sede::find($request->id);

                $imagen_path = null;

                if($request->file('imagen')) $imagen_path = $request->imagen->store('public/uploads/images/sedes');

                $request->merge([
                    'imagen_path' => $imagen_path != null ? $imagen_path : $request->imagen_path,
                    'horarios' => json_encode($request->horarios),
                    'direccion' => json_encode($request->direccion),
                ]);

                if($request->imagen_path == null)
                {
                    $Result->Message = 'Por favor, ingrese una imagen.';
                    return response()->json($Result);
                }

                if($entity != null){
                    $entity->update($request->all());
                }else{
                    Sede::create($request->all());
                }

                DB::commit();

                $Result->Success = true;
            }

            $Result->Errors = $Validator->errors();

        }catch (\Exception $e)
        {
            $Result->Message = $e->getMessage();
            DB::rollBack();
        }

        return response()->json($Result);
    }

    public function delete(Request $request)
    {
        $Result = (object)['Success' => false, 'Message' => null];

        try {
            $entity = Sede::find($request->id);
            if ($entity->delete()) $Result->Success = true;
        }catch (\Exception $e){
            $Result->Message = $e->getMessage();
        }

        return response()->json($Result);
    }
}
