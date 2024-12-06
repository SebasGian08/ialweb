<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use App\Models\CursoBeneficio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CursoController extends Controller
{
    protected $viewName = 'curso';

    public function index()
    {
        return view('auth.pages.'.$this->viewName.'.index');
    }

    public function listJson()
    {
        return response()->json(['data' => Curso::all()]);
    }

    public function partialView($id)
    {
        $entity = null;
        if($id != 0) $entity = Curso::find($id);
        $imagenes = $entity != null ? implode(', ', array_map(fn($item) => $item, $entity->galeria)) : "";
        return view('auth.pages.'.$this->viewName.'.ajax.partial_view', ['Model' => $entity, 'ViewName' => ucfirst($this->viewName), 'Imagenes' => $imagenes]);
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

                if($request->id != 0) $entity = Curso::find($request->id);

                $imagen_path = null;
                if($request->file('imagen')) $imagen_path = $request->imagen->store('public/uploads/images/cursos');

                $portada_path = null;
                if($request->file('portada')) $portada_path = $request->portada->store('public/uploads/images/cursos');

                $brochure_path = null;
                if($request->file('brochure')) $brochure_path = $request->brochure->store('public/uploads/images/cursos');

                $imagenes = $request->file('galerias');

                $galerias = [];
                if($imagenes){
                    foreach ($imagenes as $galery){
                        $galerias[] = $galery->store('public/uploads/images/cursos');
                    }
                }

                $request->merge([
                    'slug' => Str::slug($request->nombre),
                    'imagen_path' => $imagen_path != null ? $imagen_path : $request->imagen_path,
                    'portada_path' => $portada_path != null ? $portada_path : $request->portada_path,
                    'brochure_path' => $brochure_path != null ? $brochure_path : $request->brochure_path,
                    'turno' => $request->turno != null ? json_encode($request->turno) : null,
                    'modalidad' => $request->modalidad != null ? json_encode($request->modalidad) : null,
                    'categoria' => $request->categoria != null ? json_encode($request->categoria) : null,
                    'galeria_path' => $galerias != null && count($galerias) > 0 ? json_encode($galerias) : $entity->galeria_path
                ]);

                if($entity != null){
                    $entity->update($request->all());
                }else{
                    Curso::create($request->all());
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
            $entity = Curso::find($request->id);
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
        $list = CursoBeneficio::where('curso_id', $request->id)->get();
        return response()->json(['data' => $list]);
    }
    public function partialViewGift($id, $curso)
    {
        $entity = null;
        if($id != 0) $entity = CursoBeneficio::find($id);
        return view('auth.pages.'.$this->viewName.'.ajax.beneficio.partial_view', ['Model' => $entity, 'Curso' => $curso, 'ViewName' => ucfirst('beneficio')]);
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

                if($request->id != 0) $entity = CursoBeneficio::find($request->id);

                $imagen_path = null;
                if($request->file('imagen')) $imagen_path = $request->imagen->store('public/uploads/images/cursos');

                $request->merge([
                    'imagen_path' => $imagen_path != null ? $imagen_path : $request->imagen_path
                ]);

                if($entity != null){
                    $entity->update($request->all());
                }else{
                    CursoBeneficio::create($request->all());
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
            $entity = CursoBeneficio::find($request->id);
            if ($entity->delete()) $Result->Success = true;
        }catch (\Exception $e){
            $Result->Message = $e->getMessage();
        }

        return response()->json($Result);
    }
}
