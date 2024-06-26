<?php
include('connection.php'); 
$name = $_POST['name'];  
$address = $_POST['address'];  

     $name = stripcslashes($name);  
     $address = stripcslashes($address);
     $name = mysqli_real_escape_string($con, $name);  
     $address = mysqli_real_escape_string($con, $address); 

$sql = "INSERT INTO `buy` (`p_name`, `p_price`, `name` , `address`) VALUES ('Black Analog Watch', ' 1329', '$name' , '$address');";

$result = mysqli_query($con, $sql);
 if($result)
 {
    $totalPrice = 1249;
    $overAllTotal = $totalPrice + 60 + 20;
    echo "<div style='align-items: center;position: absolute;width: 386px;padding: 20px;top: 20%;left: 30%;background: antiquewhite;'>
    <h1 style='color:blue;'>Thank You for your oder</h1>
    <p style='color:blue; border-bottom: #a8a8b3 dashed 1px;'>payment summary</p>
    <table>
    <tr>
        <td style='padding-right: 35px;'>
            Customer Name:
        </td>
        <td>
            $name
        </td>
     </tr>
     <tr>
        <td style='padding-right: 35px;'>
            Address:
        </td>
        <td>
            $address
        </td>
     </tr>
    <tr>
     <td style='padding-right: 35px;'>
         Payment Type:
     </td>
     <td>
         COD
     </td>
  </tr>
       <td style='padding-right: 35px;'>
           Women Casual Regular Sleeves:
       </td>
       <td>
           Rs.$totalPrice
       </td>
    </tr>
    <tr>
       <td style='padding-right: 35px;'>
           Shipping
       </td>
       <td>
           Rs.60
       </td>
    </tr>
    <tr>
       <td style='padding-right: 35px;'>
           GST
       </td>
       <td>
           Rs.20
       </td>
    </tr>

    <tr>
       <td style='padding-right: 35px; font-weight: bold;'>
           Total
       </td>
       <td style='font-weight: bold;'>
           Rs.$overAllTotal
       </td>
    </tr>
    </table>
    </div>
    ";
 }
else{
    echo "connection is not establish.please try later". mysqli_error($con);
}

?>