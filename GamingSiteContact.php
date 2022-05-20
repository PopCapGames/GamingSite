<!DOCTYPE html>
<html lang="en">

<style>

footer{
        background-color: black;
        margin-top: 200px;
    }

    h2{
        writing-mode: vertical-rl;
        font-size: 70px;
        transform: rotate(180deg);
        margin-left: 150px;
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

<body>

<form action="GamingSiteOutput.php" method="POST">

    <div class="container mt-5 pt-5">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-8 bg-dark px-5 rounded z-depth-5 mt-5">
          <div class="row">
            <div class="card-header bg-dark mt-4">
              <h1 class="text-white">Feedback</h1>
              <div class="col-sm-12 border border-bottom border-primary"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-5 border-right">
              <form>
                <div class="col-md-12">
                  <div class="md-form form-group">
                    <input type="text" id="name" name="name" class="form-control text-white" required="">
                    <label for="name">Name</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="md-form form-group">
                    <input type="email" id="email" name="email" class="form-control text-white" required="">
                    <label for="email">E-mail</label>
                  </div>
                </div>
                <div class="col-md-12 pt-2">
                  <div class="form-check">
                    <input type="checkbox" id="check" name="check" class="form-check-input" required="">
                    <label for="check" class="form-check-label text-white">I am not a Robot</label>
                  </div>
                </div>
            </div>
            <div class="col-md-7 mt-2">
              <div class="md-form">
                <textarea type="text" id="message" name="message" rows="4" class="form-control md-textarea text-white" required=""></textarea>
                <label for="message">Your Message</label>
                <button type="submit" class="btn btn-primary btn-block">Send Message</button>
              </div>
            </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>


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