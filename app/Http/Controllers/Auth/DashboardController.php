<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Carrera; // Suponiendo que tienes un modelo de Carrera
use App\Models\Curso;   // Suponiendo que tienes un modelo de Curso
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // Obtener las fechas de inicio y fin del filtro
        $fecha_inicio = $request->input('fecha_inicio');
        $fecha_fin = $request->input('fecha_fin');

        // Consultar las carreras aplicando el filtro por fecha de creación si existe
        $carreras = Carrera::query()
            ->when($fecha_inicio, function($query) use ($fecha_inicio) {
                return $query->where('created_at', '>=', $fecha_inicio . ' 00:00:00');
            })
            ->when($fecha_fin, function($query) use ($fecha_fin) {
                return $query->where('created_at', '<=', $fecha_fin . ' 23:59:59');
            })
            ->get();

        // Consultar los cursos aplicando el filtro por fecha de creación si existe
        $cursos = Curso::query()
            ->when($fecha_inicio, function($query) use ($fecha_inicio) {
                return $query->where('created_at', '>=', $fecha_inicio . ' 00:00:00');
            })
            ->when($fecha_fin, function($query) use ($fecha_fin) {
                return $query->where('created_at', '<=', $fecha_fin . ' 23:59:59');
            })
            ->get();

        return view('auth.pages.dashboard.index', compact('carreras', 'cursos'));
    }

}
