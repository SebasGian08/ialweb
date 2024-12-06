@inject('Auth', 'Illuminate\Support\Facades\Auth')
<!-- BEGIN #sidebar -->
<div id="sidebar" class="app-sidebar" data-bs-theme="dark">
    <!-- BEGIN scrollbar -->
    <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
        <!-- BEGIN menu -->
        <div class="menu">
            <div class="menu-profile">
                <a href="" class="menu-profile-link" data-toggle="app-sidebar-profile" data-target="#appSidebarProfileMenu">
                    <div class="menu-profile-cover with-shadow"></div>
                    <div class="menu-profile-image">
                        <img src="{{ asset('auth/img/user/user-12.jpg') }}" alt="{{ $Auth::guard('admins')->user()->nombres }}" />
                    </div>
                    <div class="menu-profile-info">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">{{ $Auth::guard('admins')->user()->nombres }}</div>
                            <div class="menu-caret ms-auto"></div>
                        </div>
                        <small>Administrador</small>
                    </div>
                </a>
            </div>
            <div class="menu-header">Principal</div>
            <div class="menu-item">
                <a href="{{ route('auth.dashboard.index') }}" class="menu-link">
                    <div class="menu-icon"><i class="fa fa-dashboard"></i></div>
                    <div class="menu-text">Dashboard</div>
                </a>
            </div>
            <div class="menu-item">
                <a href="{{ route('auth.carrera.index') }}" class="menu-link">
                    <div class="menu-icon"><i class="fa fa-user-graduate"></i></div>
                    <div class="menu-text">Carreras</div>
                </a>
            </div>
            <div class="menu-item">
                <a href="{{ route('auth.curso.index') }}" class="menu-link">
                    <div class="menu-icon"><i class="fa fa-book-open"></i></div>
                    <div class="menu-text">Cursos</div>
                </a>
            </div>
            <div class="menu-header">Mantenimiento</div>
            <div class="menu-item">
                <a href="{{ route('auth.portada.index') }}" class="menu-link">
                    <div class="menu-icon"><i class="fa fa-images"></i></div>
                    <div class="menu-text">Portadas</div>
                </a>
            </div>
            <div class="menu-item">
                <a href="{{ route('auth.testimonio.index') }}" class="menu-link">
                    <div class="menu-icon"><i class="fa fa-users"></i></div>
                    <div class="menu-text">Testimonios</div>
                </a>
            </div>
            <div class="menu-item">
                <a href="{{ route('auth.alianza.index') }}" class="menu-link">
                    <div class="menu-icon"><i class="fa fa-images"></i></div>
                    <div class="menu-text">Alianzas</div>
                </a>
            </div>
            <!--<div class="menu-item">
                <a href="{{ route('auth.categorias.index') }}" class="menu-link">
                    <div class="menu-icon"><i class="fa fa-cubes"></i></div>
                    <div class="menu-text">Categorías</div>
                </a>
            </div>-->
            <div class="menu-item">
                <a href="{{ route('auth.sede.index') }}" class="menu-link">
                    <div class="menu-icon"><i class="fa fa-map-marker"></i></div>
                    <div class="menu-text">Sedes</div>
                </a>
            </div>
            <div class="menu-item">
                <a href="{{ route('auth.novedad.index') }}" class="menu-link">
                    <div class="menu-icon"><i class="fa fa-images"></i></div>
                    <div class="menu-text">Novedades</div>
                </a>
            </div>
            <div class="menu-item">
                <a href="{{ route('auth.preguntasfrecuentes.index') }}" class="menu-link">
                    <div class="menu-icon"><i class="fa fa-question"></i></div>
                    <div class="menu-text">Preguntas Frecuentes</div>
                </a>
            </div>
            <div class="menu-header">Seguridad</div>
            <div class="menu-item">
                <a href="{{ route('auth.admin.index') }}" class="menu-link">
                    <div class="menu-icon"><i class="fa fa-user"></i></div>
                    <div class="menu-text">Administrador</div>
                </a>
            </div>
            <div class="menu-header">Configuración</div>
            <div class="menu-item">
                <a href="{{ route('auth.configuracion.index') }}" class="menu-link">
                    <div class="menu-icon"><i class="fa fa-cog"></i></div>
                    <div class="menu-text">Configuración</div>
                </a>
            </div>

            <!-- BEGIN minify-button -->
            <div class="menu-item d-flex">
                <a href="javascript:;" class="app-sidebar-minify-btn ms-auto d-flex align-items-center text-decoration-none" data-toggle="app-sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
            </div>
            <!-- END minify-button -->
        </div>
        <!-- END menu -->
    </div>
    <!-- END scrollbar -->
</div>
<div class="app-sidebar-bg" data-bs-theme="dark"></div>
<div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile" class="stretched-link"></a></div>
<!-- END #sidebar -->
