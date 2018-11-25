<!DOCTYPE html>
<html lang="pt-BR">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/x-png" href="https://images.vexels.com/media/users/3/128933/isolated/preview/b54944f7322722034cfda55e601b4f8d-travel-bus-round-icon-by-vexels.png">

    <title>Temporadas</title>
    
    {{ Html::style('blog/css/bootstrap.min.css') }}
    {{ Html::style('blog/css/blog.css') }}

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        {{ link_to_route(
                'home',
                'Mur1lol',
                [],
                ['class' => 'navbar-brand']) }}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ url(route('home')) }}">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @else
                @if (Auth::user()->id == 1)
                <li class="nav-item">
                    {{ link_to_route(
                        'temporadas.create',
                        'Publicar temporada',
                        [],
                        ['class' => 'nav-link']) }}
                </li>
                <li class="nav-item">
                    {{ link_to_route(
                        'confirmacaos.index',
                        'Gerenciar Viagens',
                        [],
                        ['class' => 'nav-link']) }}
                </li>

                @else
                <li class="nav-item">
                    {{ link_to_route(
                        'confirmacaos.index',
                        'Minhas Viagens',
                        [],
                        ['class' => 'nav-link']) }}
                </li>
                @endif
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Blog Entries Column -->
        <div class="espacamento">

          @yield('conteudo')

        </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    {{ Html::script('blog/js/jquery.min.js') }}
    {{ Html::script('blog/js/bootstrap.bundle.min.js') }}
    {{ Html::script('blog/js/blog.js') }}
    {{ Html::script('blog/js/ajax.js') }}

  </body>

</html>