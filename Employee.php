<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Employee.css">

</head>

<body>
    <?php
    include './connection.php';
    $conn = mysqli_connect($servername, $username, $password, "employee_data") or die("unable to connect to host");
    session_start();

    $userId = "";


    $query = "SELECT * FROM `employee-table`";
    if ($userId) {
        $query = "SELECT * FROM `employee-table`";
    }

    $users = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($users)) {
        $name = $row["Name"];
        $number = $row['Contact_number'];
        $photo = $row['Photo'];
        $email = $row['Email'];
        $employee_id = $row['Employee_id'];


        $edit = "<button type='submit' name='Edit' class='icon edit-icon'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
            <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
            <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
          </svg></button>";

        $delete = "<form action='./delete_employee.php' method='post'><button type='submit' name='Delete' class='icon delete-icon'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
            <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
            <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
          </svg></button>";


        echo"<div>
                <table class='table'>
                <thead class='thead-dark'>
                    <tr>
                        <th scope='col'>Name</th>
                        <th scope='col'>Employee ID</th>
                        <th scope='col'>Email</th>
                        <th scope='col'>Contact Number</th>
                        <th scope='col'>Photo</th>
                        <th scope='col'>$edit</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td  name='Name' value=<?php echo $name</td>
                        <td  name='Employee_id' value=<?php echo$employee_id </td>
                        <td name='Email' value=<?php echo $email </td>
                        <td name='Number' value=<?php echo $number </td>
                        <td name='Photo' value=<?php echo $photo </td>
                        <td name='' value=<?php echo  $delete </td>
                    </tr>
    
                </tbody>
            </table>
            </div>";
    }

    ?>;


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>