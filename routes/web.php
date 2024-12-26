<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main;
use App\Http\Controllers\Auth;
use App\Http\Controllers\ImagenController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/pwd', function(){
    File::link(
        storage_path('app/public'), public_path('../../storage')
    );
});

Route::get('/img/{path}', [ImagenController::class, 'show'])->where('path', '.*')->name('image');

Route::get('/', [Main\HomeController::class, 'index'])->name('index');
Route::get('sobre-nosotros', [Main\HomeController::class, 'nosotros'])->name('nosotros');
Route::get('carrera/{slug}', [Main\HomeController::class, 'carrera'])->name('carrera');
Route::get('curso/{slug}', [Main\HomeController::class, 'curso'])->name('curso');
Route::get('cursos/{slug?}', [Main\HomeController::class, 'cursos'])->name('cursos');
Route::get('idioma/{slug}', [Main\HomeController::class, 'idioma'])->name('idioma');
//Route::get('idiomas', [Main\HomeController::class, 'idiomas'])->name('idiomas');

Route::get('admision', [Main\HomeController::class, 'admision'])->name('admision');
Route::get('blog', [Main\HomeController::class, 'blog'])->name('blog');
Route::get('blog/{slug}', [Main\HomeController::class, 'blog_detalle'])->name('blog_detalle');
Route::get('contacto', [Main\HomeController::class, 'contacto'])->name('contacto');
Route::get('reingreso', [Main\HomeController::class, 'reingreso'])->name('reingreso');
Route::get('traslado', [Main\HomeController::class, 'traslado'])->name('traslado');
Route::get('librodereclamaciones', [Main\HomeController::class, 'librodereclamaciones'])->name('librodereclamaciones');
Route::get('transparencia', [Main\HomeController::class, 'transparencia'])->name('transparencia');
//Route::get('sobre-nosotros', [Main\HomeController::class, 'index'])->name('index');

/* PARA GUARDAR API EN CRM VENTAS */
Route::post('/registrar', [Main\HomeController::class, 'registrar'])->name('registrar');
Route::post('/registraridiomas', [Main\HomeController::class, 'registraridiomas'])->name('registraridiomas');
/*Route::get('/auth/admin', [\App\Http\Controllers\Auth\AdminController::class, 'index']);
Route::get('/auth/admin/list-json', [\App\Http\Controllers\Auth\AdminController::class, 'listJson']);
Route::get('/auth/admin/partial-view/{id}', [\App\Http\Controllers\Auth\AdminController::class, 'partialView']);
Route::post('/auth/admin/delete', [\App\Http\Controllers\Auth\AdminController::class, 'delete']);
*/

Route::prefix('auth')->group(function () {
    Route::name('auth.')->group(function () {

        Route::group(['middleware' => 'auth:admins'], function() {

            Route::get('dashboard', [Auth\DashboardController::class, 'index'])->name('dashboard.index');

            Route::prefix('alianza')->group(function () {
                Route::name('alianza.')->group(function () {
                    Route::get('/', [Auth\AlianzaController::class, 'index'])->name('index');
                    Route::get('list-json', [Auth\AlianzaController::class, 'listJson'])->name('listJson');
                    Route::get('partial-view/{id}', [Auth\AlianzaController::class, 'partialView'])->name('partialView');
                    Route::post('store', [Auth\AlianzaController::class, 'store'])->name('store');
                    Route::post('delete', [Auth\AlianzaController::class, 'delete'])->name('delete');
                });
            });

            Route::prefix('portada')->group(function () {
                Route::name('portada.')->group(function () {
                    Route::get('/', [Auth\PortadaController::class, 'index'])->name('index');
                    Route::get('list-json', [Auth\PortadaController::class, 'listJson'])->name('listJson');
                    Route::get('partial-view/{id}', [Auth\PortadaController::class, 'partialView'])->name('partialView');
                    Route::post('store', [Auth\PortadaController::class, 'store'])->name('store');
                    Route::post('delete', [Auth\PortadaController::class, 'delete'])->name('delete');
                });
            });

            Route::prefix('categorias')->group(function () {
                Route::name('categorias.')->group(function () {
                    Route::get('/', [Auth\CategoriaController::class, 'index'])->name('index');
                    Route::get('list-json', [Auth\CategoriaController::class, 'listJson'])->name('listJson');
                    Route::get('partial-view/{id}', [Auth\CategoriaController::class, 'partialView'])->name('partialView');
                    Route::post('store', [Auth\CategoriaController::class, 'store'])->name('store');
                    Route::post('delete', [Auth\CategoriaController::class, 'delete'])->name('delete');
                });
            });

            Route::prefix('testimonio')->group(function () {
                Route::name('testimonio.')->group(function () {
                    Route::get('/', [Auth\TestimonioController::class, 'index'])->name('index');
                    Route::get('list-json', [Auth\TestimonioController::class, 'listJson'])->name('listJson');
                    Route::get('partial-view/{id}', [Auth\TestimonioController::class, 'partialView'])->name('partialView');
                    Route::post('store', [Auth\TestimonioController::class, 'store'])->name('store');
                    Route::post('delete', [Auth\TestimonioController::class, 'delete'])->name('delete');
                });
            });

            Route::prefix('novedad')->group(function () {
                Route::name('novedad.')->group(function () {
                    Route::get('/', [Auth\NovedadController::class, 'index'])->name('index');
                    Route::get('list-json', [Auth\NovedadController::class, 'listJson'])->name('listJson');
                    Route::get('partial-view/{id}', [Auth\NovedadController::class, 'partialView'])->name('partialView');
                    Route::post('store', [Auth\NovedadController::class, 'store'])->name('store');
                    Route::post('delete', [Auth\NovedadController::class, 'delete'])->name('delete');
                    // Nueva ruta para registrar satisfacción
                    Route::post('registrar-satisfaccion', [Auth\NovedadController::class, 'registrarSatisfaccion'])->name('registrarSatisfaccion');
                });
            });

            Route::prefix('carrera')->group(function () {
                Route::name('carrera.')->group(function () {
                    Route::get('/', [Auth\CarreraController::class, 'index'])->name('index');
                    Route::get('list-json', [Auth\CarreraController::class, 'listJson'])->name('listJson');
                    Route::get('partial-view/{id}', [Auth\CarreraController::class, 'partialView'])->name('partialView');
                    Route::post('store', [Auth\CarreraController::class, 'store'])->name('store');
                    Route::post('delete', [Auth\CarreraController::class, 'delete'])->name('delete');

                    Route::get('partial-view-list-ability/{id}', [Auth\CarreraController::class, 'partialViewListAbility'])->name('partialViewListAbility');
                    Route::get('partial-view-list-json-ability', [Auth\CarreraController::class, 'partialViewListJsonAbility'])->name('partialViewListJsonAbility');
                    Route::get('partial-view-ability/{id}/{carrera}', [Auth\CarreraController::class, 'partialViewAbility'])->name('partialViewAbility');
                    Route::post('store-ability', [Auth\CarreraController::class, 'storeAbility'])->name('storeAbility');
                    Route::post('delete-ability', [Auth\CarreraController::class, 'deleteAbility'])->name('deleteAbility');

                    Route::get('partial-view-list-gift/{id}', [Auth\CarreraController::class, 'partialViewListGift'])->name('partialViewListGift');
                    Route::get('partial-view-list-json-gift', [Auth\CarreraController::class, 'partialViewListJsonGift'])->name('partialViewListJsonGift');
                    Route::get('partial-view-gift/{id}/{carrera}', [Auth\CarreraController::class, 'partialViewGift'])->name('partialViewGift');
                    Route::post('store-gift', [Auth\CarreraController::class, 'storeGift'])->name('storeGift');
                    Route::post('delete-gift', [Auth\CarreraController::class, 'deleteGift'])->name('deleteGift');

                    Route::get('partial-view-list-malla/{id}', [Auth\CarreraController::class, 'partialViewListMalla'])->name('partialViewListMalla');
                    Route::get('partial-view-list-json-malla', [Auth\CarreraController::class, 'partialViewListJsonMalla'])->name('partialViewListJsonMalla');
                    Route::get('partial-view-malla/{id}/{carrera}', [Auth\CarreraController::class, 'partialViewMalla'])->name('partialViewMalla');
                    Route::post('store-malla', [Auth\CarreraController::class, 'storeMalla'])->name('storeMalla');
                    Route::post('gift-malla', [Auth\CarreraController::class, 'deleteMalla'])->name('deleteMalla');
                });
            });

            Route::prefix('curso')->group(function () {
                Route::name('curso.')->group(function () {
                    Route::get('/', [Auth\CursoController::class, 'index'])->name('index');
                    Route::get('list-json', [Auth\CursoController::class, 'listJson'])->name('listJson');
                    Route::get('partial-view/{id}', [Auth\CursoController::class, 'partialView'])->name('partialView');
                    Route::post('store', [Auth\CursoController::class, 'store'])->name('store');
                    Route::post('delete', [Auth\CursoController::class, 'delete'])->name('delete');

                    Route::get('partial-view-list-gift/{id}', [Auth\CursoController::class, 'partialViewListGift'])->name('partialViewListGift');
                    Route::get('partial-view-list-json-gift', [Auth\CursoController::class, 'partialViewListJsonGift'])->name('partialViewListJsonGift');
                    Route::get('partial-view-gift/{id}/{carrera}', [Auth\CursoController::class, 'partialViewGift'])->name('partialViewGift');
                    Route::post('store-gift', [Auth\CursoController::class, 'storeGift'])->name('storeGift');
                    Route::post('delete-gift', [Auth\CursoController::class, 'deleteGift'])->name('deleteGift');
                });
            });

            Route::prefix('sede')->group(function () {
                Route::name('sede.')->group(function () {
                    Route::get('/', [Auth\SedeController::class, 'index'])->name('index');
                    Route::get('list-json', [Auth\SedeController::class, 'listJson'])->name('listJson');
                    Route::get('partial-view/{id}', [Auth\SedeController::class, 'partialView'])->name('partialView');
                    Route::post('store', [Auth\SedeController::class, 'store'])->name('store');
                    Route::post('delete', [Auth\SedeController::class, 'delete'])->name('delete');
                });
            });
            Route::prefix('preguntasfrecuentes')->group(function () {
                Route::name('preguntasfrecuentes.')->group(function () {
                    Route::get('/', [Auth\PreguntasController::class, 'index'])->name('index');
                    Route::get('list-json', [Auth\PreguntasController::class, 'listJson'])->name('listJson');
                    Route::get('partial-view/{id}', [Auth\PreguntasController::class, 'partialView'])->name('partialView');
                    Route::post('store', [Auth\PreguntasController::class, 'store'])->name('store');
                    Route::post('delete', [Auth\PreguntasController::class, 'delete'])->name('delete');
                });
            });

            Route::prefix('admin')->group(function () {
                Route::name('admin.')->group(function () {
                    Route::get('/', [Auth\AdminController::class, 'index'])->name('index');
                    Route::get('list-json', [Auth\AdminController::class, 'listJson'])->name('listJson');
                    Route::get('partial-view/{id}', [Auth\AdminController::class, 'partialView'])->name('partialView');
                    Route::post('store', [Auth\AdminController::class, 'store'])->name('store');
                    Route::post('delete', [Auth\AdminController::class, 'delete'])->name('delete');
                });
            });

            Route::prefix('configuracion')->group(function () {
                Route::name('configuracion.')->group(function () {
                    Route::get('/', [Auth\ConfiguracionController::class, 'index'])->name('index');
                    Route::post('store', [Auth\ConfiguracionController::class, 'store'])->name('store');
                });
            });

            Route::prefix('librodereclamaciones')->group(function () {
                Route::name('librodereclamaciones.')->group(function () {
                    Route::get('/', [Auth\ReclamacionesController::class, 'index'])->name('index');
                    /* Route::get('list-json', [Auth\ReclamacionesController::class, 'listJson'])->name('listJson');
                    Route::get('partial-view/{id}', [Auth\ReclamacionesController::class, 'partialView'])->name('partialView');
                    Route::post('store', [Auth\ReclamacionesController::class, 'store'])->name('store');
                    Route::post('delete', [Auth\ReclamacionesController::class, 'delete'])->name('delete'); */
                });
            });
           

        });

        Route::get('login', [Auth\LoginController::class, 'showLoginForm'])->name('login');
        Route::post('login', [Auth\LoginController::class, 'login'])->name('login.post');

        Route::post('logout', [Auth\LoginController::class, 'logout'])->name('logout');
    });
});
