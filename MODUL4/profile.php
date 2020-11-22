<?php
include_once('function/config.php');
$database = new database();
session_start();
if (! isset($_SESSION['is_login'])) {
    header('location:login.php');
}

// Untuk Menampilkan Data Profil 
$current = $_SESSION['email'];
$sql = "SELECT * FROM user WHERE email = '$current'";
$data = mysqli_query($conn,$sql);
// END

// update profil
if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    
    if ($_POST['confirm_password'] == $_POST['password']){
        try {
            $sql = "UPDATE user SET nama='$nama', email='$email', no_hp='$no_hp', password='$password' WHERE email='$email'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            header('Refresh:2');
            echo '<div class="alert alert-warning" role="alert">';
            echo 'Berhasil di update!';
            echo '</div>';
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;
    }
    else{
            header('Refresh:2');
            echo '<div class="alert alert-danger" role="alert">';
            echo 'Gagal di update!';
            echo '</div>';
    }
    }
else{
    if(isset($_POST['cancel'])){
        header('location: index.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/fe18d29869.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body class="bg-white">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">WAD Beauty</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mx-auto" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active mr-3">
                    <a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart" style="font-size:22px"></i></a>
                </li>
                <li class="nav-item active mr-3">
                    <div class="dropdown">
                        <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Selamat Datang, <font class="text-primary"><?php echo $_SESSION['nama']?></font>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="profile.php">Profile</a>
                            <a class="dropdown-item" href="logout.php">Log Out</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!--  Navbar -->
    <!-- content -->
    <div class="container my-3">
        <div class="card centered mx-auto" style="width: 70%;">
            <div class="card-body">
                <h2 class="card-title" align="center">Profile</h2>
                <form method="post" action="">
                    <?php
                        while ($datas = mysqli_fetch_assoc($data)) {
                    ?>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control-plaintext" name="email" value="<?php echo $datas['email'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama" value="<?php echo $datas['nama'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nomor Handphone</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="no_hp" value="<?php echo $datas['no_hp'] ?>">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Password Confirm</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="confirm_password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Warna Navbar</label>
                            <div class="col-sm-10">
                                <select id="select-color" name="warna_nav">
                                    <option value="#f8f9fa">Light</option>
                                    <option value="#343a40">Dark</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <button type="submit" class="btn btn-primary btn-block" name="update">Submit</button>
                            <button type="submit" class="btn btn-light btn-block" name="cancel">Cancel</button>
                        </div>
                    <?php } ?>
                </form>
            </div>
        </div>
    </div>
    <!--  content -->
</body>
</html>