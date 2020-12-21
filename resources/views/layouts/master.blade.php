@include('partials/head')

<body>
    @include('partials/header')
    <main>
        @yield('content')
        @include('partials/footer')
    </main>
    @include('partials/scripts')
</body>
</html>