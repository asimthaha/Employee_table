<?php
    include "./connection.php";
    $conn = mysqli_connect ($servername , $username , $password, "Employee_data") or die("unable to connect to host");

    print_r($_POST);

    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $employee_id = $_POST['Employee_id'];
    $phone = $_POST['Number'];
    $photo = $_POST['Photo'];
   
    $query = "INSERT INTO `employee-table`(`Id`, `Name`, `Employee_id`, `Email`, `Contact_number`, `Photo`) 
    VALUES ('',' $name','$email','$employee_id',' $phone','$photo')";
    
    if ($conn->query($query) === TRUE) {
        echo "New record created successfully, redirecting to Login page";
        header("Location: Employee.php");
        die();
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
    
?>