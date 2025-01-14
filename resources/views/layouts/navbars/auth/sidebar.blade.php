<div wire:loading>
    <div class="page-loader">
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3" id="sidenav-main">
    <div class="sidenav-header" style="text-align: center;height: 200px;">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="align-items-center d-flex m-0 navbar-brand text-wrap" href="{{ route('dashboard') }}">
            <img src="{{ asset('storage/' . ($admin->logo ?? '')) }}" class="w-100 navbar-brand-img align-items-center" alt="..." style="height:  200px !important;width: 300px;max-height: 150px !important;">
            <!-- <span class="ms-3 font-weight-bold">{{ $admin->title ?? '' }}</span> -->

        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item pb-2">
                <a class="nav-link {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}" href="{{ route('dashboard') }}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>shop </title>
                            <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Rounded-Icons" transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                    <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                                        <g id="shop-" transform="translate(0.000000, 148.000000)">
                                            <path class="color-background" d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z" id="Path" opacity="0.598981585"></path>
                                            <path class="color-background" d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z" id="Path"></path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">{{ __('translate.dashboard') }}</span>
                </a>
            </li>

            @if (isset($sidebarItem) && count($sidebarItem) > 0)
            <li class="nav-item mt-2">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">
                    {{ __('translate.page_manager') }}
                </h6>
            </li>
            @else
            <li class="nav-item mt-2">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">
                    {{ __('translate.norecordfound') }}
                </h6>
            </li>
            @endif
            @if (isset($sidebarItem[0]) && $sidebarItem[0]->name == 'Banner' && $sidebarItem[0]->status == 1)
            <li class="nav-item pb-2">
                <a class="nav-link {{ Route::currentRouteName() == 'banner' ? 'active' : '' }}" href="{{ route('banner') }}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;" class="ni ni-album-2 ps-2 pe-2 text-center
                {{ in_array(request()->route()->getName(), ['banner']) ? 'text-white' : 'text-dark' }}"></i>
                    </div>
                    <span class="nav-link-text ms-1">{{ __('translate.banner') }}</span>
                </a>
            </li>
            @endif
            @if (isset($sidebarItem[1]) && $sidebarItem[1]->name == 'Links Management' && $sidebarItem[1]->status == 1)
            <li class="nav-item pb-2">
                <a class="nav-link {{ Route::currentRouteName() == 'links-management' ? 'active' : '' }}" href="{{ route('links-management') }}">
                    <div class="icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <!-- <i style="font-size: 1rem;" class="fas fa-lg fa-list-ul ps-2 pe-2 text-center
                        {{ in_array(request()->route()->getName(), ['links-management']) ? 'text-white' : 'text-dark' }}"></i> -->
                        <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                            <path d="M14.851 11.923c-.179-.641-.521-1.246-1.025-1.749-1.562-1.562-4.095-1.563-5.657 0l-4.998 4.998c-1.562 1.563-1.563 4.095 0 5.657 1.562 1.563 4.096 1.561 5.656 0l3.842-3.841.333.009c.404 0 .802-.04 1.189-.117l-4.657 4.656c-.975.976-2.255 1.464-3.535 1.464-1.28 0-2.56-.488-3.535-1.464-1.952-1.951-1.952-5.12 0-7.071l4.998-4.998c.975-.976 2.256-1.464 3.536-1.464 1.279 0 2.56.488 3.535 1.464.493.493.861 1.063 1.105 1.672l-.787.784zm-5.703.147c.178.643.521 1.25 1.026 1.756 1.562 1.563 4.096 1.561 5.656 0l4.999-4.998c1.563-1.562 1.563-4.095 0-5.657-1.562-1.562-4.095-1.563-5.657 0l-3.841 3.841-.333-.009c-.404 0-.802.04-1.189.117l4.656-4.656c.975-.976 2.256-1.464 3.536-1.464 1.279 0 2.56.488 3.535 1.464 1.951 1.951 1.951 5.119 0 7.071l-4.999 4.998c-.975.976-2.255 1.464-3.535 1.464-1.28 0-2.56-.488-3.535-1.464-.494-.495-.863-1.067-1.107-1.678l.788-.785z" />
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">{{ __('translate.links_management') }}</span>
                </a>
            </li>
            @endif
            {{-- Slug --}}

            @if (isset($sidebarItem[3]) && $sidebarItem[3]->name == 'Slug Management' && $sidebarItem[3]->status == 1)
            <li class="nav-item pb-2">
                <a class="nav-link {{ Route::currentRouteName() == 'slug-management' ? 'active' : '' }}" href="{{ route('slug-management') }}">
                    <div class="icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <!-- <i style="font-size: 1rem;" class="fas fa-lg fa-list-ul ps-2 pe-2 text-center
                        {{ in_array(request()->route()->getName(), ['slug-management']) ? 'text-white' : 'text-dark' }}"></i> -->
                        <svg fill="#000000" width="25px" height="25px" viewBox="0 0 256 256" id="Flat" xmlns="http://www.w3.org/2000/svg">
                            <path d="M238.62793,78.62695A31.90289,31.90289,0,0,1,216,87.98438a32.23919,32.23919,0,0,1-7.64124-.91846l-26.629,49.45312c.30212.27979.60412.55957.8977.853a32.00038,32.00038,0,1,1-50.1958,6.37354l-20.17749-20.17774a32.157,32.157,0,0,1-23.89526,3.49805L61.72974,176.519c.30212.27979.60412.55957.8977.853a32.00038,32.00038,0,1,1-45.25537.001l.00049-.001a32.0127,32.0127,0,0,1,30.269-8.43848l26.62866-49.45214c-.302-.28028-.60412-.56006-.8977-.85352a32.03718,32.03718,0,0,1-.00049-45.25488l.00049-.001a32.00216,32.00216,0,0,1,50.1958,38.88232l20.177,20.17725a32.12466,32.12466,0,0,1,23.89624-3.498L194.27026,79.481c-.30212-.27979-.60412-.55957-.8977-.853a32.03718,32.03718,0,0,1-.00049-45.25488l.00049-.001a32.00021,32.00021,0,0,1,45.25537,45.25488Z" />
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">{{ __('translate.slug') }}</span>
                </a>
            </li>
            @endif
            {{-- Slug --}}
            @if (isset($sidebarItem[2]) && $sidebarItem[2]->name == 'Buttons' && $sidebarItem[2]->status == 1)
            <li class="nav-item pb-2">
                <a class="nav-link {{ Route::currentRouteName() == 'buttons' ? 'active' : '' }}" href="{{ route('buttons') }}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;" class="fa fa-ticket ps-2 pe-2 text-center
                        {{ in_array(request()->route()->getName(), ['buttons']) ? 'text-white' : 'text-dark' }}"></i>
                    </div>
                    <span class="nav-link-text ms-1">{{ __('translate.buttons') }}</span>
                </a>
            </li>
            @endif
            <li class="nav-item mt-2">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">
                    {{ __('translate.admin_manager') }}
                </h6>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'user-profile' ? 'active' : '' }}" href="{{ route('user-profile') }}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>customer-support</title>
                            <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Rounded-Icons" transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                    <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                                        <g id="customer-support" transform="translate(1.000000, 0.000000)">
                                            <path class="color-background" d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z" id="Path" opacity="0.59858631"></path>
                                            <path class="color-foreground" d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z" id="Path"></path>
                                            <path class="color-foreground" d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z" id="Path"></path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">{{ __('translate.user_profile') }}</span>
                </a>
            </li>
            @if ($user->role == 1)
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'user-management' ? 'active' : '' }}" href="{{ route('user-management') }}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path d="M406.5 399.6C387.4 352.9 341.5 320 288 320H224c-53.5 0-99.4 32.9-118.5 79.6C69.9 362.2 48 311.7 48 256C48 141.1 141.1 48 256 48s208 93.1 208 208c0 55.7-21.9 106.2-57.5 143.6zm-40.1 32.7C334.4 452.4 296.6 464 256 464s-78.4-11.6-110.5-31.7c7.3-36.7 39.7-64.3 78.5-64.3h64c38.8 0 71.2 27.6 78.5 64.3zM256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-272a40 40 0 1 1 0-80 40 40 0 1 1 0 80zm-88-40a88 88 0 1 0 176 0 88 88 0 1 0 -176 0z" />
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">{{ __('translate.users') }}</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'admin-management' ? 'active' : '' }}" href="{{ route('admin-management') }}" wire:click="editAdmin(1)">
                    <div class="icon icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>office</title>
                            <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Rounded-Icons" transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                    <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                                        <g id="office" transform="translate(153.000000, 2.000000)">
                                            <path class="color-background" d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z" id="Path" opacity="0.6"></path>
                                            <path class="color-background" d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z" id="Shape"></path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">{{ __('translate.admin_settings') }}</span>
                </a>
            </li>
            @endif
        </ul>
    </div>
</aside>