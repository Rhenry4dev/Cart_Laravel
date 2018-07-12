<!DOCTYPE html>
<html>
<head>
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <title>Controle de estoque</title>
</head>
<body>

  <div class="container">

  <nav class="navbar navbar-default">
    <div class="container-fluid">

    <div class="navbar-header">      
      <a class="navbar-brand" href="/">Loja em Laravel</a>
    </div>
  @if (Auth::guest())
    <ul class="nav navbar-nav navbar-right">
    <li><a href="/login_user">Login</a></li>
  </ul>
  <ul class="nav navbar-nav navbar-right">
    <li><a href="/register_user">Register</a></li>
  </ul>


      @elseif ((Auth::user()->user_type) == 'user')


    <li>{{ Auth::user()->name }} </li>
    <li><a href="/logout">Logout</a></li>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/carrinho/buy">Compras</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/carrinho">Carrinho</a></li>
      </ul>


      @else
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/">Controle de Estoque</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/produtos/novo">Novo</a></li>
      </ul>
    <li>{{ Auth::user()->name }} </li>
    <li><a href="/logout">Logout</a></li>


      @endif
  </div>
</nav>

    @yield('conteudo')

  <footer class="footer">
      <p>© Carrinho BubbStore.</p>
  </footer>

  </div>
</body>
</html>