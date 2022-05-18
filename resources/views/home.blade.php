<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/header.css">
    <title>Home @yield('title')</title>
</head>
<body>
    @include('partials/header')
    <main>
        <div class="jumbotron">
            <div id="jumbo-label"><p>current series</p></div>
        </div>
        <div class="container-90w">
        @yield('content')
        </div>
        <a id="load-more-btn" href="#nowhere">load more</a>
    </main>
    <footer>
    </footer>    
</body>
</html>