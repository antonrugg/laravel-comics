<header>
        <div class="container-90w">
            <a href="/"><img src="/imgs/dc-logo.png" alt="DC logo"></a>
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