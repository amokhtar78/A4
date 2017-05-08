<!DOCTYPE html>
<html>

    <head>
        <title>
            @yield('title', 'Game')
        </title>

        <meta charset='utf-8'>
        <link href='/css/app.css' type='text/css' rel='stylesheet'>

        @stack('head')

    </head>
    <body>
        <div class="container">
            <header>
                <img
                    src='/img/gamelogo.jpg'
                    alt='Game Logo'>
                <h1>Video Game Ranker</h1>
            </header>
            <nav>
                @yield('nav')
            </nav>
            <article>
                <section>
                    @yield('content')
                </section>
            </article>
            <footer>
                Amir Mokhtar &copy; {{ date('Y') }}
                <BR>
                <a href="https://github.com/amokhtar78/A4">GitHub Repository</a>
            </footer>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

            @stack('body')
        </div>
    </body>
</html>
