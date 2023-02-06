<!-- this file contain the code for navbar and then it can be included in other files -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="bg-danger">
    
    <nav class="navbar navbar-expand-lg bg-white">
      <div class="container-fluid flexi">
        <img src="logo.png" alt="">
        <div class="title">
        <p class="cell">Alumni Cell</p>
        <p class="college"> 
          National Institute of Technology, Delhi</p>
        </div>
        
        <button
        type="button"
        class="navbar-toggler"
        data-bs-target="#navbarNav"
        data-bs-toggle="collapse"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle Navbar"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        
          
          <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
            <ul class="navbar-nav mb-2 mb-lg-0">
              <li class="nav-item px-2">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item px-2">
                <a class="nav-link" href="#">Messages</a>
              </li>
              <li class="nav-item px-2">
                <a class="nav-link" href="#">About us</a>
              </li>
              <li class="nav-item dropdown px-2">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Other
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Gallery</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Team</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Privilege Card</a></li>
                </ul>
              </li>
              <li class="nav-item px-2">
                <a class="nav-link" href="#">Contact</a>
              </li>
              <button type="button" class="btn text-white">New Alumni</button>
            </ul>
          </div>
        </div>
      </nav>
      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
<!-- write your code below this line and also don't remove this line -->