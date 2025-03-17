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
                    <a class="nav-link" href="#">Contact </a>
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
        <h1 style="font-family:'Josefin Sans', sans-serif;;">Machine learning</h1>
        <p><i>It's Time to Learn, Think & build Exciting Projects..!</i></p>
        <hr style="color: blue;">
        <p>

            Machine learning is a subfield of artificial intelligence (AI) that involves the development of algorithms
            and statistical models that enable computer systems to learn from data, identify patterns, and make
            predictions or decisions without being explicitly programmed.
        </p>
        <p>
            In machine learning, algorithms are trained on data sets to learn patterns and relationships within the
            data, and then apply that learning to make predictions or decisions about new data. This can be used for a
            wide range of applications, including image and speech recognition, natural language processing, fraud
            detection, recommendation systems, and predictive analytics.
        </p>
        <p>
            Machine learning models can be categorized into three main types: supervised learning, unsupervised
            learning, and reinforcement learning. In supervised learning, the machine learning model is trained on
            labeled data, where the desired output is already known, and the model learns to make predictions based on
            that input-output mapping. In unsupervised learning, the model is trained on unlabeled data, where the
            objective is to identify patterns and relationships within the data without specific guidance. Reinforcement
            learning involves a system learning through trial and error, where it receives feedback in the form of
            rewards or penalties for specific actions.
        </p>
        <p>
            Some common machine learning algorithms include linear regression, decision trees, random forests, support
            vector machines, and neural networks. These algorithms can be applied in a variety of settings and
            industries, such as finance, healthcare, marketing, and transportation.
        </p>
        <p>
            Overall, machine learning is a powerful tool for data analysis and prediction that is driving many
            innovations in fields such as computer vision, natural language processing, and autonomous systems.
        </p>

        <div class="card-footer" style="background-color: rgb(215, 241, 241);">
            <a href="http://localhost/website/course.php" class="btn btn-primary">Back</a>
        </div>

    </div>

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
</body>

</html>