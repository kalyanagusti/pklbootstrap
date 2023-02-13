<!doctype html>
<html lang="en">
  <head>
    <!--Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-filt=no">
    <title>Pendaftaran Event</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <style>
      .banner-image{
        background-image: url('img/o.jpg');
        background-size: cover;
      }
    </style>
  </head>
  <body>
<!--Navbar-->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
    <div class="container">
    <h8><a href="#" class="navbar-brand"></a></h8>
      <button
           type="button"
           class="navbar-toggler"
           data-bs-target="$navbarNav"
           data-bs-toggle="collapse"
           aria-controls="navbarNav"
           aria-expanded="false"
           aria-lable="Toggle Navbar"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="mx-auto"></div>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="home.php" class="nav-link text-white">Home</a></li>
          <li class="nav-item">
            <a href="index1.php" class="nav-link text-white">Login</a></li>
          <li class="nav-item">
            <a href="pendaftaran.php" class="nav-link text-white">Data</a></li>
          <li class="nav-item">
            <a href="formulir.php" class="nav-link text-white">Formulir</a></li>
        </ul>

      </div>
      </div>
    </nav>

    <!--Banner Image-->
   <div 
      class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
       <div class="content text-center">
        <h2 class="text-white">Dieng Culture festival</h2>
        <h1 class="text-white">‘The Journey’</h1>
        <h6 class="text-white"> 25-27 Agustus 2023</h6>
       </div>
    </div>


   <script src="js/bootstrap.bundle.min.js"></script>

   <script>
     var nav = document.querySelector('nav');

     window.addEventListener('scroll', function(){
      if(window.pageYOffset > 100){
        nav.classList.add('bg-dark', 'shadow');
      }else{
        nav.classList.remove('bg-dark', 'shadow');
      }
     });
   </script>
  </body>
</html>