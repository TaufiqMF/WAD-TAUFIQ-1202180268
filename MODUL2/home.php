<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <title>Home</title>

    <style>
        .navbar-custom { 
            background-color: #0d19c0;
        } 
        td{
        text-align: center;
        }
        .fac{
        background-color: whitesmoke;
        }
        h5,p,a{
        text-align: center;
        }
        .container{
        align-content: center;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary"> 

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item active">
              <a class="nav-link" href="home.php" style="color: #0000A0;">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="booking.php" style="color: #0000A0;">Booking</a>
            </li>
          </ul>
        </div>

    </nav>
<!-- Title -->
    <h4 align="center" style="color: #6495ED;">EAD HOTEL</h4>
    <h5 align="center" style="color: #6495ED;">Welcome to 5 Star Hotel</h5>
    <br>
<!-- Title -->

<!-- Container -->
    <div class="container ">
        <div class="row">
            <div class="col-lg-4">
                <div class="card text-center" style="width: 18rem; box-shadow:0px 5px 10px 4px #cccc">
                    <img src="assets/img/standard.jpeg" class="card-img-top" alt="standard">
                    <div class="card-body top">
<!-- Container -->

<!-- Standard -->
                        <h5 class="card-title">Standard</h5>
                        <p class="card-text price"; style="color: blue">$ 90/Day</p>
                    </div>
                    <ul class="list-group list-group-flush lig">
                        <li class="list-group-item facilities p-3 mb-2 bg-light text-dark">Facilities</li>
                        <li class="list-group-item">1 Single Bed</li>
                        <li class="list-group-item">1 Bathroom</li>
                    </ul>
                    <div class="card-footer">
                    <div class="card-body grey-color">
                        <form action="booking.php" method="POST">
                            <input type="hidden" name="img" value="assets/img/standard.jpeg">
                        <small class="text-muted"><button type="submit" value="Standard" name="menu" class="card-link btn btn-primary text-center">Book Now</button></small>
                        </form>
                      </div>
                    </div>
                </div>
            </div> 
<!-- Standard -->

<!-- Superior -->
            <div class="col-lg-4">
                <div class="card text-center" style="width: 18rem; box-shadow:0px 5px 10px 4px #cccc">
                    <img src="assets/img/superior.jpg" class="card-img-top" alt="superior">
                    <div class="card-body top">
                        <h5 class="card-title">Superior</h5>
                        <p class="card-text price"; style="color: blue">$ 150/Day</p>
                    </div>
                    <ul class="list-group list-group-flush lig">
                        <li class="list-group-item facilities p-3 mb-2 bg-light text-dark">Facilities</li>
                        <li class="list-group-item">1 Double Bed</li>
                        <li class="list-group-item">1 Television and Wi-Fi</li>
                        <li class="list-group-item">1 Bathroom and hot water</li>
                    </ul>
                    <div class="card-footer">
                    <div class="card-body grey-color">
                        <form action="booking.php" method="POST">
                        <input type="hidden" name="img" value="assets/img/superior.jpg"/>
                        <small class="text-muted"><button type="submit" value="Superior" name="menu" class="card-link btn btn-primary">Book Now</button></small>
                        </form>
                      </div>
                    </div>
                </div>
            </div>
<!-- Superior -->

<!-- Luxury -->
            <div class="col-lg-4">
                <div class="card text-center" style="width: 18rem; box-shadow:0px 5px 10px 4px #cccc">
                    <img src="assets/img/luxury.jpg" class="card-img-top" alt="luxury">
                    <div class="card-body top">
                        <h5 class="card-title">luxury</h5>
                        <p class="card-text price"; style="color: blue">$ 200/Day</p>
                    </div>
                    <ul class="list-group list-group-flush lig">
                        <li class="list-group-item facilities p-3 mb-2 bg-light text-dark">Facilities</li>
                        <li class="list-group-item">2 Double Bed</li>
                        <li class="list-group-item">2 Bathroom and hot water</li>
                        <li class="list-group-item">1 Kitchen</li>
                        <li class="list-group-item">1 Television and Wi-Fi</li>
                        <li class="list-group-item">1 Workroom</li>
                    </ul>
                    <div class="card-footer">
                    <div class="card-body grey-color">
                        <form action="Booking.php" method="POST">
                        <input type="hidden" name="img" value="assets/img/luxury.jpg"/>
                        <small class="text-muted"><button type="submit" value="Luxury" name="menu" class="card-link btn btn-primary">Book Now</button></small>
                        </form>
                      </div>
                    </div>
                </div>
            </div>
<!-- Luxury -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
            crossorigin="anonymous"></script>
</body>
</html>