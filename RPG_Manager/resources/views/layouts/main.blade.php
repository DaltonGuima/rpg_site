<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        {{-- Links estilos--}}
        <link rel="stylesheet" href="/css/styles.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        
        {{-- Links Js --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

    </head>
<body>
    <header>
      <div>
          <div class="header-red" id="@yield('home')">
              <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
                  <div class="container">
                      <img src="/images/logo.png" alt="Logo RPG_Manager" class="navbar-logo">
                      <a class="navbar-brand" href="/">RPG Manager</a>
                      <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
                          <span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navcol-1">
                          <ul class="nav navbar-nav">
                              <li class="nav-item" role="presentation">
                                  <a class="nav-link active" href="#">Link</a>
                              </li>
                              <li class="dropdown">
                                  <a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Dropdown </a>
                                  <div class="dropdown-menu" role="menu">
                                      <a class="dropdown-item" role="presentation" href="#">First Item</a>
                                      <a class="dropdown-item" role="presentation" href="#">Second Item</a>
                                      <a class="dropdown-item" role="presentation" href="#">Third Item</a>
                                  </div>
                              </li>
                          </ul>
                          <form class="form-inline mr-auto" target="_self">
                              <div class="form-group">
                                  <label for="search-field">
                                      <i class="fa fa-search"></i>
                                  </label>
                                  <input class="form-control search-field" type="search" name="search" id="search-field" placeholder="Pesquise por mesas">
                              </div> 
                          </form>

                          <span class="navbar-text"> 
                              <a href="#" class="login">Log In</a>
                          </span>
                          <a class="btn btn-light action-button" role="button" href="#">Sign Up</a>
                      </div>
                  </div>
              </nav>
              @yield("dice-home")
          </div>
      </div>          
    </header>
    <main>

      <div class='back-to-top' id='back-to-top' title='Back to top'>
        <i class='fa fa-chevron-up'></i>
      </div>

      @yield('content')
      
    </main>
    <footer>
        <footer class="site-footer">
            <div class="container">
              <div class="row">
                <div class="col-sm-12 col-md-6">
                  <h6>About</h6>
                  <p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative  to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
                </div>
      
                <div class="col-xs-6 col-md-3">
                  <h6>Categories</h6>
                  <ul class="footer-links">
                    <li><a href="http://scanfcode.com/category/c-language/">C</a></li>
                    <li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>
                    <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
                    <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
                    <li><a href="http://scanfcode.com/category/android/">Android</a></li>
                    <li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
                  </ul>
                </div>
      
                <div class="col-xs-6 col-md-3">
                  <h6>Quick Links</h6>
                  <ul class="footer-links">
                    <li><a href="http://scanfcode.com/about/">About Us</a></li>
                    <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
                    <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
                    <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
                    <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
                  </ul>
                </div>
              </div>
              <hr>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                  <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
                  <a href="#">Scanfcode</a>.
                  </p>
                </div>
      
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <ul class="social-icons">
                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
                  </ul>
                </div>
              </div>
            </div>
      </footer>
    </footer>
</body>