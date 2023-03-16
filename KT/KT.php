<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
     
    
    .jumbotron {
      background-image: url("magi.png");
      background-repeat: no-repeat;
      
    }
  </style>
</head>
<body>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="d-flex flex-grow-1">
        <span class="w-100 d-lg-none d-block"></span>
        <a class="navbar-brand">
        <i class="fa-solid fa-tree fa-2x"></i>
        </a>
        <div class="w-100 text-right">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar7">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
    <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar7">
        <ul class="navbar-nav ml-auto flex-nowrap">
            <li class="nav-item">
                <a href="KT.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="features.php" class="nav-link">Features</a>
            </li>
            <li class="nav-item">
                <a href="pricing.php" class="nav-link">Download</a>
            </li>
            <li class="nav-item">
                <a href="team.php" class="nav-link">Team</a>
            </li>
            <li class="nav-item">
                <a href="about.php" class="nav-link">About</a>
            </li>
            <li class="nav-item">
                <a href="login.php" class="nav-link">Login</a>
            </li>
        </ul>
    </div>
</nav>

<div class="jumbotron text-center">
    
  
    <h1>Choose your next trip</h1>      
    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
    <div class="row">
      <div class="col-2"></div>
      <div class="col-8">
        <div class="card">
          <div class="row" style="margin-left: 20px; margin-right: 20px; margin-top: 20px; margin-bottom: 20px;">
            <div class="col-6">
            <input type="text" class="form-control" placeholder="From"><br>
            <input type="text" class="form-control" placeholder="To">
            </div>
            <div class="col-3">
            <input type="text" class="form-control" placeholder="DD.MM.YYYY"><br>
            <select class="form-select" aria-label="Default select example">
              <option selected>Edit</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
            </div>
            <div class="col-3" style="margin-top: 5px;">
            <button type="button" class="btn btn-primary btn-lg" style="padding-left:50px; padding-right:50px; padding-top:30px; padding-bottom: 30px;">Select</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-2"></div>
    </div>


  </div>
</div>
 
<div class="container bg-3 text-center">    
  
  <div class="row">
    <div class="col-sm-4">
      
      <img src="Barcelona.PNG" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-4"> 
      
      <img src="NewYork.PNG" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-4">
      
      <img src="Barcelona.PNG" class="img-responsive" style="width:100%" alt="Image">
    </div>
    
  </div>
</div><br>

<div class="container bg-3 text-center">    
  <div class="row">
    <div class="col-sm-4">
      
      <img src="Barcelona.PNG" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-4"> 
      
      <img src="NewYork.PNG" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-4"> 
      
      <img src="Barcelona.PNG" class="img-responsive" style="width:100%" alt="Image">
    </div>
    
  </div>
</div><br><br>

<h1 class="text-center ">What people say</h1>

<div class="container">
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias et saepe ipsa cumque. Non possimus inventore illo dolor, repellat expedita, blanditiis totam minima quaerat sapiente tempore magnam laudantium unde nisi.</p>
        
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque similique odio quis repellendus non! Quaerat nam, modi vel pariatur alias accusantium! Totam repellendus delectus animi corrupti, culpa omnis aspernatur suscipit.</p>
        
      </div>
    </div>
  </div>
</div>
</div>


<br><br>


<section class="pt-5 pb-5">
  <div class="footer">
    <div class="pt-5 pb-5">
        <div class="container">
            <div class="row  ">
                <div class="col-xs-6 ">
                    <a href="#">
                        <svg class="d-block mb-4" width="36" height="36" viewBox="0 0 612 612" xmlns="http://www.w3.org/2000/svg" focusable="false">
                            <title>Bootstrap</title>
                            <path fill="currentColor" d="M510 8a94.3 94.3 0 0 1 94 94v408a94.3 94.3 0 0 1-94 94H102a94.3 94.3 0 0 1-94-94V102a94.3 94.3 0 0 1 94-94h408m0-8H102C45.9 0 0 45.9 0 102v408c0 56.1 45.9 102 102 102h408c56.1 0 102-45.9 102-102V102C612 45.9 566.1 0 510 0z"></path>
                            <path fill="currentColor" d="M196.77 471.5V154.43h124.15c54.27 0 91 31.64 91 79.1 0 33-24.17 63.72-54.71 69.21v1.76c43.07 5.49 70.75 35.82 70.75 78 0 55.81-40 89-107.45 89zm39.55-180.4h63.28c46.8 0 72.29-18.68 72.29-53 0-31.42-21.53-48.78-60-48.78h-75.57zm78.22 145.46c47.68 0 72.73-19.34 72.73-56s-25.93-55.37-76.46-55.37h-74.49v111.4z"></path>
                        </svg>
                    </a>
                    <address class="color-light-20">
                  1600 Amphitheatre Parkway<br>
                  Mountain View, CA 94043
                </address>
                    <ul class="list-unstyled list-light">
                        <li><a href="#">Disclaimer</a></li>
                    </ul>
                </div>

                <div class="col-xs-6">
                    <h4 class="my-2">Product</h4>
                    <ul class="list-unstyled list-light text-white">
                        <li><a class=" " href="#">Pricing</a></li>
                        <li><a href="#">Features</a></li>
                        <li><a href="#">Customers</a></li>
                        <li><a href="#">Store</a></li>
                    </ul>
                </div>
                <br style="clear:both" class="hidden-sm-up">
                <div class="col-xs-6">
                    <h4 class="my-2">Company</h4>
                    <ul class="list-unstyled list-light">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-xs-6">
                    <h4 class="my-2">Connect</h4>
                    <ul class="list-unstyled list-light">
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Social</a></li>
                        <li><a href="#">Community</a></li>
                    </ul>
                    <p class="color-light mt-2">Stay up-to-date!</p>
                    <form>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-control-sm" placeholder="Email" aria-label="Email" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary btn-sm form-control-sm" type="button">OK</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <hr>
            <div class="row f-flex justify-content-between" style="justify-content: space-between;">
                <div class="col-md-8 text-xs-center  text-left   my-1">
                    <p class="mt-2  text-muted"> © Copyright 2023 • All Rights Reserved | <a class=" " href="#">Disclaimer</a> | <a class=" " href="about.php">Contact</a></p>
                </div>
                <div class="col-md-4 text-xs-center   text-lg-right   my-1">
                    <div class="btn-container  mt-1 text-md-right text-sm-center">
                        <div class="mb-1 mr-3 align-self-right pt-0 d-inline-block">
                            <a href="#" role="button" class=" btn-white p-2 m-2 btn btn-round btn-rised btn-icon x"><i class="fab fa-twitter fa-lg color-light" aria-hidden="true"></i></a>
                            <a href="#" role="button" class="btn-white p-2 m-2 btn btn-round btn-rised btn-icon "><i class="fab fa-facebook fa-lg" aria-hidden="true"></i></a>
                            <a href="#" role="button" class="btn-white p-2 m-2 btn btn-round btn-rised btn-icon  "><i class="fab fa-linkedin fa-lg" aria-hidden="true"></i></a>
                            <a href="#" role="button" class="btn-white p-2 m-2 btn btn-rised btn-round btn-icon  "><i class="fab fa-google-plus fa-lg" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</footer>
</div>

</body>
</html>
