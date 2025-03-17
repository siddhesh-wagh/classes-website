<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css style sheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- bootstarp -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
    <title>Website</title>
</head>

<body style="background-color: rgb(197, 184, 167);">
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <!-- <img src="images/logo.jpg" alt="#" height="50px" width="50x"> -->
        <a class="navbar-brand" href="#">Shreeya_Academy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="http://localhost/website/index.php">Home <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/website/course.php">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/website/about.php">About Us </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/website/contact.php">Contact </a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <!-- jumbotron -->
    <div class="jumbotron">
        <div class="text-center">
            <h1 style="font-family:'Josefin Sans', sans-serif;">About us..!</h1>
            <p><i>It's Time to Learn With Shreeya Academy, Think & build Exciting Projects..!</i></p>
        </div>
        <hr style="color: blue;">
        <section class="my-5 px-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <img src="images/aboutus.jpg" class="img-fluid" aboutimg style="border-radius: 1%; ">
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <h2 class="display-3">Shreeya Academy.!</h2>
                        <p class="py-3">Edison Club by Shreeya Academy kalyan, is an after-school hands-on science and
                            technology
                            training center for school kids. We provide unique learn with fun hobby programs in science,
                            robotics and
                            electronics designed specifically for the school kids in the age group 8 to 16. It also
                            helps to spark
                            curiosity and develop the inherent interest among children in science and technology.</p>
                        <p>
                            In this age, it is important for kids to have scientific and technological knowledge. we
                            believe that
                            education should not be limited to classrooms and books and their interest should be aroused
                            and encouraged
                            at this tender age. At Shreeya academy, we have been offering robotics and scientific
                            activity based
                            programs for kids in schooling groups. helping them to imporve their hand-on skills and
                            <i>Science,
                                Technology, Robotics & Machine Learning</i>
                        </p>
                    </div>
                </div>
            </div>
        </section>

          <!-- Videos -->
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-4">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-LIMVVfRp6Q"></iframe>
        </div>
      </div>
      <div class="col-md-4">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/VIDEO_ID_2"></iframe>
        </div>
      </div>
      <div class="col-md-4">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/VIDEO_ID_2"></iframe>
        </div>
      </div>
    </div>
    <br>
  </div>

  
        <div class="card-footer text-center" style="background-color: rgb(215, 241, 241);">
            <a href="http://localhost/website/index.php" class="btn btn-success">Back</a>
        </div>

    </div>

    <!-- footer -->
    <footer class="bg-dark text-light text-center py-2">
        <p>Copyright &copy; 2023
            <a href="http://localhost/website/index.php" class="text-light font-weight-bold">Shreeya Acadamy</a>
            All rights reserved.
        </p>
        <p>Website designed by <a href="#" class="text-light font-weight-bold">siddhesh_designers</a></p>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>