
@props(['user'])
<header>
    @auth
        <nav id="navbar" class="navbar">
            <div class="containerLeft">
                <a class="homeLink" href="/"><i class="fa fa-home" aria-hidden="true"></i>
                    Home</a>
                <a class="decksLink" href="/{{$user->user_id}}/decks">Your decks</a>
                <a class="decksLink" href="/decks/create">Create deck</a>
            </div>
            <div class="containerRight">
                <a class="userLink" href="/{{$user->user_id}}/profile"><i class="fa-solid fa-user"></i> Profile</a>
                <form class="logoutForm" action="/users/logout" method="post">
                    @csrf
                    <button class="logoutButton" type="submit">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        Logout
                    </button>
                </form>
            </div>
            {{-- <a class="posts" href="/profile">Public decks</a> --}}
        </nav>
    @else
        <nav id="navbar" class="navbar">
            <div class="containerLeft">
                <a class="homeLink" href="/"><i class="fa fa-home" aria-hidden="true"></i>
                    Home</a>
            </div>
            <div class="containerRight">
                <a class="registerLink" href="/register"><i class="fa-solid fa-user-plus"></i> Register</a>
                <a class="registerLink" href="/login"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
            </div>
            {{-- <a class="posts" href="/profile">Public decks</a> --}}
        </nav>
    @endauth

</header>
