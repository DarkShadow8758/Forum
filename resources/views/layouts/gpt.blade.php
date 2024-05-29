<!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página com Menu Lateral</title>
  <style>
    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
    }

    .container {
      display: flex;
      min-height: 100vh;
    }

    .sidebar {
      width: 250px;
      background-color: #333;
      color: white;
    }

    .sidebar ul {
      list-style: none;
      padding: 0;
    }

    .sidebar ul li {
      padding: 10px;
    }

    .sidebar ul li a {
      color: white;
      text-decoration: none;
    }

    .content {
      flex: 1;
      padding: 20px;
    }

    .footer {
      background-color: #333;
      color: white;
      text-align: center;
      width: 100%;
      position: fixed;
      bottom: 0;
      left: 0;
    }
  </style>

</head>
<body>
    <header> <h1>@yield('header')</h1></header>
  <div class="container">
    <nav class="sidebar">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Sobre</a></li>
        <li><a href="#">Serviços</a></li>
        <li><a href="#">Contato</a></li>
      </ul>
    </nav>
    <div class="content">
        @yield('content');
      <h1>Conteúdo Principal</h1>
      <p>Bem-vindo à nossa página!</p>
    </div>
  </div>
  <footer class="footer">
    <p>Rodapé Fixo</p>
  </footer>
</body>
</html>
