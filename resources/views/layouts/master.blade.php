<!DOCTYPE html>
<html>

    <head>
        <title>
            @yield('title', 'Game')
        </title>

        <meta charset='utf-8'>
        
        <link href='/css/games.css' type='text/css' rel='stylesheet'>

        @stack('head')

    </head>
    <body>
        <div class="container">
            <header>
                <img
                    src='/img/gameranker.png'
                    alt='Game Logo'>
                <h1>Video Game Ranker</h1>
            </header>
            <nav>
                <nav>
                    <ul>
                            <li><a href='/'>Home</a></li>
                            <li><a href='/search'>Search for Games</a></li>
                            <li><a href='/games/new'>Add a New Game</a></li>
                            <li><a href='/games/edit'>Edit a Game Info </a></li>
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
                <a href="https://github.com/amokhtar78/A4">GitHub Repository</a>
            </footer>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

            @stack('body')
        </div>
    </body>
</html>
