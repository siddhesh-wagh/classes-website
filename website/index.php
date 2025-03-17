<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <title>website</title>
</head>

<!-- navbar header -->

<body style="background-color: white">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <!-- <img src="images/logo.jpg" alt="#" height="50px" width="50x"> -->
    <a class="navbar-brand" href="http://localhost/website/index.php">Shreeya_Academy</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
      aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="course.php">Courses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact </a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

  <!-- carousel -->
  <div id="demo" class="carousel slide carousel-fade" data-ride="carousel">
    <ul class="carousel-indicators">
      <marquee behavior="scroll" direction="left" scrollamount="10" height="620" style="color: white" ;>
        Admission Opens, lets Starts Larning.!!
      </marquee>
    </ul>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/cnq.jpg"  class="d-block w-100" alt="Los Angeles" width="1100" height="500">
        <div class="carousel-caption py-1">
          <h3>Shreeya Academy</h3>
          <p>New Grand opening in kalyan East..!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/enroll.jpg" alt="Chicago" width="1100" height="500">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/img2.jpg" alt="New York" width="1100" height="500">
        <div class="carousel-caption">
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

  <!-- about us -->
  <section class="my-5 px-3">
    <div class="py-5">
      <h2 class="text-center">About us</h2>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <img src="images/aboutus.jpg" class="img-fluid" aboutimg style="border-radius: 1%; height:417px">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <h2 class="display-3">Shreeya Academy.!</h2>
          <p class="py-4">Edison Club by Shreeya Academy kalyan, is an after-school hands-on science and technology
            training center for school kids. We provide unique learn with fun hobby programs in science, robotics and
            electronics designed specifically for the school kids in the age group 8 to 16. It also helps to spark
            curiosity and develop the inherent interest among children in science and technology.</p>
          <div class="card-footer text-center py-5">
            <a href="about.php" class="btn btn-success">Check for more</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Courses -->
  <section class="my-5 px-3" id="cources">
    <div class="py-5">
      <h2 class="text-center">Course Structure</h2>
      <hr>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="images/pbl.jpg" alt="Card image" height="320px">
            <div class="card-body">
              <h4 class="card-title">Project based Learning</h4>
              <a href="cs_submit/pbl.php" class="btn btn-primary">See More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="images/avc.jpg" alt="Card image" height="320px">
            <div class="card-body">
              <h4 class="card-title">Audio Visual Content</h4>
              <a href="avc.php" class="btn btn-primary">See more</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="images/mwe.jpg" alt="Card image" height="320px">
            <div class="card-body">
              <h4 class="card-title">12 Modules with 48 Expirements</h4>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- gallery -->
  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center">Courses</h2>
    </div>
    <div class="container-fluid">
      <div class="row px-5">
        <div class="col-lg-4 col-md-4 col-12">
          <a href="">
            <img src="images/electronics.jpg" class="img-fluid img-thumbnail mb-3"
              style="height: 360px; border-radius: 10%;">
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-12 style=height: 20px;">
          <a href="">
            <img src="images/mechanics.jpg" class="img-fluid img-thumbnail mb-3"
              style="height: 360px; border-radius: 10%;">
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-12 style=height: 20px;">
          <a href="">
            <img src="images/robotics.jpg" class="img-fluid img-thumbnail mb-3"
              style="height: 360px; border-radius: 10%;">
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-12 style=height: 20px;">
          <a href="">
            <img src="images/iot.jpg" class="img-fluid img-thumbnail mb-3" style="height: 360px; border-radius: 10%;">
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-12 style=height: 20px;">
          <a href="">
            <img src="images/3dprinting.jpg" class="img-fluid img-thumbnail mb-3"
              style="height: 360px; border-radius: 10%;">
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-12 style=height: 20px;">
          <a href="">
            <img src="images/arvr.jpg" class="img-fluid img-thumbnail mb-3 pl-3 pr-3"
              style="height: 360px; width:500px; border-radius: 10%;">
          </a>
        </div>
        <div class="col-lg-4 col-md-4 col-12 style=height: 20px;">
          <a href="">
            <img src="images/ai.jpg" class="img-fluid  img-thumbnail mb-3 pl-3 pr-3"
              style="height: 360px; width:500px; border-radius: 10%;">
          </a>
        </div>
  </section>

  <!-- contact -->
  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center">Contact</h2>
    </div>
    <div class="w-50 m-auto">
      <form action="userinfo.php" method="post">
        <div class="form-group">
          <label>username</label>
          <input type="text" name="user" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Email address</label>
          <input type="text" name="email" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Contact Number</label>
          <input type="text" name="contact" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>comment</label>
          <textarea name="comment" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success mb-2 col-md-12 text-center">Submit</button>
      </form>
    </div>
  </section>

  <!-- footer -->
  <footer class="bg-dark text-light text-center py-2">
    <p>Copyright &copy; 2023
      <a href="http://localhost/website/index.php" class="text-light font-weight-bold">Shreeya Acadamy</a>
      All rights reserved.
    </p>
    <p>Website designed by <a href="#" class="text-light font-weight-bold">siddhesh_designers</a></p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>