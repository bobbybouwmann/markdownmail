@include('partials.head')

<div id="app">

    @include('partials.menu')

    <div class="main-content-wrapper">

        <div class="main-content">

            @yield('content')

        </div>

    </div>

</div>

@include('partials.footer')