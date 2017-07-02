<?php include("common/head.php");
// Create connection
   include("../includes/config.php");
    $conn = mysqli_connect(DBSERVER, DBUSER, DBPASSW, DBNAME);
    // Check connection

        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }
    if(isset($_GET['destination_id'])){
    $id=$_GET['destination_id'];
    $sql="SELECT * from destination WHERE destination_id=$id";
    $result=mysqli_query($conn,$sql);
    $data=mysqli_fetch_array($result);  
}
?>
<div class="ch-container">
    <div class="row">
      <?php include("common/sidemenu.php");?>
        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Add Destination</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Edit Destination</h2>
				
                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
			<?php if(isset($msg)){?> 
            <div class="alert alert-success">
                <?php echo $msg?>
            </div>
            <?php } ?>
                <form role="form" action="update_destination.php" method="POST">
                    <div class="form-group">

                        <label for="exampleInputEmail1">Destination Name:</label>
                        <input type="text" class="form-control" name="destination_name" id="destination_name" value="<?php echo $data['destination_name'];?>" required>
                    </div>
                    <div class="form-group">

                        <label for="exampleInputEmail1">Description:</label>
                        <input type="text" class="form-control" name="description" id="description" value="<?php echo $data['description'];?>" required>
                    </div>
                    <div class="form-group">

                        <label for="exampleInputEmail1">Category:</label>
                        <input type="text" class="form-control" name="category" id="category" value="<?php echo $data['category'];?>" required>
                    </div>
                    <div class="form-group">

                        <label for="exampleInputEmail1">Image:</label>
                        <input type="file" class="form-control" name="image" id="image" value="<?php echo $data['image'];?>" required>
                    </div>
					<input type="hidden" name="destination_id" value="<?php echo $data['destination_id'];?>">
					<button type="submit" name='update' value="UPDATE" class="btn btn-primary">UPDATE</button>&nbsp;
					<button type="clear" class="btn btn-default">Clear</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->

    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->
    <hr>
<?php include("common/footer.php");?>
    