<!DOCTYPE html>
<html lang="en">

<style>

footer{
        background-color: black;
        margin-top: 250px;
    }

    h2{
        writing-mode: vertical-rl;
        font-size: 70px;
        transform: rotate(180deg);
        margin-left: 150px;
    }
    .container{
        margin-top: 100px;
    }

</style>

<head>
    <title>PopCapGames/Products</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

</head>

<div class="container">

    <center>  
    
    <?php
    $conn = mysqli_connect("localhost", "root", "", "gamingsiteoutput");
    
    if($conn === false){
        die("ERROR: Could not connect. " 
            . mysqli_connect_error());
    }
    
    $name =  $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $message = $_REQUEST['message'];
    
    $sql = "INSERT INTO contactoutput  VALUES ('$name' , '$email' , '$message')";
    if(mysqli_query($conn, $sql)){
        echo "<h1>successfully submitted<hr></h1>"; 
     
        echo nl2br("\n<p>Name: <mark>$name</mark></p>\n <p>Email: <mark>$email</mark></p>\n");

    } else{
        echo "ERROR: Hush! Sorry $sql. " 
            . mysqli_error($conn);
    }
    
    mysqli_close($conn);
    ?>
    
    </center>
    
    </div>

</body>

<footer class="text-white">
    <div class="container-fluid pt-5 pb-5">
        <div class="row">
            <div class="col-md-2">
                <h2 class="font-weight-bold mt-5 pt-2">PopCapGames</h2>
  
            </div>
  
            <div class="col-md-3">
                <h4 class="font-weight-bold mb-3">About</h4><hr/>
                <p>About us</p>
                <p>Careers</p>
                <p>Corporate news</p>
                <p>Refund policy</p>
                <p>Terms & Conditions</p>
                <p>Help and support</p>
            </div>
  
            <div class="col-md-3">
                <h4 class="font-weight-bold mb-3">Community</h4><hr/>
                <p>Forum</p>
                <p>Blog</p>
                <p>Newsroom</p>
                <p>Games hub</p>
                <p>Best Games</p>
                <p>Redeem a Gift</p>
            </div>
  
            <div class="col-md-3">
                <h4 class="font-weight-bold mb-3">Information</h4><hr/>
                <p>Developers seeking publishing</p>
                <p>Publishers seeking retail partners</p>
                <p>Affiliates - Influencers / Streamers</p>
                <p>Affiliates - Website / Blog</p>
                <p>Student Discount</p>
            </div>

        </footer>


        </html>