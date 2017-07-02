<?php include("common/head.php");
// Create connection
   include("../includes/config.php");
    $conn = mysqli_connect(DBSERVER, DBUSER, DBPASSW, DBNAME);
    // Check connection
        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }
        if(isset($_POST['add']) && $_POST['add']=='ADD'){
        $name=trim($_POST['name']);
		 $description=trim($_POST['description']);
		 $image=trim($_POST['image']);
         $email=trim($_POST['email']);
		 $facebook=trim($_POST['facebook']);
        $sql="INSERT INTO our_team(name,description,image,email,facebook) VALUES('$name','$description','$image','$email','$facebook')";
		
        $result=mysqli_query($conn,$sql);
        if($result){
                $msg='team member added.';
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
            <a href="#">Add Category</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Our Team</h2>
				
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
                        <label for="exampleInputEmail1">Name:</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter your Name" required>
                    </div>
					<div class="form-group">
                        <label for="exampleInputEmail1">Description:</label>
                        <textarea class="form-control" name="description" id="description" ></textarea>
                    </div>
					<div class="form-group">
                        <label for="exampleInputEmail1">Image:</label>
                        <input type="file" class="form-control" name="image" id="image"  required>
                    </div>
					<div class="form-group">
                        <label for="exampleInputEmail1">Email:</label>
                        <input type="text" class="form-control" name="email" id="email" required>
                    </div>
					<div class="form-group">
                        <label for="exampleInputEmail1">Facebook:</label>
                        <input type="text" class="form-control" name="facebook" id="facebook"  required>
                    </div>
					<button type="submit" name='add' value="ADD" class="btn btn-primary">ADD TEAM</button>&nbsp;
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
    