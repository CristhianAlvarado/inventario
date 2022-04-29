<header class="header">
    <div class="logo-container">
        {{-- <a href="{{route('tenant.dashboard.index')}}" class="logo pt-2 pt-md-0">

            @if($vc_company->logo)
                <img src="{{ asset('storage/uploads/logos/'.$vc_company->logo) }}" alt="Logo" />
            @else
                <img src="{{asset('logo/700x300.jpg')}}" alt="Logo" />
            @endif
        </a> --}}
        <div class="sidebar-toggle" data-toggle-class="sidebar-left-collapsed" data-target="html"
             data-fire-event="sidebar-left-toggle">
             {{-- <img src="{{ asset('images/disc.svg') }}" alt="Sidebar toggle" class="img-fluid" width="20"> --}}
             <i class="fas fa-bars" style="color: #777;" aria-label="Toggle sidebar"></i>
        </div>
        <div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>
    <div class="header-right">

        {{-- <ul class="notifications">
            <li>
                <a href="{{ route('settings.change_mode') }}" class="notification-icon text-secondary" data-toggle="tooltip" data-placement="bottom" title="Modo noche">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
                </a>
            </li>
        </ul> --}}
        <periodo-component></periodo-component>
        <span class="separator"></span>
        <ul class="notifications">
            <li>
                <a href="{{ route('empresas.home') }}"  data-placement="bottom" title="Empresas" style="color:#777">
                    <i class="far fa-building"></i>
                </a>
            </li>
        </ul>

        <span class="separator"></span>

        <div id="userbox" class="userbox">
            <a href="#" data-toggle="dropdown">
                <div class="profile-info" data-lock-name="{{ Auth::user()->email }}" data-lock-email="{{ Auth::user()->email }}">
                    <span class="name">{{ Auth::user()->name }}</span>
                    <span class="role">{{ Auth::user()->email }}</span>
                </div>
                <figure class="profile-picture">
                    {{-- <img src="{{asset('img/%21logged-user.jpg')}}" alt="Profile" class="rounded-circle" data-lock-picture="img/%21logged-user.jpg" /> --}}
                    <div class="border rounded-circle text-center" style="width: 25px; color: #ccc;"><i class="fas fa-user"></i></div>
                </figure>
                {{-- <i class="fa custom-caret"></i> --}}
            </a>
            <div class="dropdown-menu">
                    <li>
                        {{--<a role="menuitem" href="#"><i class="fas fa-user"></i> Perfil</a>--}}
                        <a role="menuitem" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-power-off"></i> Cerrar Sesion
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
