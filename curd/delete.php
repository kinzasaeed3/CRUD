
<?php
  include("../components/header.php");
  include("../curd/congig.php");


 if(isset($_POST['deletebtn'])){
    $stu_id =$_POST['sId'];
    $run ="Delete FROM student WHERE sId={$stu_id} ";
$result=mysqli_query($connection,$run) or die("query failed");
echo "<script>
alert('Delete Data Successfully');
  location.assign('../curd/index.php');
  </script>";
mysqli_close($connection);
 }
?>
  
 
    <div class="container mt-5">
        <h2 class="text-center mb-4">Delete Record</h2>
        <form class="border p-4 rounded shadow-sm" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <!-- ID Field -->
            <div class="mb-3">
                <label for="id" class="form-label">ID</label>
                <input type="text"  name="sId" class="form-control" placeholder="Enter ID">
            </div>
            <!-- Delete Button -->
            <div class="text-center">
                <button type="submit" name="deletebtn" class="btn btn-danger w-100">DELETE</button>
            </div>
        </form>
    </div>
 













 
    <?php
  include("../components/footer.php");
 
?>