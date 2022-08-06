@php
$nav_links = [
[
    'name' => 'INICIO',
     'route' => '/',
     'active' => request()->routeIs('autotramites')
],
[
     'name' => 'SERVICIOS',
     'route' => route('servicios'),
     'active' => request()->routeIs('servicios')
]
] ;
@endphp
<!-- Primary Navigation Menu -->
<nav x-data="{ open: false }" class="navbar p-0 fixed-top d-flex flex-row bg-white border-b border-gray-100 shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-25 sm:flex">
                        <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                            <span class="mdi mdi-menu"></span>
                          </button>
                          <ul class="navbar-nav w-100">
                            <li class="nav-item w-100">
                              <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                                <input type="text" class="form-control" placeholder="Search products">
                              </form>
                            </li>
                          </ul>

                          @foreach ($nav_links as $nav_link )

                          <x-jet-nav-link href="{{ $nav_link['route'] }}" :active="$nav_link['active']">
                              {{ $nav_link['name'] }}
                          </x-jet-nav-link>

                          @endforeach

                          <ul class="navbar-nav navbar-nav-right">
                            <li class="nav-item dropdown d-none d-lg-block">
                              <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-toggle="dropdown" aria-expanded="false" href="#">+ Create New Project</a>
                              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
                                <h6 class="p-3 mb-0">Projects</h6>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                  <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                      <i class="mdi mdi-file-outline text-primary"></i>
                                    </div>
                                  </div>
                                  <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1">Software Development</p>
                                  </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                  <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                      <i class="mdi mdi-web text-info"></i>
                                    </div>
                                  </div>
                                  <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1">UI Development</p>
                                  </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                  <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                      <i class="mdi mdi-layers text-danger"></i>
                                    </div>
                                  </div>
                                  <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1">Software Testing</p>
                                  </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <p class="p-3 mb-0 text-center">See all projects</p>
                              </div>
                            </li>
                            <li class="nav-item nav-settings d-none d-lg-block">
                              <a class="nav-link" href="#">
                                <i class="mdi mdi-view-grid"></i>
                              </a>
                            </li>
                            <li class="nav-item dropdown border-left">
                              <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-email"></i>
                                <span class="count bg-success"></span>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                                <h6 class="p-3 mb-0">Messages</h6>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                  <div class="preview-thumbnail">
                                    <img src="assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                                  </div>
                                  <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                                    <p class="text-muted mb-0"> 1 Minutes ago </p>
                                  </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                  <div class="preview-thumbnail">
                                    <img src="assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
                                  </div>
                                  <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                                    <p class="text-muted mb-0"> 15 Minutes ago </p>
                                  </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                  <div class="preview-thumbnail">
                                    <img src="assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
                                  </div>
                                  <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                                    <p class="text-muted mb-0"> 18 Minutes ago </p>
                                  </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <p class="p-3 mb-0 text-center">4 new messages</p>
                              </div>
                            </li>
                            <li class="nav-item dropdown border-left">
                              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                                <i class="mdi mdi-bell"></i>
                                <span class="count bg-danger"></span>
                              </a>


                              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                                <h6 class="p-3 mb-0">Notifications</h6>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                  <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                      <i class="mdi mdi-calendar text-success"></i>
                                    </div>
                                  </div>

                                  <div class="preview-item-content">
                                    <p class="preview-subject mb-1">Event today</p>
                                    <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                                  </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                  <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                      <i class="mdi mdi-settings text-danger"></i>
                                    </div>
                                  </div>
                                  <div class="preview-item-content">
                                    <p class="preview-subject mb-1">Settings</p>
                                    <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                                  </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                  <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                      <i class="mdi mdi-link-variant text-warning"></i>
                                    </div>
                                  </div>
                                  <div class="preview-item-content">
                                    <p class="preview-subject mb-1">Launch Admin</p>
                                    <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                                  </div>
                                </a>

                                <div class="dropdown-divider"></div>
                                <p class="p-3 mb-0 text-center">See all notifications</p>
                              </div>
                                </li>
                          </ul>
                        </div>
                     </div>
                </div>

                        <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- Teams Dropdown -->


                <!-- Settings Dropdown -->
                <div class="ml-3 relative">

            @auth

                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>



                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Perfil Admin') }}
                            </x-jet-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-jet-dropdown-link>
                            @endif

                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();">
                                    {{ __('Cerrar Sesión') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>
                </div>
             @endauth
            </div>
        </div>



    <!-- Responsive Navigation Menu Movil-->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">

            @foreach ($nav_links as $nav_link )
            <x-jet-nav-link href="{{ $nav_link['route'] }}" :active="$nav_link['active']">
                {{ $nav_link['name'] }}
            </x-jet-nav-link>
            @endforeach



        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="shrink-0 mr-3">
                        <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </div>
                @endif

                <div>
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div><br>


                <!-- Account Management -->
                <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Perfil Admin') }}
                </x-jet-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                        {{ __('API Tokens') }}
                    </x-jet-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                   @click.prevent="$root.submit();">
                        {{ __('Cerrar Sesión') }}
                    </x-jet-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
    </div>

        </div>
    </div>
</nav>

