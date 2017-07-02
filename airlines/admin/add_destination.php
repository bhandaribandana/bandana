<?php include("common/head.php");
// Create connection
   include("../includes/config.php");
    $conn = mysqli_connect(DBSERVER, DBUSER, DBPASSW, DBNAME);
    // Check connection
        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }
        if(isset($_POST['add']) && $_POST['add']=='ADD DESTINATION'){
        $destination_name=trim($_POST['destination_name']);
        $category=trim($_POST['category']);
        $description=trim($_POST['description']);
        $image=trim($_POST['image']);
        $sql="INSERT INTO destination (destination_id,destination_name,category,description,image) VALUES('','$destination_name','$category','$description','$image')";
        $result=mysqli_query($conn,$sql);
        if($result){
                $msg='Category Inserted Successfully.';
            }
        else{
                $msg='Error! Please, Try Again';
        }
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
                <h2><i class="glyphicon glyphicon-edit"></i> Add Destination</h2>
				
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
                <form role="form" action="" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Destination Name:</label>
                        <input type="text" class="form-control" name="destination_name" id="destination_name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Category:</label>
                        <input type="text" class="form-control" name="category" id="category"  required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <input type="text" class="form-control" name="description" id="description"  required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">image:</label>
                        <input type="file" class="form-control" name="image" id="image" required>
                    </div> 
					<button type="submit" name='add' value="ADD DESTINATION" class="btn btn-primary">ADD DESTINATION</button>&nbsp;
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
    