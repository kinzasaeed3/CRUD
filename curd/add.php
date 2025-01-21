 
 
<?php
include("../components/header.php");
include("../curd/congig.php");
?>
<style>
    .card{
        width: 80% !important;
        
    }
</style>
<div class="container mt-5 align-items-center d-flex justify-content-center  ">
    <div class="card ">
        <div class="card-header bg-dark text-white text-center">
            <h4>Add New Record</h4>
        </div>
        <div class="card-body">
            <form class="post-form" action="../curd/savedata.php" method="POST">
                <!-- Name -->
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control"  name="sname" placeholder="Enter your name" required>
                </div>
                <!-- Address -->
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control"  name="saddress" placeholder="Enter your address" required>
                </div>
                <!-- Class -->
                <div class="mb-3">
                    <label for="class" class="form-label">Class</label>
                    <select class="form-select"  name="sclass" required>
                        <option value="" disabled selected>Select Class</option>
                        <?php
 
                        // query run krni haan
                        // $run ek varible haan
                        $run = "SELECT * FROM  studentclass";
                        $result = mysqli_query($connection, $run) or die("query failed");
                        while($row =mysqli_fetch_assoc($result)){

                        ?>
                        <option value="<?php echo $row['cID'] ?>"><?php echo $row['cName'] ?></option>
                        <?php     }?>
                        <!-- close -->
                    </select>
                </div>
                <!-- Phone -->
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="tel" class="form-control"  name="sphone" placeholder="Enter your phone number" required>
                </div>
                <!-- Save Button -->
                <div class="d-grid">
                    <button type="submit" name="submit" value="save" class="btn btn-success">Save</button>
                </div>
            </form>
             
        </div>
    </div>
</div>


<?php
include("../components/footer.php");

?>