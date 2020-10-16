<!doctype html>
<html lang="en">

<?php
$total_price = 0;
$cst_service = 0;
$price = 0;

if (isset($_POST['room'])) {
    $room = $_POST['room'];
}

if (isset($_POST['durasi'])) {
    $durasi = $_POST['durasi'];
}

if (isset($_POST['date'])) {
    $date = $_POST['date'];
}

if (isset($_POST['durasi'])) {
    $durasi = $_POST['durasi'];
    $rangeDay = $_POST['durasi'];
}

if (isset($_POST['nama'])) {
    $nama = $_POST['name'];
}


if (isset($_POST['service'])) {
    $service = $_POST['service'];
}

if (isset($_POST['phone'])) {
    $phone = $_POST['phone'];
}

?>

<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <title>My Booking</title>

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
<?php 
    $id=rand();
    $nama=$_POST['nama'];
    $date=date_create($_POST['date']);
    $checkIn = date_format($date,"d/m/Y");
    date_add($date,date_interval_create_from_date_string($_POST['durasi']." days"));
    $checkOut = date_format($date,"d/m/Y" );
    $roomType = $_POST['room'];
    $service="";
    $phone=$_POST['phone'];
    $total = 0;
    if($roomType == "Standard"){
        $total = 90 * $_POST['durasi']; 
    }else if($roomType == "Superior"){
        $total = 150 * $_POST['durasi'];
    }else if($roomType == "Luxury"){
        $total = 200 * $_POST['durasi'];
    }
    if(isset($_POST['service'])){
        $services=$_POST['service'];
        foreach($services as $cost){
            $service = $service.'<li>'.$cost. '</li>';
            $total += 20;
        }
    }else {
        $service = 'no service';
    }
    ?>
    <br>
    <div class="container-sm">
    <fieldset>
    <table class="table" style="margin-top: 1cm; margin-left: 0.5cm">
          <thead>
            <tr>
    <th scope="col">Booking Number</th>
    <th scope="col">name</th>
    <th scope="col">Checkin</th>
    <th scope="col">Checkout</th>
    <th scope="col">Room Type</th>
    <th scope="col">Phone Number</th>
    <th scope="col">Service</th>
    <th scope="col">Total Price</th>
    </tr>
</thead>
    <tr>
    <td><?= $id ?></td>
    <td><?= $nama ?></td>
    <td><?= $checkIn ?></td>
    <td><?= $checkOut ?></td>
    <td><?= $roomType ?></td>
    <td><?= $phone ?></td>
    <td><?= $service ?></td>
    <td>$ <?= $total ?></td>
    </tr>
    </fieldset>
    </div>

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>