@include('layouts.header')

<div class="container">
    @include('inc.nav')
    <br>
    @yield('contain')
</div>

@include('layouts.footer')