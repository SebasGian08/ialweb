<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Preguntas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PreguntasController extends Controller
{
    protected $viewName = 'preguntasfrecuentes';

    public function index()
    {
        return view('auth.pages.'.$this->viewName.'.index');
    }

    public function listJson()
    {
        return response()->json(['data' => Preguntas::all()]);
    }

    public function partialView($id)
    {
        $entity = null;
        if($id != 0) $entity = Preguntas::find($id);
        return view('auth.pages.'.$this->viewName.'.ajax.partial_view', ['Model' => $entity, 'ViewName' => ucfirst($this->viewName)]);
    }

    public function store(Request $request)
    {
        $Result = (object)['Success' => false, 'Message' => null, 'Errors' => null];

        try {

            DB::beginTransaction();

            $Validator = Validator::make($request->all(), [
                'pregunta' => 'required',
                'respuesta' => 'required'
            ]);

            if (!$Validator->fails()){

                $entity = null;

                if($request->id != 0) $entity = Preguntas::find($request->id);

                if($entity != null){
                    $entity->update($request->all());
                }else{
                    Preguntas::create($request->all());
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
            $entity = Preguntas::find($request->id);
            if ($entity->delete()) $Result->Success = true;
        }catch (\Exception $e){
            $Result->Message = $e->getMessage();
        }

        return response()->json($Result);
    }
}
