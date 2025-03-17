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
        <h1 style="font-family:'Josefin Sans', sans-serif;;">Audio Visual Content</h1>
        <p><i>It's Time to Learn, Think & build Exciting Projects..!</i></p>
        <hr style="color: blue;">
        <p>

            Audio visual content in machine learning refers to data that is in the form of both audio and visual
            information, such as videos or images with accompanying audio. With the rise of deep learning and neural
            networks, audio and visual content has become increasingly important for tasks such as object detection,
            speech recognition, and natural language processing.
        </p>
        <p>
            In the context of machine learning, audio visual content can be used as training data to build models that
            can recognize patterns and make predictions. For example, a machine learning model could be trained on a
            dataset of images with accompanying audio to recognize and classify objects in a video based on their visual
            and audio characteristics.
        </p>
        <p>
            One area where audio visual content is particularly useful is in the field of computer vision, where machine
            learning models can be trained to analyze and recognize patterns in images and videos. This can be applied
            to tasks such as object detection, facial recognition, and autonomous driving, where machines need to be
            able to interpret and understand visual and audio data to make decisions.
        </p>
        <p>
            Another area where audio visual content is important is in natural language processing, where audio and text
            data can be combined to improve the accuracy of speech recognition and language translation models.
        </p>
        <p>
            Overall, audio visual content is a valuable resource for machine learning applications, providing rich and
            complex data that can be used to build sophisticated models capable of understanding and analyzing complex
            patterns in audio and visual information.
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