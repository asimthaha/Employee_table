<?php
    include "./connection.php";
    session_start();
    $conn = mysqli_connect($servername, $username, $password, "employee_data") or die("unable to connect to host");
    $id = $_SESSION['Id'];
    $userId = $_SESSION['Id'];
    echo 'hello';
    if (isset($_POST["Delete"])) {
        $query = "DELETE FROM `employee-table` WHERE 1";
        if ($conn->query($query) === TRUE) {
            echo "Record Deleted successfully";
            header("Location: Employee.php?");
            die();
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
    }}
?>