<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">

    <script src="js/home.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <title>Portofolio Rega</title>
  </head>
  
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top opacity-75">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Portofolio</a>
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse dropdown" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->

            <div class="header-wrapper" type="button" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">
              <div class="nav-but-wrap">
                <div class="menu-icon hover-target">
                  <span class="menu-icon__line menu-icon__line-left"></span>
                  <span class="menu-icon__line"></span>
                  <span class="menu-icon__line menu-icon__line-right"></span>
                </div>          
              </div>          
            </div>
            <div class="nav">
                <div class="nav__content">
                  <ul class="nav__list">
                    <li class="nav__list-item active-nav"><a href="#" class="hover-target">home</a></li>
                    <li class="nav__list-item"><a href="#" class="hover-target">studio</a></li>
                    <li class="nav__list-item"><a href="#" class="hover-target">news</a></li>
                    <li class="nav__list-item"><a href="#" class="hover-target">contact</a></li>
                  </ul>
                </div>
            </div>
            
            <div class="collapse navbar-collapse navbar-nav justify-content-end" id="navbarScroll">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page"  href="/">Home</a>
                    <a class="nav-link" href="profile">Profile</a>
                    <a class="nav-link" href="projects">Projects</a>
                    <a class="nav-link" href="achievements">Achievements</a>
                    <a class="nav-link" href="contacts">Contacts</a>
                </div>
            </div>
        </div>
    </nav>

    <section class="banner">
      <img src="img/banner.jpg" class="fitBg">
      <div class="content">
        <h2>Welcome!</h2>
        <p><?php echo $desc1; ?></p>
        <a href="profile" class="btn">Learn More</a>
	  </section>


    <section class="about" id="about">
      <div class="contentBx reveal2">
        <h2 class="titleText">Journey To Success</h2>
        <p class="text"><?php echo $desc2; ?></p>
        <a href="profile" class="btn">More Stories</a>
      </div>

      <div class="imgBx reveal">
        <img src="img/img1.jpg" class="fitBg">
      </div>
    </section>

    <section class="banner2">
		  <img src="img/banner2.jpg" class="fitBg">
	  </section>

    <section>
      <div class="content reveal">
        <h2 class="titleText">Achievements</h2>
        <p class="text"><?php echo $desc3; ?></p>
      </div>
      <div class="row row-cols-1 row-cols-md-3 g-4 destinationList">
        <div class="col box reveal">
          <a href="achievements" class="text-decoration-none">
            <div class="card h-100 bg-dark">
              <img src="img/dicoding_ios.jpg" class="card-img-top" alt="iOS Certficate">
              <div class="card-body text-light">
                <h5 class="card-title">Basic iOS App Development</h5>
                <p class="card-text">Dicoding Academy</p>
              </div>
            </div>
          </a>
        </div>
        <div class="col box reveal">
          <a href="achievements" class="text-decoration-none">
            <div class="card h-100 bg-dark">
              <img src="img/dicoding_web.jpg" class="card-img-top" alt="Web Certficate">
              <div class="card-body text-light">
                <h5 class="card-title">Basic Web Programming</h5>
                <p class="card-text">Dicoding Academy</p>
              </div>
            </div>
          </a>
        </div>
        <div class="col box reveal">
          <a href="achievements" class="text-decoration-none">
            <div class="card h-100 bg-dark">
              <img src="img/dicoding_andro.jpg" class="card-img-top" alt="Android Certficate">
              <div class="card-body text-light">
                <h5 class="card-title">Basic Android App Development</h5>
                <p class="card-text">Dicoding Academy</p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </section>

    <section class="banner3">
      <img src="img/banner3.jpg" class="fitBg">
    </section>

    <section class="footer">
      <ul class="sci">
        <li><a href="https://www.linkedin.com/in/rega-rizkan-a-49bb69192/"><img src="img/linkedin.png"></a></li>
        <li><a href="https://github.com/ZenRega38"><img src="img/github.png"></a></li>
        <li><a href="https://www.instagram.com/zen.rega/"><img src="img/instagram.png"></a></li>
      </ul>
      <h4 class="copyrightText">
        Copyright ©2022 <a href="#">Rega Rizkan Azizan</a>. All rights reserved.</h4>
      </h4>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>