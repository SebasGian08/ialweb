@inject('Auth', 'Illuminate\Support\Facades\Auth')
<!-- BEGIN header-nav -->
<div class="navbar-nav">
    <div class="navbar-item navbar-user dropdown">
        <a href="#" class="navbar-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
            <img src="{{ asset('auth/img/user/user-12.jpg') }}" alt="{{ $Auth::guard('admins')->user()->nombres }}" />
            <span>
                <span class="d-none d-md-inline">{{ $Auth::guard('admins')->user()->nombres }}</span>
                <b class="caret"></b>
            </span>
        </a>
        <div class="dropdown-menu dropdown-menu-end me-1">
            <a href="javascript;" onclick="event.preventDefault();document.getElementById('logout-form').submit();"class="dropdown-item">{{ __('Cerrar sesión') }}</a>
            <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
</div>
<!-- END header-nav -->
