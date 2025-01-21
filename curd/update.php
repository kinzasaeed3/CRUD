 
<?php
include("../components/header.php");
include("../curd/congig.php");
?>
<style>
    .container{
        width: 50% !important;
    }
</style>

<div class="container mt-5">
    <h2 class="text-center mb-4">EDIT RECORD</h2>
    <form class="border p-4 rounded post-form " method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
            <label>ID</label>
            <input type="" name="sId" value="<?php echo isset($row['sId']) ? $row['sId'] : ''; ?>"   class="form-control me-2"  placeholder="Enter ID">
        </div>
        <input type="submit" name="showbtn" class="btn btn-primary mt-2 " value="showbtn">
    </form>
        <?php
        if (isset($_POST['showbtn'])) {
            
            $stu_id = $_POST['sId'];
            $query = "SELECT * FROM `student` WHERE sId='{$stu_id}'";
            $result = mysqli_query($connection, $query) or die("Query failed");
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
        ?>

    
    

<form action="updateData.php" class="border p-4 rounded shadow mt-3" method="post"> 
         <!-- ID -->
         <div class="mb-3">
                     
                    <div class="d-flex">
                        <!-- hidden use kia haan jabhi id show nhi hoon rhi -->
                        <input type="hidden" name="sId" value="<?php echo $row['sId']; ?>" class="form-control me-2" placeholder="Enter ID">
                    </div>
                </div>
        <!-- Name -->
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="sName" value="<?php echo $row['sName']; ?>" placeholder="Enter Name" class="form-control">
        </div>
        <!-- Address -->
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" name="sAddress" value="<?php echo $row['sAddress']; ?>" class="form-control" placeholder="Enter Address">
        </div>
        <!-- Class -->
        <div class="mb-3">
            <label for="class" class="form-label">Class</label>
            <!--  -->
            <?php
                        $query1 = "SELECT * FROM studentclass";
                        $result1 = mysqli_query($connection, $query1) or die("Query failed");
                        if (mysqli_num_rows($result1) > 0) {
                            echo '<select class="form-select" name="sClass">
                     <option value="" selected disabled>Select Class</option>';
                            while ($row1 = mysqli_fetch_assoc($result1)) {
                                //   yeha condation use kry gi q ky ky form wala hi subject chaiye isliye
                                if ($row['sClass'] == $row1['cID']) {
                                    $select = "selected";
                                } else {
                                    $select = "";
                                }
                                echo "<option {$select} value='{$row1['cID']}'>{$row1['cName']}<option>";
                            }
                            echo  "</select>";
                        }
            ?>
        </div>
        <!-- Phone -->
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" name="sPhone" value="<?php echo $row['sPhone']; ?>" class="form-control" placeholder="Enter Phone Number">
        </div>
        <!-- Update Button -->
        <div class="text-center">
            <button type="submit" name="EDIT" class="btn btn-success w-100">Update</button>
        </div>
 
                    </form>
    <?php
                    }
                }
            }
?>
</div>
 
<?php
include("../components/footer.php");

?>