

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>USED CARS - REGISTER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <link rel="stylesheet" href="./Employee.css" />
    

</head>

<body class="main-body">
    <div class="container login-container">
        <main class="login-wrapper register">
            <form action="Employee_submit.php" method="POST" name="myform">
                <h3 class="login-heading"> Employee Data</h3>
                <section class="row">
                        <div class="form-element">
                            <label for="" class="form-label">Name<span class="required-asterisk">*</span>
                            </label>
                            <span class="form-item">
                                <input type="text" name="Name" id="name" placeholder="Enter Your Name" />
                                <span class="error"></span>
                            </span>
                        </div>
                        <div class="form-element">
                            <label for="" class="form-label">Employee ID</label>
                            <span class="form-item">
                                <input type="text" name="Employee_id" id="employee_id" placeholder="Enter Employee id" />
                                <span class="error"></span>
                            </span>
                        </div>
                        <div class="form-element">
                            <label for="" class="form-label">Email<span class="required-asterisk">*</span></label>
                            <span class="form-item">
                                <input type="email" name="Email" id="email" placeholder="Enter Email" />
                                <span class="error"></span>
                            </span>
                        </div>
                        <div class="form-element">
                            <label for="" class="form-label"> Mobile Phone<span class="required-asterisk">*</span></label>
                            <span class="form-item">
                                <input type="text" name="Number" id="phone" placeholder="Enter Mobile Number" />
                                <span class="error"></span>
                            </span>
                        </div>
                        <div class="form-element">
                            <label for="" class="form-label"> Photo<span class="required-asterisk">*</span></label>
                            <span class="form-item">
                                <input type="file" name="Photo"  id="photo" />
                                <span class="error"></span>
                            </span>
                        </div>
                </section>


                <div class="main-btns text-center pt-5">
                    <button class="btn btn-primary" type="submit">Submit</button>
                    <button type="delete" class=" btn btn-danger">Cancel</button>
                   
                </div>
            </form>
        </main>
    </div>
    <footer>

    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="./assignment.js"></script>
</body>

</html>