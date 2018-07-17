<!DOCTYPE html>
<html>
<head>
  <style type="text/css">

.container {
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}

  .navbar {
    display: none;
  }

  .navbar-default {
  
}
.navbar-header {
  float: left;
}
.navbar-brand {
  float: left;
  padding: 15px 15px;
  font-size: 18px;
  line-height: 20px;
}
.footer{
  display : block;
}

  </style>
</head>
<body>

  <div style="  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;">

  <nav style="
    display: none;
    background-color: #f8f8f8;
    border-color: #e7e7e7;
  ">
    <div style="
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;"
  >

    <div style="float: left;">      
      <a style=
  "float: left;
  padding: 15px 15px;
  font-size: 18px;
  line-height: 20px;"
  href="/">Loja em Laravel</a>
    </div>
  </div>
</nav>

    @yield('conteudo')

  <footer style="display : block;">
      <p>© Carrinho BubbStore.</p>
  </footer>

  </div>
</body>
</html>
