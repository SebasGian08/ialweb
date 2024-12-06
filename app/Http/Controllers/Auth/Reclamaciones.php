<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Reclamaciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ReclamacionesController extends Controller
{
    protected $viewName = 'reclamaciones';

    public function index()
    {
        return view('auth.pages.'.$this->viewName.'.index');
    }

    public function listJson()
    {
        return response()->json(['data' => Reclamaciones::all()]);
    }

    public function partialView($id)
    {
        $entity = null;
        if($id != 0) $entity = Testimonio::find($id);
        return view('auth.pages.'.$this->viewName.'.ajax.partial_view', ['Model' => $entity, 'ViewName' => ucfirst($this->viewName)]);
    }

    public function store(Request $request)
    {
        $Result = (object)['Success' => false, 'Message' => null, 'Errors' => null];

        try {

            DB::beginTransaction();

            $Validator = Validator::make($request->all(), [
                'nombre' => 'required|max:150',
                'cargo' => 'required|max:150',
                'descripcion' => 'required|max:500',
                'referencia' => 'nullable|max:150'
            ]);

            if (!$Validator->fails()){

                $entity = null;

                if($request->id != 0) $entity = Testimonio::find($request->id);

                $imagen_path = null;

                if($request->file('imagen')) $imagen_path = $request->imagen->store('public/uploads/images/testimonios');

                $request->merge(['imagen_path' => $imagen_path != null ? $imagen_path : $request->imagen_path]);

                if($entity != null){
                    $entity->update($request->all());
                }else{
                    Testimonio::create($request->all());
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
            $entity = Testimonio::find($request->id);
            if ($entity->delete()) $Result->Success = true;
        }catch (\Exception $e){
            $Result->Message = $e->getMessage();
        }

        return response()->json($Result);
    }
}
