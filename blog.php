<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
  <!--Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,800" rel="stylesheet">

  <link rel="stylesheet" href="css/reset.css" />
  <!-- CSS reset -->
  <link rel="stylesheet" href="css/style.css" />
  <!-- Gem style -->
  <script src="js/modernizr.js"></script>
  <!-- Modernizr -->

  <title>Blog - Code Chappie</title>
  <meta name="theme-color" content="#000" />
  <meta name="msapplication-navbutton-color" content="#000" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
</head>

<body class="foo">
  <header>
    <div id="logo">
      <h2 class="logo"><a href="index.html"><img class="logo-navbar" src="img/logo.png" alt=""></a></h2>
    </div>
    <div id="cd-hamburger-menu">
      <a class="cd-img-replace" href="#0">Menu</a>
    </div>
    <div id="cd-cart-trigger">
      <a class="cd-img-replace" href="https://www.youtube.com/codechappie" target="_blank">Cart</a>
    </div>
  </header>

  <nav id="main-nav">
    <ul>
      <li><a href="index.html">Inicio</a></li>
      <li><a href="blog.html">Blog</a></li>
      <li><a href="courses.html">Cursos</a></li>
      <li><a href="resources.html">Recursos</a></li>
    </ul>
  </nav>

  <section class="blog-container">
    <div class="container-blog">
      <div class="searcher">
        <div class="content">
          <img src="img/icons/search.svg" alt="">
          <input type="search" name="searcher_input" spellcheck="false" id="searcher_input"
            placeholder="Buscar artículo...">
        </div>
      </div>
      <div class="blog-information">
        <div class="blog">
          <div class="article">
            <div class="img">
              <a href="#"><img src="img/courses/minihtml5.jpg" alt=""></a>
            </div>
            <div class="info-article">
              <h6 class="tags"><a href="#">#FirstPublication</a></h6>
              <h2><a href="#">Iniciando un blog Lorem, ipsum dolor. t skdskn dsknskdn sdkn sknecnológico</a></h2>
              <h4>26 de Mayo del 2020</h4>
            </div>
          </div>
          <div class="article">
            <div class="img">
              <a href="#"><img src="img/courses/minihtml5.jpg" alt=""></a>
            </div>
            <div class="info-article">
              <h6 class="tags"><a href="#">#FirstPublication</a></h6>
              <h2><a href="https://www.googles.com">Iniciando un blog tecnico</a></h2>
              <h4>26 de Mayo del 2020</h4>
            </div>
          </div>
        </div>
        <div class="btn-blog">
          <button>Cargar más artículos</button>
        </div>
      </div>
      <div class="imageNotFound">
        <img src="img/not-found.png" alt="">
        <h3>Un ovni se acaba de llevar esa información, lo sentimos :(</h3>
      </div>
    </div>
  </section>
  <footer>
    <div class="socialnet">
      <a href="#"><img src="img/icons/facebook.svg" alt=""></a>
      <a href="#"><img src="img/icons/messenger.svg" alt=""></a>
      <a href="#"><img src="img/icons/instagram.svg" alt=""></a>
      <a href="#"><img src="img/icons/youtube.svg" alt=""></a>
      <a href="#"><img src="img/icons/github.svg" alt=""></a>
    </div>
    <div class="copyright">
      <p>&copy; Code Chappie 2020. Todos los derechos reservados.</p>
    </div>
  </footer>

  <div id="cd-shadow-layer"></div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="js/main.js"></script>
  <!-- Gem jQuery -->
</body>

</html>