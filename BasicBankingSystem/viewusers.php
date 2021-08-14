<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View All Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
   
   
    <style type="text/css">
      /* button{
        transition: 1.5s;
        background-color: red;
      }
      button:hover{
        background-color:orange;
        color: white;
      }*/

      .btn{
          background-color:#00ffaa;
      } 


body{
    background: url('img/bank_bg.jpg') no-repeat fixed;
    background-size: cover;
    
}

.btn{
   
    border:3px solid black;
    color:#fff;
    background-color: rgb(250, 0, 0);
    border-radius:20px;
    box-shadow: inset 0 0 0 0 rgb(0, 255, 76);
    transition: All 0.9s ease;
    transition-delay: 0.1s;
    font-size: 1.3rem;
    outline: none;
    cursor: pointer;
}
.btn1:hover{
    box-shadow: inset 170px 0px 0px 0px rgb(157, 255, 0);
    cursor:pointer;
    color:rgb(15, 15, 15);
    border: 3px solid red;
}

.glow1 {
    margin-top:0.9rem;
    margin-bottom:0.9rem;
    font-size: 4rem;
    color: #ffffff;
    text-align: center;
    -webkit-animation: glow 1s ease-in-out infinite alternate;
    -moz-animation: glow 1s ease-in-out infinite alternate;
    animation: glow2 1s ease-in-out infinite alternate;
  }

  @keyframes glow2 {
    from {
        text-shadow: 0 0 10px #71ff4d, 0 0 20px #71ff4d, 0 0 30px #71ff4d, 0 0 40px #71ff4d, 0 0 50px #71ff4d, 0 0 60px #71ff4d, 0 0 70px #71ff4d;
    }

    to {
        text-shadow: 0 0 20px #ff0000, 0 0 30px #ff0000, 0 0 40px #ff0000, 0 0 50px #ff0000, 0 0 60px #ff0000, 0 0 70px #ff0000, 0 0 80px #ff0000;
    }
    
  }
    </style>
</head>

<body>
<?php
    include 'config.php';
    $sql = "SELECT * FROM users_details";
    $result = mysqli_query($conn,$sql);
?>

<?php
  include 'navbar.php';
?>

<div class="container">
        <h1 class="glow1">View All Users</h1>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-dark table-striped table-condensed table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
            <?php
        include_once('footer.php');
    ?>      
         </div>
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>
