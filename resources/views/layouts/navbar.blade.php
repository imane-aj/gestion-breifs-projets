@vite(['resources/css/app.css', 'resources/js/app.js'])
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>

          <li class="nav-item d-none d-sm-inline-block">

          </li>
        </ul>

        <!-- Right navbar links -->

        <ul class="navbar-nav ml-auto">

          @if (Auth::user())
             <!-- Settings Dropdown -->
         <div class="hidden sm:flex sm:items-center sm:ml-6">
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                        <div>{{ Auth::user()->name }}</div>

                        <div class="ml-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>

                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-dropdown-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>

            </x-dropdown>

          </div>
          @else
          <div class="hidden sm:flex sm:items-center sm:ml-6" style="    margin-right: 12px;">
              <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

              @if (Route::has('register'))
                  <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
              @endif
          </div>
          @endif
          {{-- fin dropdown --}}

          <div class="dropdown ">
              @php
              $path = explode("/",$_SERVER['PHP_SELF']);
              @endphp
              @if ($path[2] == "dashboard")

              @else


            <button  style="background-color: grey" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

               {{app()->getLocale()}}

            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

              <a class="dropdown-item" rel="alternate"  href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"> {{ $properties['native'] }}</a>


          @endforeach

            </div>
            @endif
        </div>



          <!-- Messages Dropdown Menu -->

          <!-- Notifications Dropdown Menu -->


          <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
              <i class="fas fa-expand-arrows-alt"></i>
            </a>
          </li>

        </ul>
      </nav>
    </div>
