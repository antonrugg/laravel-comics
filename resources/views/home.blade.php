<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <header>
        <div class="container-90w">
            <img src="../assets/img/dc-logo.png" alt="DC logo">
            <div id="menu-container">
                <ul>
                @foreach ($navlinks as $navlink) 
                <li>
                    <a href="{{ $navlink['url'] }}">{{ $navlink['text'] }}</a>
                </li>
                @endforeach  
                </ul>
            </div>
        </div>
  </header>
    <main>
        <h1>HOME TEST</h1>
       
    </main>
    <footer>
    </footer>    
</body>
</html>