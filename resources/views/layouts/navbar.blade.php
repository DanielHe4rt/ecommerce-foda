

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Inicio
                        <span class="visually-hidden">(current)</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ request()->is('products*') ? 'active' : '' }}" href="{{ route('products.index') }}">Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('categories*') ? 'active' : '' }}" href="{{ route('categories.index') }}">Categorias</a>
                </li>

            </ul>

        </div>
    </div>
</nav>

