@include('partials.head')

<div id="app">

    @include('partials.menu')

    <div class="content-wrapper">

        <div class="main-sidebar">

            <aside class="sidebar">

                @yield('sidebar')

            </aside>

        </div>

        <div class="main-content-wrapper">

            <div class="main-content">

                @yield('content')

            </div>

        </div>

    </div>

</div>

@include('partials.footer')