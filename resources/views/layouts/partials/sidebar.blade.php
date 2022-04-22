<?php
    // use App\Models\Tenant\Configuration;

    // $configuration = Configuration::first();
    $firstLevel = $path[0] ?? null;
    $secondLevel = $path[1] ?? null;
    $thridLevel = $path[2] ?? null;
?>

<aside id="sidebar-left" class="sidebar-left">
    <div class="sidebar-header">
    {{--     <a href="{{route('tenant.dashboard.index')}}"
            class="logo pt-2 pt-md-0">
            @if($vc_company->logo)
                <img src="{{ asset('storage/uploads/logos/'.$vc_company->logo) }}"
                    alt="Logo"/>
            @else
                <img src="{{asset('logo/700x300.jpg')}}"
                    alt="Logo"/>
            @endif
        </a> --}}
        <div class="d-md-none toggle-sidebar-left"
            data-toggle-class="sidebar-left-opened"
            data-target="html"
            data-fire-event="sidebar-left-opened">
            <i class="fas fa-bars"
                aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="nano">    
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">
                <ul class="nav nav-main">

                    @if(in_array('dashboard', $vc_modules))
                        <li class="{{ ($firstLevel === 'dashboard')?'nav-active':'' }}">
                            <a class="nav-link"
                                href="{{route('dashboard.index')}} ">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-airplay">
                                    <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path>
                                    <polygon points="12 15 17 21 7 21 12 15"></polygon>
                                </svg>
                                <span>DASHBOARD</span>
                            </a>
                        </li>
                    @endif

                    {{-- Compras --}}
                    @if(in_array('ventas', $vc_modules))
                        <li class="nav-parent
                        {{ ($firstLevel === 'create-sale')?'nav-active nav-expanded':'' }}
                        {{ ($firstLevel === 'list-sale')?'nav-active nav-expanded':'' }}
                            ">
                            <a class="nav-link"
                                href="#">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-file-text">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16"
                                        y1="13"
                                        x2="8"
                                        y2="13"></line>
                                    <line x1="16"
                                        y1="17"
                                        x2="8"
                                        y2="17"></line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg>
                                <span>VENTAS</span>
                            </a>
                            <ul class="nav nav-children" style="">
                                @if(in_array('create-sale', $vc_module_levels))
                                    <li class="{{ ($firstLevel === 'create-sale' )?'nav-active':'' }}">
                                        <a class="nav-link" href="">Nueva Venta</a>
                                    </li>
                                @endif

                                @if(in_array('list-sale', $vc_module_levels))
                                    <li class="{{ ($firstLevel === 'list-sale' )?'nav-active':'' }}">
                                        <a class="nav-link" href="">Listado de Ventas</a>
                                    </li>
                                @endif

                            </ul>
                        </li>
                    @endif

                    {{-- COMPRAS --}}
                    @if(in_array('compras', $vc_modules))
                        <li class="nav-parent
                            {{ ($firstLevel === 'pos')?'nav-active nav-expanded':'' }}
                            {{ ($firstLevel === 'cash')?'nav-active nav-expanded':'' }}
                            ">
                            <a class="nav-link"
                            href="#">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-shopping-cart">
                                    <circle cx="9"
                                            cy="21"
                                            r="1"></circle>
                                    <circle cx="20"
                                            cy="21"
                                            r="1"></circle>
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                </svg>
                                <span>POS</span>
                            </a>
                            <ul class="nav nav-children">
                                @if(in_array('pos', $vc_module_levels))
                                    <li class="{{ ($firstLevel === 'pos'  )?'nav-active':'' }}">
                                        <a class="nav-link"
                                        href="{{route('tenant.pos.index')}}">Punto de venta</a>
                                    </li>
                                @endif
                                @if(in_array('pos', $vc_module_levels))
                                    <li class="{{ ($firstLevel === 'pos' && $secondLevel === 'fast')?'nav-active':'' }}">
                                        <a class="nav-link"
                                        href="{{route('tenant.pos.fast')}}">Venta rápida</a>
                                    </li>
                                @endif
                                @if(in_array('cash', $vc_module_levels))
                                    <li class="{{ ($firstLevel === 'cash')?'nav-active':'' }}">
                                        <a class="nav-link"
                                        href="{{route('tenant.cash.index')}}">Caja chica POS</a>
                                    </li>
                                @endif
                            </ul>
                        </li>
                    @endif

                    {{-- Inventario --}}
                    @if(in_array('inventario', $vc_modules))
                        <li class="nav-parent
                        {{ ($firstLevel === 'persons' && $secondLevel === 'customers')?'nav-active nav-expanded':'' }}
                        {{ $firstLevel === 'person-types' ? 'nav-active nav-expanded' : '' }}
                            ">
                            <a class="nav-link"
                                href="#">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-user-check">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="8.5"
                                            cy="7"
                                            r="4"></circle>
                                    <polyline points="17 11 19 13 23 9"></polyline>
                                </svg>
                                <span>Clientes</span>
                            </a>
                            <ul class="nav nav-children">
                                @if(in_array('clients', $vc_module_levels))
                                    <li class="{{ ($firstLevel === 'persons' && $secondLevel === 'customers')?'nav-active':'' }}">
                                        <a class="nav-link"
                                            href="{{route('tenant.persons.index', ['type' => 'customers'])}}">Clientes</a>
                                    </li>
                                @endif
                                @if(in_array('clients_types', $vc_module_levels))
                                    <li class="{{ ($firstLevel === 'person-types')?'nav-active':'' }}">
                                        <a class="nav-link"
                                            href="{{route('tenant.person_types.index')}}">Tipos de clientes</a>
                                    </li>
                                @endif
                            </ul>
                        </li>
                    @endif            

                    {{-- Almacen --}}
                    @if(in_array('almacen', $vc_modules))
                        <li class="{{ ($firstLevel === 'almacen')?'nav-active':'' }}">
                            <a class="nav-link" href="{{route('almacen.index')}} ">
                                <i class="fas fa-briefcase"></i>
                                <span>Almacen</span>
                            </a>
                            
                        </li>
                    @endif

                    {{-- Configuración --}}
                    @if(in_array('configuracion', $vc_modules))
                        <li class="{{in_array($firstLevel, ['list-platforms', 'list-cards', 'list-currencies', 'list-bank-accounts', 'list-banks', 'list-attributes', 'list-detractions', 'list-units', 'list-payment-methods', 'list-incomes', 'list-payments', 'company_accounts', 'list-vouchers-type',     'companies', 'advanced', 'tasks', 'inventories','bussiness_turns','offline-configurations','series-configurations','configurations', 'login-page', 'list-settings']) ? 'nav-active' : ''}}">
                            <a class="nav-link"
                                href="{{ url('list-settings') }}">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-settings">
                                    <circle cx="12"
                                            cy="12"
                                            r="3"></circle>
                                    <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                                </svg>
                                <span>Configuración</span>
                            </a>
                        </li>
                    @endif

                    


                </ul>
            </nav>
        </div>    

        <script>
            // Maintain Scroll Position
            if (typeof localStorage !== 'undefined') {
                if (localStorage.getItem('sidebar-left-position') !== null) {
                    var initialPosition = localStorage.getItem('sidebar-left-position'),
                        sidebarLeft = document.querySelector('#sidebar-left .nano-content');
                    sidebarLeft.scrollTop = initialPosition;
                }
            }
        </script>
    </div>
    
</aside>



