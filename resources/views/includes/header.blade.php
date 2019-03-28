

    <nav>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="/">Home</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/produit">Catalogue</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/basket">Panier</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/admin">Administration</a>
            </li>
        </ul>

        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif


    </nav>




