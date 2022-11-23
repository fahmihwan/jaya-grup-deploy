<?php

// $conn = mysqli_connect('localhost', 'root', '', 'db_dwi_jaya');
$conn = mysqli_connect('localhost', 'jayx9592_admin', '78S&&Q*pkkf5', 'jayx9592_db_dwi_jaya');
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit;
}
