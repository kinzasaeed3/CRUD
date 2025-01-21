
<?php
include("../components/header.php");
include("../curd/congig.php");
?>
 <!-- css -->
 <style>
  .btn-primary {
    background-color: orange !important;  
    border-color: orange !important;    
}
table{
  width: 100% !important;
}
 </style>

<div class="container mt-5">
<h2>ALL RECORD</h2>
<?php
 
// query run krni haan
// $run ek varible haan
$run ="SELECT * FROM student JOIN studentclass ON student.sClass = studentclass.cID";
$result=mysqli_query($connection,$run) or die("query failed");
// create function  yeh function bascically rows check krta haan
if(mysqli_num_rows($result)>0){
 
 
?>
 <!-- table -->
<table class="table table-striped table-hover table-bordered">
      <thead class="table-dark">
        <tr>
          <th scope="col" class="text-center">ID</th>
          <th scope="col" class="text-center">Name</th>
          <th scope="col" class="text-center">Address</th>
          <th scope="col" class="text-center">Class</th>
          <th scope="col" class="text-center">Phone</th>
          <th scope="col" class="text-center">Action</th>
        </tr>
      </thead>
      <tbody>
        <!-- loop chalai gi -->
         <?php
         while($row=mysqli_fetch_assoc($result)){

        
         ?>
        <tr>
          <td class="text-center"> <?php echo $row['sId']?> </td>
          <td class="text-center"> <?php echo $row['sName']?> </td>
          <td class="text-center"> <?php echo $row['sAddress']?> </td>
          <!-- cName isliye lia take class ka nam ajai -->
          <td class="text-center"> <?php echo $row['cName']?> </td>
          <td class="text-center"> <?php echo $row['sPhone']?> </td>
          <td>
             <a href="../curd/edit.php?id=<?php echo $row['sId']?> " class="btn btn-primary btn-sm me-2 mt-1 text-center ">Edit</a>
            <a href="../curd/deleteinline.php?id=<?php echo $row['sId']?>"  class="btn btn-danger btn-sm mt-1 text-center">Delete</a>
             </td>
        </tr>
        <?php }?>
        <!-- close loop -->
    </tbody>
    </table>
   
     <?php } 
     else{
      echo"<h2>no record found</h2>";
     }
     mysqli_close($connection);
     ?>
      <!-- close } -->
    </div> 

    
    <?php
    
   include("../components/footer.php");
   
 
?>