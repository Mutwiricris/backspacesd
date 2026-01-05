<!DOCTYPE html>
<html lang="en">
    @include('components.head')
    <body>
        @include('components.preloader')

        @include('components.header')

        @include('components.navbar')

        @yield('content')

        @include('components.footer')

        @include('components.scripts')

        @stack('scripts')
    </body>
</html>
