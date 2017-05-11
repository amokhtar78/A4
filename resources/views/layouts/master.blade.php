<!DOCTYPE html>
<html>

    <head>
        <title>
            @yield('title', 'Game')
        </title>

        <meta charset='utf-8'>
        <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
        <link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css' rel='stylesheet'>
        <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>

        <link href='/css/gamemaster.css' type='text/css' rel='stylesheet'>

        @stack('head')

    </head>
    <body>
        <div class="container">
            <header>
                <img
                    src='/img/gameranker.png'
                    alt='Game Logo'>              
            </header>
            <nav>
                <nav>
                    <ul>
                        <li><a href='/'>Home</a></li>
                        <li><a href='/games/new'>Add a New Game</a></li>

                    </ul>
                </nav>
            </nav>
            <article>
                <section>
                    @yield('content')
                    @if(Session::get('message') != null))
                    <div class='message'>{{ Session::get('message') }}</div>
                    @endif
                </section>
            </article>

            <footer>
                Amir Mokhtar &copy; {{ date('Y') }}
                <BR>
                <a class="myHover" href="https://github.com/amokhtar78/A4">GitHub Repository</a>
            </footer>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

            @stack('body')
        </div>
    </body>
</html>
