<?php
include("../curd/congig.php");
?>
<?php
  $stu_id=$_GET['id'];
 
$run ="Delete FROM student WHERE sId={$stu_id} ";
$result=mysqli_query($connection,$run) or die("query failed");
echo "<script>
alert('Delete Data Successfully');
  location.assign('../curd/index.php');
  </script>";
mysqli_close($connection);
?>