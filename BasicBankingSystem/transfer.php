<?php
include 'config.php';

//print_r($_POST);

if($_POST ['id']){

    $from = $_POST['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from users_details where id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); 

    $sql_to = "SELECT * from users_details where id=$to";
    $query = mysqli_query($conn,$sql_to);
    $sql2 = mysqli_fetch_array($query);
    

    $newbalance = $sql1['balance'] - $amount;
    $sql = "UPDATE users_details set balance=$newbalance where id=$from";
    mysqli_query($conn,$sql);
    $sql_updated = "SELECT * from users_details where id=$from";
    $bal_up=mysqli_query($conn,$sql_updated);
    $bal_update = mysqli_fetch_array($bal_up);
    echo $bal_update['balance'];         

                
    $newbalance = $sql2['balance'] + $amount;
    $sql = "UPDATE users_details set balance=$newbalance where id=$to";
    mysqli_query($conn,$sql);
                
    $sender = $sql1['name'];
    $receiver = $sql2['name'];
    
    $sql = "INSERT INTO transaction_details(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
    $query=mysqli_query($conn,$sql);

    if($query){
            
                    
    }

    $newbalance= 0;
    $amount =0;
   
} 

?>