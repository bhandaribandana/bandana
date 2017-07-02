<?php include("common/head.php");
// Create connection
   include("../includes/config.php");
    $conn = mysqli_connect(DBSERVER, DBUSER, DBPASSW, DBNAME);
    // Check connection
        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }
        if(isset($_POST['add']) && $_POST['add']=='ADD PACKAGE'){
        $category=trim($_POST['category']);
        $package_name=trim($_POST['package_name']);
        $image=trim($_POST['image']);
        $description=trim($_POST['description']);
        $iframe=trim($_POST['iframe']);
        $sql="INSERT INTO package (package_id,category,package_name,image,iframe,description) VALUES('','$category','$package_name','$image','$iframe','$description')";
        $result=mysqli_query($conn,$sql);
        if($result){
                $msg='Package Added Successfully.';
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
            <a href="#">Add Package</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Add Package</h2>
				
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
                <form role="form" action="" method="POST" enctype="multipart-form">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Category:</label>
                        <select class="form-control" name="category">
                        <option class="form-control" value="0">SELECT CATEGORY</option>
                        <?php  
                         $sql="SELECT * from category WHERE status='1'";
                         $result=mysqli_query($conn,$sql);
                         while($data=mysqli_fetch_array($result)){
                        ?>
                        <option class="form-control" value="<?php echo $data['title']; ?>"><?php echo $data['title']; ?></option>
                        <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Package name:</label>
                        <input type="text" class="form-control" name="package_name" id="package_name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Images:</label>
                        <input type="file" class="form-control" name="image" id="image" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">iframe:</label>
                        <textarea class="form-control" name="iframe" id="iframe" ></textarea>
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Description:</label>
                        <textarea class="form-control" name="description" id="description" ></textarea>
                    </div>
					<button type="submit" name='add' value="ADD PACKAGE" class="btn btn-primary">ADD PACKAGE</button>&nbsp;
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
    