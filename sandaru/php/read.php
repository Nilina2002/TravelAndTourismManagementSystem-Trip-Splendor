<!--IT23368248 s.m.dissanayaka-->
<link rel="stylesheet" href="css/read.css">

<?php
require 'config.php';
?>

<div class="row">
    <div class="column">
      <table class="ptable" border = "2" >
    <tr>
      <th>Full Name</th>
      <th>Name On Card</th>
      <th>Email Addresss</th>
      <th>Address</th>
      <th>Payment Details</th>
      <th>Card Number</th>
      <th>Exp Year</th>
      <th>Enter Amount</th>
    </tr>

<?php

$sql="select * from booking";
$result=mysqli_query($con,$sql);
if($result){
  while($row=mysqli_fetch_assoc($result)){
    $Full_Name=$row['Full_Name'];
    $Name_On_Card=$row['Name_On_Card'];
    $Email_Address=$row['Email_Address'];
    $Addresss=$row['Addresss'];
    $Payment_Details=$row['Payment_Details'];
    $Card_Number=$row['Card_Number'];
    $Exp_Year=$row['Exp_Year'];
    $Enter_Amount=$row['Enter_Amount'];

    echo '<tr>
     
      <td>'.$Full_Name.'</td>
      <td>'.$Name_On_Card.'</td>
      <td>'.$Email_Address.'</td>
      <td>'.$Addresss.'</td>
      <td>'.$Payment_Details.'</td>
      <td>'.$Card_Number.'</td>
      <td>'.$Exp_Year.'</td>
      <td>'.$Enter_Amount.'</td>


    <td>
      <a href="edit.php?updateid=<?php echo $Full_Name; ?>" target="_blank"><button>Update</button></a>
      <a href="condelete.php?deleteid=<?php echo $Full_Name; ?>" target="_blank"><i class="fas fa-trash"></i><button>Delete</button></a> 
    </td>';
  
}


}

?>



   