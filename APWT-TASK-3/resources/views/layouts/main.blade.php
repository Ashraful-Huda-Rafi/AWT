@include('layouts.header')

<div class="container">
    @include('inc.nav')
    <br>
    @yield('content')
</div>

@include('layouts.footer')