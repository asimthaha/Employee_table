<?php
    include "../connection.php";
    $conn = mysqli_connect($servername, $username, $password, "employee_data") or die("unable to connect to host");
    session_start();
    if (isset($_POST["Edit"])) {
        header("Location: Employee_table.php");
    } else {
        if (isset($_POST["Delete"])) {
            $query = "DELETE FROM `employee-table` WHERE 1";
            if ($conn->query($query) === TRUE) {
                echo "Record Deleted successfully";
                header("Location: Employee.php?");
                die();
            } else {
                echo "Error: " . $query . "<br>" . $conn->error;
        }}

    }