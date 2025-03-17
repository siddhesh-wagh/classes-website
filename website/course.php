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

    <!-- jumbotron -->
    <div class="jumbotron text-center">
        <h1 style="font-family:'Josefin Sans', sans-serif;">Courses..</h1>
        <p><i>It's Time to Learn, Think & build Exciting Projects..!</i></p>
    </div>

    <!-- cource structure -->
    <div class="container">
        <h1 class="text-center my-" style="color:rgb(81, 81, 17)">Course structure</h1>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="images/pbl.jpg" alt="" style="height: 200px;">
                    <div class="card-body">
                        <h4 class="card-title">Machine Learning Project</h4>
                        <p class="card-text">Machine learning projects involve training algorithms on data for
                            prediction.
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="cs_submit/pbl.php" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="images/avc.jpg" alt="" style="height: 200px;">
                    <div class="card-body">
                        <h4 class="card-title">Audio-Visual Content</h4>
                        <p class="card-text">Media that combines audio and visual elements, such as videos, etc.</p>
                    </div>
                    <div class="card-footer">
                        <a href="cs_submit/avc.php" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="images/mwe.jpg" alt="" style="height: 200px;">
                    <div class="card-body">
                        <h4 class="card-title">Expirements</h4>
                        <p class="card-text">12 Modules, 24 hours each.!</p>
                    </div>
                    <div class="card-footer">
                        <a href="cs_submit/mwe.php" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- core area covered -->
    <div class="container">
        <hr>
        <h1 class="text-center my-4" style="color:rgb(81, 81, 17)">Core Areas Covered</h1>

        <div class="row">
            <div class="col text-center">
                <i class="fa-solid fa-plug-circle-check fa-fade m-2"></i>
                <br>
                <span>Electronics</span>
            </div>
            <div class="col text-center">
                <i class="fa-solid fa-solid fa-gears fa-fade m-2"></i>
                <br>
                <span>Mechanics</span>
            </div>
            <div class="col text-center">
                <i class="fa-solid fa-robot fa-fade m-2"></i>
                <br>
                <span>Robotics</span>
            </div>
            <div class="col text-center">
                <i class="fa-solid fa-globe fa-fade m-2"></i>
                <br>
                <span>IOT</span>
            </div>
            <div class="col text-center">
                <i class="fa-brands fa-unity fa-fade m-2"></i>
                <br>
                <span> 3D printing</span>
            </div>
            <div class="col text-center">
                <i class="fa-solid fa-chevron-down fa-fade m-2"></i>
                <br>
                <span>Ar-Vr</span>
            </div>
            <div class="col text-center">
                <i class="fa-brands fa-airbnb fa-fade m-2"></i>
                <br>
                <span>Artifical intellegence</span>
            </div>
        </div>
    </div>

    <!-- curricculum outcome -->
    <div class="container">
        <hr>
        <h1 class="text-center my-5" style="color:rgb(81, 81, 17)">Course structure</h1>
        <div class="row">
            <div class="col-sm-4 ">
                <div class="card " style="border-radius: 5%;">
                    <img class="card-img-top img-thumbnail" src="images/ca.jpg" alt="Image 1"
                        style="width: 100%; height: 280px; border-radius: 5%;">
                    <div class="card-body">
                        <h5 class="card-title ">Creative Intelligence</h5>
                        <button type="button" class="btn btn-info" data-toggle="collapse"
                            data-target="#ca">Detail</button>
                        <div id="ca" class="collapse"><br>
                            Creative intelligence is the ability to think creatively and come up with innovative
                            solutions to problems. It involves the ability to think outside of the box, see things from
                            different perspectives, and come up with unique ideas and approaches.Creative intelligence
                            is important in many fields, such as art, design, technology, and business.
                        </div>
                    </div>
                </div><br>
            </div>
            <div class="col-sm-4 ">
                <div class="card " style="border-radius: 5%;">
                    <img class="card-img-top img-thumbnail" src="images/ai.jpg" alt="Image 2"
                        style="width: 100%; height: 280px; border-radius: 5%;">
                    <div class="card-body">
                        <h5 class="card-title ">Analytical Intelligence</h5>
                        <button type="button" class="btn btn-info" data-toggle="collapse"
                            data-target="#ai">Detail</button>
                        <div id="ai" class="collapse"><br>
                            Analytical intelligence refers to the ability to analyze complex information and solve
                            problems using logical reasoning and critical thinking. It involves the ability to break
                            down complex information into smaller parts, identify patterns and relationships, and use
                            data and evidence to make informed decisions. Analytical intelligence is important in many
                            fields, including science, technology, engineering, and mathematics.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 ">
                <div class="card " style="border-radius: 5%;">
                    <img class="card-img-top img-thumbnail" src="images/psk.jpg" alt="Image 3"
                        style="width: 100%; height: 280px; border-radius: 5%;">
                    <div class="card-body">
                        <h5 class="card-title ">Problem Solving Skills</h5>
                        <button type="button" class="btn btn-info" data-toggle="collapse"
                            data-target="#psk">Detail</button>
                        <div id="psk" class="collapse"><br>
                            Problem-solving skills refer to the ability to identify, analyze, and solve problems using a
                            logical and systematic approach. This involves identifying the root cause of a problem,
                            developing potential solutions, evaluating their effectiveness, and implementing the best
                            solution. Effective problem-solving skills are important in many areas of life, from
                            personal relationships to professional settings.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- Build -->
    <div class="container">
        <hr>
        <h1 class="text-center my-4" style="color:rgb(81, 81, 17)">Build</h1>
        <div class="row">
            <div class="col text-center">
                <i class="fa-solid fa-children fa-fade"></i>
                <br>
                <span>Strong Fundamentals</span>
            </div>
            <div class="col text-center">
                <i class="fas fa-user-check fa-fade"></i>
                <br>
                <span>Strategic Thinking</span>
            </div>
            <div class="col text-center">
                <i class="fas fa-people-arrows fa-fade"></i>
                <br>
                <span>Increase Awareness</span>
            </div>
        </div>
    </div>
    <br>
    <!-- Encourages -->
    <div class="container">
        <hr>
        <h1 class="text-center my-5" style="color:rgb(81, 81, 17)">Encourages</h1>
        <div class="row">
            <div class="col-sm-4">
                <div class="card" style="border-radius: 5%;">
                    <img class="card-img-top" src="images/ft.jpg" alt="Image 1"
                        style="width: 90%; height: 250px; border-radius: 5%;">
                    <div class="card-body">
                        <h5 class="card-title text-center">Free Thinking</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="border-radius: 5%;">
                    <img class="card-img-top" src="images/ia.jpg" alt="Image 2"
                        style="width: 100%; height: 250px; border-radius: 5%;">
                    <div class="card-body">
                        <h5 class="card-title text-center">Innovative Approach</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="border-radius: 5%;">
                    <img class="card-img-top" src="images/daq.jpg" alt="Image 3"
                        style="width: 90%; height: 250px; border-radius: 5%;">
                    <div class="card-body">
                        <h5 class="card-title text-center">Discussion & Questioning</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- Attains -->
    <div class="container">
        <hr>
        <h1 class="text-center my-4" style="color:rgb(81, 81, 17)">Attains</h1>
        <div class="row">
            <div class="col text-center">
                <i class="fas fa-trophy fa-fade"></i>
                <br>
                <span>Sense of Achievment</span>
                <hr>
            </div>
            <div class="col text-center">
                <i class="fas fa-book fa-fade"></i>
                <br>
                <span>Theory-Practcal Connect</span>
                <hr>
            </div>
            <div class="col text-center">
                <i class="fas fa-brain fa-fade"></i>
                <br>
                <span>Body-Mind Engagement</span>
                <hr>
            </div>
        </div>
    </div>
    <br>

    <!-- footer -->
    <footer class="bg-dark text-light text-center py-2">
        <p>Copyright &copy; 2023 
           <a href="http://localhost/website/index.php" class="text-light font-weight-bold">Shreeya Acadamy</a> 
           All rights reserved.</p>
        <p>Website designed by <a href="#" class="text-light font-weight-bold">siddhesh_designers</a></p>
      </footer>
      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/caf50eec32.js" crossorigin="anonymous"></script>
</body>

</html>