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

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
         
        <script> 

                var isSafari = /^((?!chrome|android).)*safari/i.test(navigator.userAgent);  

                var link = document.createElement('link');
                link.rel = 'stylesheet';
                link.type = 'text/css';
                
                if (isSafari) {
                        link.href = 'assets/css/stylesSafari.css';
                } else {
                        link.href = 'assets/css/styles.css';
                }    

                document.getElementsByTagName('head')[0].appendChild(link);

                AOS.init({
                    duration: 1000,
                    disable: 'mobile'
                });

                function agendaLlamada() {
                    window.open("https://info.liberfy.es/emprendedores-del-siglo-xxi-0", "_blank");
                }

        </script>

    </body>
</html>