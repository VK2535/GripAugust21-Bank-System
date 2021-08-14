

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" href="css/index.css">

    <style type="text/css">
    	
		
        
        body{
            background: url('img/bank_bg.jpg') no-repeat fixed;
            background-size: cover;
    
        }

    </style>
</head>

<body>
 
<?php
  include 'navbar.php';
?>

	<div class="container">
    <h1 class="glow1">Transaction</h1>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  users_details where id=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
            <form method="post" name="tcredit" id="frm" class="tabletext" ><br>
        <div>
            <table class="table table-dark table-striped table-condensed table-bordered">
                <tr>
                    <th class="text-center">Customer Id</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email-Id</th>
                    <th class="text-center">Balance</th>
                </tr>
                <tr>
                    <td class="py-2"><?php echo $rows['id'] ?></td>
                    <td class="py-2"><?php echo $rows['name'] ?></td>
                    <td class="py-2"><?php echo $rows['email'] ?></td>
                    <td class="py-2" id="updatebal"><?php echo $rows['balance'] ?></td>
                    <?php $tamt = $rows['balance'] ; ?>
                </tr>
            </table>
        </div>
        <br>
        <label><strong class="text-white">Transfer To:</strong></label>
        <select name="to" id="tomoney" class="form-control" >
            <option value="" disabled selected>Choose</option>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM users_details where id!=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['id'];?>" >
                    
                    <?php echo $rows['name'] ;?> (Balance: 
                    <?php echo $rows['balance'] ;?> ) 
               
                </option>
            <?php 
                } 
            ?>
            <div>
        </select>
        <br>
              
            <input type="hidden" name="id" value="<?php echo $sid; ?>">    
            <label><strong class="text-white">Amount:</</strong></label>
            <input type="number" class="form-control" id="amount" name="amount" >   
            <br>
                <div class="text-center" >
            <button class="btn btn1 m-2" name="submit" onclick="check(<?php echo $tamt ;?>)"  id="myBtn">Transfer</button>
            </div>
        </form>
        <?php
        include_once('footer.php');
    ?>      
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

<script>
    function check(totalamt) {
        event.preventDefault();
       
        var amt = jQuery('#amount').val();
        var tomoney = jQuery('#tomoney').val();
        //var up = jQuery('#updatebal').val();
        // console.log(amt);
        // console.log(tomoney);
        // alert(amt);
        // alert(totalamt);
       // console.log(up);

       

        if(!tomoney > 0){
            swal({
                title: "Person is Not Selected",
                text: "Please Select One Person for do Transfer Money",
                icon: "warning",
                button: "oh yaa! I Understand!",
            });
        }
        else if(amt == ''){
            swal({
                title: "Amount Not Entered",
                text: "Please Enter Amount for do Transfer Money",
                icon: "warning",
                button: "oh yaa! I Understand!",
            });
        }

        else if(amt == 0){
            swal({
                title: "Amount zero (0) Not Acceptable ",
                text: "Please Select Amount 1 Rupees to "+totalamt+" Rupees for do Transfer Money",
                icon: "warning",
                button: "oh yaa! I Understand!",
            });
        }
        else if(amt<0){
            swal({
                title: "Negative Amount is Not Acceptable ",
                text: "Please Select Amount 1 Rupees to "+totalamt+" Rupees for do Transfer Money",
                icon: "warning",
                button: "oh yaa! I Understand!",
            });
        }
        else if(amt > totalamt){
            swal({
                title: "Insufficient Balance in Your Account ",
                text: "Please Select Amount 1 Rupees to "+totalamt+" Rupees for do Transfer Money",
                icon: "error",
                button: "oh yaa! I Understand!",
            });
        }
       

       else{
           //jQuery("#frm").submit();
           jQuery.ajax({
               url:'transfer.php',
               type:'post',
               data:jQuery('#frm').serialize(),
               success:function(result){
                   //console.log(result);
                swal({
                title: "Congratulation , Transaction Successful",
                text: "Thank You For Do Transfer Money",
                icon: "success",
                button: "OK",
            });
            jQuery('#updatebal').html(result);
            jQuery('#frm')[0].reset();
               }
           })
       }
        
    }

</script>


</body>
</html>
