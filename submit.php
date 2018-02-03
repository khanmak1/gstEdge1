<?php

$servername="localhost";
$username="root";
$password="12345";
$dbname="gstedge";

$con = mysqli_connect($servername,$username,$password,$dbname);



$year = $_POST['year']; // Fetching Values from URL
$no_emp = $_POST['no_emp'];



$query = "insert into employee(serial_no,year,no_emp,time) values (DEFAULT,'$year','$no_emp',CURRENT_TIMESTAMP)";

if (mysqli_query($con,$query)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
?>