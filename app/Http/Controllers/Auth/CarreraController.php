<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Carrera;
use App\Models\CarreraBeneficio;
use App\Models\CarreraHabilidad;
use App\Models\MallaCurricular;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CarreraController extends Controller
{
    protected $viewName = 'carrera';

    public function index()
    {
        return view('auth.pages.'.$this->viewName.'.index');
    }

    public function listJson()
    {
        return response()->json(['data' => Carrera::all()]);
    }

    public function partialView($id)
    {
        $entity = null;
        if($id != 0) $entity = Carrera::find($id);
        return view('auth.pages.'.$this->viewName.'.ajax.partial_view', ['Model' => $entity, 'ViewName' => ucfirst($this->viewName)]);
    }

    public function store(Request $request)
    {
        $Result = (object)['Success' => false, 'Message' => null, 'Errors' => null];

        try {

            DB::beginTransaction();

            $Validator = Validator::make($request->all(), [
                'nombre' => 'required|max:150'
            ]);

            if (!$Validator->fails()){

                $entity = null;

                if($request->id != 0) $entity = Carrera::find($request->id);

                $imagen_path = null;
                if($request->file('imagen')) $imagen_path = $request->imagen->store('public/uploads/images/carreras');

                $portada_path = null;
                if($request->file('portada')) $portada_path = $request->portada->store('public/uploads/images/carreras');

                $imagen_habilidad_path = null;
                if($request->file('imagen_habilidad')) $imagen_habilidad_path = $request->imagen_habilidad->store('public/uploads/images/carreras');

                $brochure_path = null;
                if($request->file('brochure')) $brochure_path = $request->brochure->store('public/uploads/images/carreras');

                $request->merge([
                    'slug' => Str::slug($request->nombre),
                    'imagen_path' => $imagen_path != null ? $imagen_path : $request->imagen_path,
                    'portada_path' => $portada_path != null ? $portada_path : $request->portada_path,
                    'imagen_habilidad_path' => $imagen_habilidad_path != null ? $imagen_habilidad_path : $request->imagen_habilidad_path,
                    'brochure_path' => $brochure_path != null ? $brochure_path : $request->brochure_path,
                    'oportunidades_profesionales' => $request->oportunidades_profesionales != null ? json_encode($request->oportunidades_profesionales) : null,
                    'perfil_egresado' => $request->perfil_egresado != null ? json_encode($request->perfil_egresado) : null,
                    'certificaciones' => $request->certificaciones != null ? json_encode($request->certificaciones) : null,
                    'turno' => $request->turno != null ? json_encode($request->turno) : null,
                    'modalidad' => $request->modalidad != null ? json_encode($request->modalidad) : null
                ]);

                if($entity != null){
                    $entity->update($request->all());
                }else{
                    Carrera::create($request->all());
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
            $entity = Carrera::find($request->id);
            if ($entity->delete()) $Result->Success = true;
        }catch (\Exception $e){
            $Result->Message = $e->getMessage();
        }

        return response()->json($Result);
    }

    public function partialViewListAbility($id)
    {
        return view('auth.pages.'.$this->viewName.'.ajax.habilidad.list', [
            'ViewName' => ucfirst('habilidad'),
            'Id' => $id
        ]);
    }
    public function partialViewListJsonAbility(Request $request)
    {
        $list = CarreraHabilidad::where('carrera_id', $request->id)->get();
        return response()->json(['data' => $list]);
    }
    public function partialViewAbility($id, $carrera)
    {
        $entity = null;
        if($id != 0) $entity = CarreraHabilidad::find($id);
        return view('auth.pages.'.$this->viewName.'.ajax.habilidad.partial_view', ['Model' => $entity, 'Carrera' => $carrera, 'ViewName' => ucfirst('habilidad')]);
    }
    public function storeAbility(Request $request)
    {
        $Result = (object)['Success' => false, 'Message' => null, 'Errors' => null];

        try {

            DB::beginTransaction();

            $Validator = Validator::make($request->all(), [
                'nombre' => 'required|max:150',
                'descripcion' => 'required|max:500'
            ]);

            if (!$Validator->fails()){

                $entity = null;

                if($request->id != 0) $entity = CarreraHabilidad::find($request->id);

                $imagen_path = null;
                if($request->file('imagen')) $imagen_path = $request->imagen->store('public/uploads/images/carreras');

                $request->merge([
                    'imagen_path' => $imagen_path != null ? $imagen_path : $request->imagen_path
                ]);

                if($entity != null){
                    $entity->update($request->all());
                }else{
                    CarreraHabilidad::create($request->all());
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
    public function deleteAbility(Request $request)
    {
        $Result = (object)['Success' => false, 'Message' => null];

        try {
            $entity = CarreraHabilidad::find($request->id);
            if ($entity->delete()) $Result->Success = true;
        }catch (\Exception $e){
            $Result->Message = $e->getMessage();
        }

        return response()->json($Result);
    }


    public function partialViewListGift($id)
    {
        return view('auth.pages.'.$this->viewName.'.ajax.beneficio.list', [
            'ViewName' => ucfirst('beneficio'),
            'Id' => $id
        ]);
    }
    public function partialViewListJsonGift(Request $request)
    {
        $list = CarreraBeneficio::where('carrera_id', $request->id)->get();
        return response()->json(['data' => $list]);
    }
    public function partialViewGift($id, $carrera)
    {
        $entity = null;
        if($id != 0) $entity = CarreraBeneficio::find($id);
        return view('auth.pages.'.$this->viewName.'.ajax.beneficio.partial_view', ['Model' => $entity, 'Carrera' => $carrera, 'ViewName' => ucfirst('beneficio')]);
    }
    public function storeGift(Request $request)
    {
        $Result = (object)['Success' => false, 'Message' => null, 'Errors' => null];

        try {

            DB::beginTransaction();

            $Validator = Validator::make($request->all(), [
                'nombre' => 'required|max:150',
                'descripcion' => 'required|max:500'
            ]);

            if (!$Validator->fails()){

                $entity = null;

                if($request->id != 0) $entity = CarreraBeneficio::find($request->id);

                $imagen_path = null;
                if($request->file('imagen')) $imagen_path = $request->imagen->store('public/uploads/images/carreras');

                $request->merge([
                    'imagen_path' => $imagen_path != null ? $imagen_path : $request->imagen_path
                ]);

                if($entity != null){
                    $entity->update($request->all());
                }else{
                    CarreraBeneficio::create($request->all());
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
    public function deleteGift(Request $request)
    {
        $Result = (object)['Success' => false, 'Message' => null];

        try {
            $entity = CarreraBeneficio::find($request->id);
            if ($entity->delete()) $Result->Success = true;
        }catch (\Exception $e){
            $Result->Message = $e->getMessage();
        }

        return response()->json($Result);
    }


    public function partialViewListMalla($id)
    {
        return view('auth.pages.'.$this->viewName.'.ajax.malla.list', [
            'ViewName' => ucfirst('malla'),
            'Id' => $id
        ]);
    }
    public function partialViewListJsonMalla(Request $request)
    {
        $list = MallaCurricular::where('carrera_id', $request->id)->get();
        return response()->json(['data' => $list]);
    }
    public function partialViewMalla($id, $carrera)
    {
        $entity = null;
        if($id != 0) $entity = MallaCurricular::find($id);
        return view('auth.pages.'.$this->viewName.'.ajax.malla.partial_view', ['Model' => $entity, 'Carrera' => $carrera, 'ViewName' => ucfirst($this->viewName)]);
    }
    public function storeMalla(Request $request)
    {
        $Result = (object)['Success' => false, 'Message' => null, 'Errors' => null];

        try {

            DB::beginTransaction();

            $Validator = Validator::make($request->all(), [
                'nombre' => 'required|max:150',
            ]);

            if (!$Validator->fails()){

                $entity = null;

                if($request->id != 0) $entity = MallaCurricular::find($request->id);

                $imagen_path = null;
                if($request->file('imagen')) $imagen_path = $request->imagen->store('public/uploads/images/carreras');

                $request->merge([
                    'imagen_path' => $imagen_path != null ? $imagen_path : $request->imagen_path,
                    'descripcion' => $request->descripciones != null ? json_encode($request->descripciones) : null
                ]);

                if($entity != null){
                    $entity->update($request->all());
                }else{
                    MallaCurricular::create($request->all());
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
    public function deleteMalla(Request $request)
    {
        $Result = (object)['Success' => false, 'Message' => null];

        try {
            $entity = MallaCurricular::find($request->id);
            if ($entity->delete()) $Result->Success = true;
        }catch (\Exception $e){
            $Result->Message = $e->getMessage();
        }

        return response()->json($Result);
    }
}
