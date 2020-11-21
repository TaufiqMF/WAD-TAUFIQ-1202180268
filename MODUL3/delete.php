<?php
    include ('config.php');
    $sql = "DELETE FROM event_table WHERE name='" . $_POST['name'] . "'";
    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
        header("location:home.php");
    }
    else {
        echo "Error";
    }
    mysqli_close($conn);
?>