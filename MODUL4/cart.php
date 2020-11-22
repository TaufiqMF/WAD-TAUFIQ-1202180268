<?php
include_once('function/config.php');
$database = new database();
session_start();
if (! isset($_SESSION['is_login'])) {
    header('location:login.php');
}

// get userid
$current = $_SESSION['email'];
$sql = "SELECT id FROM user WHERE email = '$current'";
$user_id = mysqli_query($conn,$sql);
$id_user=0;
while ($user_ids = mysqli_fetch_assoc($user_id)) {
    $id_user = $user_ids['id'];
}

//menampilkan item
$query = "SELECT * FROM cart WHERE user_id = '$id_user'";
$select = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
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
                    <a class="nav-link" href="#"><i class="fa fa-shopping-cart" style="font-size:22px"></i></a>
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
    <!-- end Navbar -->
    <!-- content -->
    <div class="container my-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <?php
                $i = 0;
                $totalharga = 0;
                while ($selects = mysqli_fetch_assoc($select)) {
                    echo '<tbody>';
                    echo '<tr>';
                    //
                    echo '<th scope="row">';
                    echo $i+=1;
                    echo '</th>';
                    // 
                    echo '<td>';
                    echo $selects['nama_barang'];
                    echo '</td>';

                    echo '<td>'; 
                    echo 'Rp ' . number_format($selects['harga'], 0, ",", ",");
                    $totalharga = $totalharga + $selects['harga'];
                    echo '</td>';
                            // 
                    echo '<td>'; ?> <!-- POTONG DISINI -->

                    <a href="delete.php?name=<?php echo $selects['id']; ?>" class="btn btn-danger btn-md" onclick="alert('Item berhasil dihapus')">Hapus</a>

                    <?php echo '</td>'; // SAMBUNG DISINI
                    echo '</tr>';
                    echo '</tbody>';
                }
                    echo '<tbody>';
                    echo '<tr>';

                    echo '<th scope="row">';
                    echo 'Total';
                    echo '</th>';

                    echo '<td>';
                    echo '';
                    echo '</td>';

                    echo '<td>';
                    echo '<b>';
                    echo 'Rp ' . number_format($totalharga, 0, ",", ",");
                    echo '</b>';
                    echo '</td>';

                    echo '<td>';
                    echo '';
                    echo '</td>';
            ?>
        </table>
        <!-- Footer -->
        <footer class="page-footer font-small blue">
            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="#"> WAD Beauty</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </div>
    <!-- end of content -->
</body>
</html>