<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="index.php">
        <img src="assets/img/logo.png" alt="Logo" width="200px">
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php if($pagetitle == "HOME"){echo "#modules";} else{echo "index.php#modules";}?>">MODULES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="contact.php">CONTACT US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="register.php">REGISTER</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>