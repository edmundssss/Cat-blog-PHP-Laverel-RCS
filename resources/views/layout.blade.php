<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Top Blog!</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
    
    <link rel="stylesheet" href="css/main.css">
   
</head>
<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-3 main-logo">
                    <a href="/">
                        <img src="https://www.miningfoundationsw.org/Resources/Pictures/Logos/2014%20Sponsors/Empire%20Southwesst%20ColorLockup.jpg" alt="">
                    </a>
                </div>
                <div class="col-xs-9">
                    <ul class="main-menu">
                        <li class="main-menu-item {{ $page == 'index' ? 'active' : ''}}">
                            <a href="/">Home</a>
                        </li>
                        <li class="main-menu-item {{ $page == 'articles' ? 'active' : ''}}">
                            <a href="/articles">Articles</a>
                        </li>
                        <li class="main-menu-item {{ $page == 'chat' ? 'active' : ''}}">
                            <a href="/chat">Chat</a>
                        </li>
                        <li class="main-menu-item {{ $page == 'registration' ? 'active' : ''}}">
                            <a href="/registration">Register</a>
                        </li>
                        <li class="main-menu-item {{ $page == 'about_us' ? 'active' : ''}}">
                            <a href="/about_us">About us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    @yield('content')



    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                   <b>&copy; Edo, 2018, All rights reserved.<b>
                </div>
            </div>    
        </div>
    </footer>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
    <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>

    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>