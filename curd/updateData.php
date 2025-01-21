
<?php
 
include("../curd/congig.php");
?>
<?php
// edit.php home page pe ju btn dya haan yeh wo haan edit ka
if (isset($_POST['EDIT'])) {
  $std_id = $_POST['sId'];
  $std_name = $_POST['sName'];
  $std_address = $_POST['sAddress'];
  $std_class = $_POST['sClass'];
  $std_phone = $_POST['sPhone'];
   
  // query run krni haan
  // $run ek varible haan 
  $run="UPDATE student set sName='{$std_name}',sAddress='{$std_address}',sClass='{$std_class}',sPhone='{$std_phone}' WHERE sId='{$std_id}'";
  $result = mysqli_query($connection, $run) or die("query failed");
  echo "<script>
  alert('update Data Successfully');
    location.assign('../curd/index.php');
    </script>";
  mysqli_close($connection);


}
 ?>