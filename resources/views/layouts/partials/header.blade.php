<nav>
    <ul class="menu menu_position">
        <li class="logo"><a href="{{ route('home') }}">LOGO</a></li>
        <li class="item"><a href="{{ route('post.create') }}">CADASTRAR NOTICIAS</a></li>
        <li class="item"><a href="{{ route('category.create') }}">CADASTRAR CATEGORIA</a></li>
        <li class="item"><a href="{{ route('home') }}">LISTAR NOTICIAS</a></li>
        <li class="item">
            <form action="{{ route('post.search') }}" method="POST">
                @csrf
                <div class="search-box">
                    <input class="form-control" id="searchStr" name="search">
                    <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>

        </li>
        <li class="toggle"><a href="#"><i class="fas fa-bars"></i></a></li>
    </ul>
</nav>
