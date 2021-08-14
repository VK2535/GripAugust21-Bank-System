<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TSF Bank Made By Vicky</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
<?php
  require_once 'config.php';
  include 'navbar.php';
  ?>
    <h1 class="glow1">WELCOME TO TSF BANK</h1>
    <div class="container-fluid">
        <div class="row mt-4 dflex">
            
            <div class="col-md-8 col-sm-8 dflex">
                <img class="imgb"  src="img/bank-icon.jpg" alt="">
                <a href="https://www.thesparksfoundationsingapore.org/" target="_blank" > 
                    <Button class="btn btn1 m-2">Join Us Now</Button>
                </a>    
            </div>
            
                
            
        </div>
       
        <div class="row mt-4">
          
            <div class=" col-sm-6 col-md-4 dflex">
                <img src="img/view.gif" class="imgb2" alt="">
                <a href="viewusers.php">
                    <Button class="btnx btn1 m-3">View Users</Button>
                </a>
            </div>
            <div class="col-sm-6 col-md-4 dflex">
                <img src="img/transfer_moneygif.gif" class="imgb2" alt="">
                <a href="transfermoney.php">
                    <Button class="btnx btn1 m-3">Transfer Money</Button>
                </a>
            </div>
            <div class="col-sm-6 col-md-4 dflex">
                <img src="img/history.gif" class="imgb2" alt="">
                <a href="transactionhistory.php">
                    <Button class="btnx btn1 m-3">History</Button>
                </a>
            </div>
        </div>

      
        <div class="row">
            <h2 class="glow2"><strong>Our Services</strong></h2>   <br>
            <div class="col-md-4 col-lg-3 col-sm-6 dflex">
                <img src="img/internet-banking.jpg" class="imgb2" alt="">
                <div class="content">
                    <h3>Internet Banking</h3>
            </div>
            </div>
             <div class="col-md-4 col-lg-3 col-sm-6 dflex">
                <img src="img/payment-service.png" class="imgb2" alt="">
                  <div class="content">
                    <h3>Payment Services</h3>
            </div>
            </div>
             <div class="col-md-4 col-lg-3 col-sm-6 dflex">
                <img src="img/loan.jpg" class="imgb2" alt="">
                  <div class="content">
                    <h3>Get Loans</h3>
            </div>
            </div>
              <div class="col-md-4 col-lg-3 col-sm-6 dflex">
                <img src="img/insurance.jpg" class="imgb2" alt="">
                  <div class="content">
                    <h3>Insurance</h3>
               </div>
            </div>
        </div>

        <div class="row">
            <h2 class="glow2"><strong>About Us</strong></h2>   <br>
            <br><p class="par">
                TSF BANK ,as a full service universal bank, provides a wide gamut of financial products and services encompassing deposits,
                loans, payment services and investment solutions. We are committed to understanding our customers’ needs and aim at
                consistently delivering relevant financial solutions and excellent customer service.<br>
                Customers can also reach out to us through our 24x7 customer care facilities. 
                We strive to provide our customers with the best possible combination of safety,
                convenience and innovation in all of our financial products and services.</p>
          
        </div>
       
        
        <?php
        include_once('footer.php');
    ?>      
       
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>