@include('partials/head')

<body>
    @include('partials/header')
    <main>
        @yield('content')
        @include('partials/footerAlt')
    </main>
    @include('partials/scripts')
</body>
</html>