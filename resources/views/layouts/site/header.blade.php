<header>
    <link rel="icon" type="image/png" href="{{ asset('site/img/livros.png') }}" />
    <div class="container">
        <div class="content-header">
            <a href="{{ route('siteIndex') }}">
                <h2>Book.io</h2>
            </a>
        </div>
        <div class="content-header">
            <a href="{{ route('siteIndex') }}">
                <img src="{{ asset('site/img/logobookio.png') }}" class="logo" alt="Logo Book.io">
            </a>
        </div>
        <div class="content-header">
            <form action="{{ route('buscar') }}">
                <input type="text" name="search" placeholder="Pesquisar...">
                <button type="submit">
                    <span class="material-symbols-outlined">
                        search
                    </span>
                </button>
            </form>
            <a class="admin-btn" href="{{ route('login') }}" target="_blank">
                Admin
            </a>
        </div>
    </div>
</header>
<hr>
