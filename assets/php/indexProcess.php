<?php
    include "dbconfig.php";

    // Show province list
    $query =  "SELECT * FROM provinsi ORDER BY id";
    $result = mysqli_query($con, $query);
?>