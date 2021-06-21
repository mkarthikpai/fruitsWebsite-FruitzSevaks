<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <title>Contact Seller Section</title>

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
</head>

<body class="bg-warning">
    <section>
        <div class="container">
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="image/contact.svg" alt="" width="72" height="57">
                <h2 class="text-light">Contact form</h2>
                <p class="lead text-light">Below is a contact form. Each field is required and fill carefully. We will
                    soon contact you...</p>
            </div>
        </div>
    </section>

    <?php
        if ($_SERVER['REQUEST_METHOD']== 'POST') {
            $name= $_POST['name'];
            $email= $_POST['email'];
            $phone= $_POST['phone'];

            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "fruitzsevaks";

            $conn = mysqli_connect($servername, $username, $password, $database);
            if (!$conn){
                die("Sorry we failed to connect: ". mysqli_connect_error());
            }
            else {
                $data = "INSERT INTO `selling` ( `name`, `email`, `phno`) VALUES ( '$name', '$email', '$phone')"; 
                $result = mysqli_query($conn, $data);
                if($result){
                   echo' <div class="col-lg-7 container">
                    <div class=" alert alert-primary" role="alert">Your Data Has Been Successfully Submitted!</div>
                     </div>';
                }

            }
        }
    ?>

    <div class="container col-lg-7 ">
        <form action="" method="POST">
            <div class="form-group ">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" required>
                <div class="form-group ">
                    <div class="form-group ">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp"
                            required>
                        <div class="form-group ">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="tel" class="form-control" name="phone" id="phone" required>
                        </div>
                        <div class="col text-center">

                            <button type="submit" class="mt-3 text-center col-lg-6 btn btn-danger">Submit</button>
                        </div>
        </form>
    </div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
</body>

</html>