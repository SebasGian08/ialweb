<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Alianza;
use App\Models\Carrera;
use App\Models\Preguntas;
use App\Models\Curso;
use App\Models\MallaCurricular;
use App\Models\Novedad;
use App\Models\Portada;
use App\Models\Sede;
use App\Models\Testimonio;
use App\Models\Interesado;
use App\Models\Reclamaciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; // Asegúrate de agregar esta línea

class HomeController extends Controller
{
    public function index(){
        return view('main.pages.index', [

            'Portadas' => Portada::all(),
            'Carreras' => Carrera::all(),
            'Alianzas' => Alianza::all(),
            'Testimonios' => Testimonio::all(),
            'Novedades' => Novedad::all(),
            'Sedes' => Sede::orderBy('nombre', 'asc')->get(),
        ]);
    }
    public function nosotros(){
        return view('main.pages.nosotros');
    }
    public function carrera($slug){
        $Model = Carrera::where('slug', $slug)->first();
        if($Model == null) return redirect(route('index'));
        return view('main.pages.carrera', [
            'Model' => $Model,
            'MallaCurricular' => MallaCurricular::where('carrera_id', $Model->id)->orderBy('nombre', 'asc')->get(),
            'Sedes' => Sede::orderBy('nombre', 'asc')->get(),
            'Alianzas' => Alianza::all()]);
    }

    /* public function cursos($slug = null){
        $tipo = null;
        switch ($slug){
            case 'virtuales': $tipo = 'Virtual';break;
            case 'presenciales': $tipo = 'Presencial';break;
            case 'semipresenciales': $tipo = 'SemiPresencial';break;
        }
        if($slug != null && $tipo == null) return redirect(route('index'));
        return view('main.pages.cursos', [
            'Cursos' => $slug != null ? Curso::orderBy('nombre', 'asc')->get()->filter(function ($q) use($tipo) {
                return in_array($tipo, $q->modalidad);
            }) : Curso::orderBy('nombre', 'asc')->get(),
            'Modalidad' => $slug ? ucfirst($slug) : 'Presencial', // Valor por defecto
            'Modalidades' => ['Virtuales', 'Presenciales', 'Semipresenciales'],
            'Sedes' => Sede::orderBy('nombre', 'asc')->get(),
            'Alianzas' => Alianza::all()]);
    } */

    public function idiomas(){
        return view('main.pages.idiomas', [
            'Sedes' => Sede::orderBy('nombre', 'asc')->get(),
            'Alianzas' => Alianza::all()]);
    }
    public function idioma($slug){
        if($slug == null && (!in_array($slug, ['ingles', 'frances']))) return redirect(route('index'));
        return view('main.pages.idioma', [
            'Idioma' => $slug == 'ingles' ? 'Inglés' : ($slug == 'frances' ? 'Francés' : ucfirst($slug)),
            'Sedes' => Sede::orderBy('nombre', 'asc')->get(),
            'Alianzas' => Alianza::all()]);
    }

    public function admision(){
        return view('main.pages.admision', [
            'Sedes' => Sede::orderBy('nombre', 'asc')->get(),
            'Alianzas' => Alianza::all(),
            'Carrera' => Carrera::all()
        ]);
    }
    public function blog(Request $request){

        $novedades = Novedad::where(function($q) use ($request){
            if($request->q) $q->where('nombre', 'like', '%'.$request->q.'%');
        })->orderBy('id', 'desc')->get();

        return view('main.pages.blog', [
            'Q' => $request->q,
            'Search' => $request->q != null,
            'All' => $novedades,
            'Blog' => Novedad::where('categoria', 'blog')->orderBy('id', 'desc')->first(),
            'Noticia' => Novedad::where('categoria', 'noticia')->orderBy('id', 'desc')->first(),
            'Evento' => Novedad::where('categoria', 'evento')->orderBy('id', 'desc')->first(),
            'Novedades' => Novedad::orderBy('id', 'desc')->get()
        ]);
    }
    public function blog_detalle($slug){
        $Model = Novedad::where('slug', $slug)->first();
        if($Model == null) return redirect(route('index'));
        $Model->vista = $Model->vista + 1;
        $Model->save();
        return view('main.pages.blog_detalle', [
            'Model' => $Model,
            'Novedades' => Novedad::where('id', '!=', $Model->id)->orderBy('fecha', 'desc')->get(),
        ]);
    }
    public function contacto(){
        return view('main.pages.contacto', [
            'Curso' => Curso::all()
        ]);
    }

    public function reingreso(){
        return view('main.pages.reingreso', [
            'Sedes' => Sede::orderBy('nombre', 'asc')->get(),
            'Alianzas' => Alianza::all(),
            'Preguntas' => Preguntas::all()
        ]);
    }

    public function traslado(){
        return view('main.pages.traslado', [
            'Preguntas' => Preguntas::all()
        ]);
    }

    public function cursos($slug = null) {
        $validSlugs = [
            'programas' => 'Programas',       
            'cursos' => 'Cursos',      
            'talleres' => 'Talleres' 
        ];
    
        $tipo = $validSlugs[$slug] ?? null;
    
        if($slug != null && $tipo == null) return redirect(route('index'));
    
        // Obtener cursos con la modalidad asociada
        $cursos = Curso::when($tipo, function($query) use ($tipo) {
            return $query->where('categoria', 'LIKE', '%' . $tipo . '%');
        })->orderBy('nombre', 'asc')->get();
    
        return view('main.pages.cursos', [
            'Cursos' => $cursos,
            'Categoria' => $tipo ?? null,
            'Modalidades' => ['Programas', 'Cursos', 'Talleres'],
            'Sedes' => Sede::orderBy('nombre', 'asc')->get(),
            'Alianzas' => Alianza::all()
        ]);
    }
    

    public function curso($slug){
        $Model = Curso::where('slug', $slug)->first();
        // Decodificar el JSON si no está siendo casteado automáticamente
        if (is_string($Model->galeria_path)) {
            $Model->galeria_path = json_decode($Model->galeria_path, true);  // Convierte la cadena JSON a un array
        }
        
        // Si el curso no existe, redirige a la página principal
        if ($Model == null) {
            return redirect(route('index'));
        }
    
        // Pasar los datos del curso, las sedes y alianzas a la vista
        return view('main.pages.curso', [
            'Model' => $Model,
            'Sedes' => Sede::orderBy('nombre', 'asc')->get(),
            'Alianzas' => Alianza::all()
        ]);
    }

    public function librodereclamaciones(){
        return view('main.pages.librodereclamaciones', [
            'Sedes' => Sede::orderBy('nombre', 'asc')->get(),
            'Carreras' => Carrera::all(),
            'Curso' => Curso::all()
        ]);
    }

    public function transparencia(){
        return view('main.pages.transparencia');
    }

    /* API NO TOCAR */
    public function registrar(Request $request)
    {
        // Valida los datos recibidos
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'ape' => 'required|string|max:255',
            'dni' => 'required|string|max:20',
            'tel' => 'required|string|max:15',
            'maix' => 'required|email|max:255',
            'pro' => 'required|integer',
            'dis' => 'required|integer',
            'mod' => 'required|integer',
            'carrera_id' => 'required|integer',
        ]);

        // Mapear IDs adicionales
        $fuente_id = 7; // Default para "Web"
        $enterado_id = 2;

        // Preparar los datos para la API
        $fields = [
            'nombres' => $validatedData['nom'],
            'apellidos' => $validatedData['ape'],
            'dni' => $validatedData['dni'],
            'celular' => $validatedData['tel'],
            'email' => $validatedData['maix'],
            'provincia_id' => $validatedData['pro'],
            'distrito_id' => $validatedData['dis'],
            'modalidad_id' => $validatedData['mod'],
            'carrera_id' => $request->carrera_id, // ID de curso seleccionado
            'fuente_id' => $fuente_id,
            'enterado_id' => $enterado_id,
            'provincia' => '0'
        ];

        // Realizar la petición a la API
        $url = "https://easycrm.ial.edu.pe/api/cliente/create";
        $token = "ZupWuQUrw2vYcH8fzCczPHc5QlTxsK7dB9IhPW42fPRC99i0yIV3iBBtDNGz9T5ECMzN2vCnWSzVKHXTo0Ee3qquxVj52MpbhRLO";

        try {
            // Guardar en la base de datos local
            Interesado::create([
                'nom' => $validatedData['nom'],
                'ape' => $validatedData['ape'],
                'dni' => $validatedData['dni'],
                'tel' => $validatedData['tel'],
                'email' => $validatedData['maix'],
                'provincia_od' => $validatedData['pro'],
                'distrito_id' => $validatedData['dis'],
                'modalidad_id' => $validatedData['mod'],
                'carrera_id' => $request->carrera_id,
                'fuente_id' => $fuente_id,
            ]);

            // Realizar la solicitud a la API
            $response = Http::withToken($token)->post($url, $fields);

            if ($response->successful()) {
                return redirect()->back()->with('success', 'Registro exitoso.');
            } else {
                return redirect()->back()->with('error', 'Error al registrar en la API. Intenta nuevamente.');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ocurrió un problema: ' . $e->getMessage());
        }
    }


    public function registraridiomas(Request $request)
    {
        // Valida los datos recibidos
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'ape' => 'required|string|max:255',
            'dni' => 'required|string|max:20',
            'tel' => 'required|string|max:15',
            'maix' => 'required|email|max:255',
            'pro' => 'required|integer',
            'dis' => 'required|integer',
            'mod' => 'required|integer',
            'carrera_id' => 'required|integer',
        ]);

        // Mapear IDs adicionales
        $fuente_id = 7; // Default para "Web"
        $enterado_id = 2;

        // Preparar los datos para la API
        $fields = [
            'nombres' => $validatedData['nom'],
            'apellidos' => $validatedData['ape'],
            'dni' => $validatedData['dni'],
            'celular' => $validatedData['tel'],
            'email' => $validatedData['maix'],
            'provincia_id' => $validatedData['pro'],
            'distrito_id' => $validatedData['dis'],
            'modalidad_id' => $validatedData['mod'],
            'carrera_id' => $request->carrera_id, // ID de curso seleccionado
            'fuente_id' => $fuente_id,
            'enterado_id' => $enterado_id,
            'provincia' => '0'
        ];

        // Realizar la petición a la API
        $url = "https://idiomas.ial.edu.pe/api/cliente/create";
        $token = "ZupWuQUrw2vYcH8fzCczPHc5QlTxsK7dB9IhPW42fPRC99i0yIV3iBBtDNGz9T5ECMzN2vCnWSzVKHXTo0Ee3qquxVj52MpbhRLO";

        try {
            // Guardar en la base de datos local
            Interesado::create([
                'nom' => $validatedData['nom'],
                'ape' => $validatedData['ape'],
                'dni' => $validatedData['dni'],
                'tel' => $validatedData['tel'],
                'email' => $validatedData['maix'],
                'provincia_od' => $validatedData['pro'],
                'distrito_id' => $validatedData['dis'],
                'modalidad_id' => $validatedData['mod'],
                'carrera_id' => $request->carrera_id,
                'fuente_id' => $fuente_id,
            ]);

            // Realizar la solicitud a la API
            $response = Http::withToken($token)->post($url, $fields);

            if ($response->successful()) {
                return redirect()->back()->with('success', 'Registro exitoso.');
            } else {
                return redirect()->back()->with('error', 'Error al registrar en la API. Intenta nuevamente.');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ocurrió un problema: ' . $e->getMessage());
        }
    }

    /* public function registrar(Request $request)
    {
        dd($request->all());
    } */

}