@include('Back.layouts.header')
       @include('Back.layouts.nav')
        <div id="layoutSidenav">
          @include('Back.layouts.sidenav')
            <div id="layoutSidenav_content">
                <main>
                    @yield('main-content')
                </main>
                @include('Back.layouts.footer')
            </div>
        </div>
       @include('Back.layouts.script');