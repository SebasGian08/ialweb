<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    protected $viewName = 'admin';

    public function index()
    {
        return view('auth.pages.'.$this->viewName.'.index');
    }

    public function listJson()
    {
        return response()->json(['data' => Admin::all()]);
    }

    public function partialView($id)
    {
        $entity = null;
        if($id != 0) $entity = Admin::find($id);
        return view('auth.pages.'.$this->viewName.'.ajax.partial_view', ['Model' => $entity, 'ViewName' => ucfirst($this->viewName)]);
    }

    public function store(Request $request)
    {
        $Result = (object)['Success' => false, 'Message' => null, 'Errors' => null];

        try {

            DB::beginTransaction();

            $Validator = Validator::make($request->all(), [
                'nombres' => 'required|max:150',
                'email' => 'required|email|max:150|unique:admins,email,'.($request->id != 0 ? $request->id : "NULL").',id,deleted_at,NULL',
                'password' => 'required|confirmed|min:6',
                'password_confirmation' => 'required|min:6'
            ]);

            if (!$Validator->fails()){

                $entity = null;

                if($request->id != 0) $entity = Admin::find($request->id);

                $request->merge([
                    'password' => $entity != null && $request->password == "************" ? $entity->password : Hash::make($request->password)
                ]);

                if($entity != null){
                    $entity->update($request->all());
                }else{
                    Admin::create($request->all());
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
            $entity = Admin::find($request->id);
            if ($entity->delete()) $Result->Success = true;
        }catch (\Exception $e){
            $Result->Message = $e->getMessage();
        }

        return response()->json($Result);
    }
}
