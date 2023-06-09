  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
           <!-- <h1 class="text-light"><a href="index.html"><span>Moderna</span></a></h1>
     Uncomment below if you prefer to use an image logo -->
        <a href="/ "><img src="{{ asset("frontend/assets/img/Icon.png") }}" alt="" class="img-fluid"><span class="sp">Ekopii</span></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class=" " href="/">Home</a></li>
          <li><a href="{{ url("/about") }}">About</a></li>
          <li><a href="{{ url("/service") }}">Services</a></li>
          <li><a href="{{ url("/contact") }}">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>