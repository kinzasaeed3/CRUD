
<?php
 
include("../curd/congig.php");
?>
<?php

// add
if (isset($_POST['submit'])) {
    $std_name = $_POST['sname'];
    $std_address = $_POST['saddress'];
    $std_class = $_POST['sclass'];
    $std_phone = $_POST['sphone'];
    // query run krni haan
    // $run ek varible haan
    $run = "INSERT INTO student(sName,sAddress,sClass,sPhone)values('$std_name','$std_address','$std_class','$std_phone')";
    $result = mysqli_query($connection, $run) or die("query failed");
    echo "<script>
    alert('Data Inserted Successfully');
      location.assign('../curd/index.php');
      </script>";
    mysqli_close($connection);


} 


?>