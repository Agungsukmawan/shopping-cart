@include('layout.header')

<section>
    @include('layout.navbar')
    <div class="container">

        @yield('content')
    </div>
</section>

@include('layout.footer')