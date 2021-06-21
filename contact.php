
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Contact Frootz Sevaks</title>
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
        }

        .bg {
            /* The image used */
            background-image: url("image/back.jpg");

            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;

        }
    </style>
</head>

<body>

    <?php require 'nav.php'?>

    <div class="bg">

    <?php
            if ($_SERVER['REQUEST_METHOD']=='POST'){
                $name = $_POST['name'];
                $reason = $_POST['reason'];
                $email = $_POST['email'];
                $city = $_POST['city'];
                $state = $_POST['state'];

                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "fruitzsevaks";

                $conn = mysqli_connect($servername, $username, $password, $database);

                    if (!$conn){
                        die("Sorry we failed to connect: ". mysqli_connect_error());
                    }
                    else { 
                        $sql = "INSERT INTO `contact` ( `Name`, `Reason`, `Email`, `City`, `State`) VALUES ( '$name', '$reason', '$email', '$city', '$state')";
                        $result = mysqli_query($conn, $sql);

                        if($result){
                           echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
                       <strong>Success!</strong> Thanks For The Data, We Will Be Contacting You Through Mail<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                       </button>
                       </div>';
                       }
                       else {
                           echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
                           <strong>Error!</strong> We are facing technical issues and  Your entry was not successfully submited...
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                           </button>
                           </div>';
                       }
                    
                    }
            }
            
        ?>

        <div class="container  col-lg-7">

            <h1 class="text-center text-warning">Contact Us For Any Query</h1>




            <form action="contact.php" method="post">
                <!-- <div class="form-row"> -->
                <div class="form-group ">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name">
                </div>
                <!-- </div> -->

                <div class="form-group ">
                    <label for="reason">Reason For Contacting</label>
                    <input type="text" name="reason" class="form-control" id="reason" placeholder="Enter the reason">
                </div>


                <div class="form-group ">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email id">
                </div>


                <!-- <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Enter address">
            </div> -->


                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" name="city" class="form-control" id="city" placeholder="Enter City">
                </div>



                <div class="form-group ">
                    <label for="state">State</label>
                    <select name="state" id="state" class="form-control">
                        <option selected>Choose...</option>
                        <option>Karnataka</option>
                        <option>Kerala</option>
                        <option>Goa</option>
                        <option>Tamil Nadu</option>
                        <option>Maharashtra</option>
                        <option>Andhra Pradesh</option>
                        <option>Telangana</option>
                        <option>Other</option>
                    </select>
                </div>



                <button type="submit" class="btn btn-danger col-lg-12">Submit</button>
            </form>


        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>

</html>