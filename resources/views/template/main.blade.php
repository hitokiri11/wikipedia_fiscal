<!DOCTYPE html>
<html lang="en">
    @include('layouts.head')
    <body class="grid-container" id="wrapper">
        <!-- <header class="header">HEADER</header> -->
        @include('layouts.nav')
        <!-- <aside class="sidebar">SIDEBAR</aside> -->
        <article class="main">
            @yield('content')
        </article>
        @include('layouts.footer')

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>