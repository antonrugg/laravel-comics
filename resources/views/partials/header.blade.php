<header>
        <div class="container-90w">
            <a href="/"><img src="/imgs/dc-logo.png" alt="DC logo"></a>
            <div id="menu-container">
                <ul>
                @foreach ($navlinks as $navlink) 
                <li>
                    @if($navlink['active'])
                    <a href="{{ $navlink['url'] }}" class="active">{{ $navlink['text'] }}</a>
                    @else
                    <a href="{{ $navlink['url'] }}">{{ $navlink['text'] }}</a>
                    @endif
                </li>
                @endforeach  
                </ul>
            </div>
        </div>
  </header>