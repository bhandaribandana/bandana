<?php include("common/head.php");
// Create connection
   include("../includes/config.php");
    $conn = mysqli_connect(DBSERVER, DBUSER, DBPASSW, DBNAME);
    // Check connection
        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }
        if(isset($_POST['add']) && $_POST['add']=='ADD SLIDER'){
        $title=trim($_POST['title']);
        $image=trim($_POST['image']);
        $sql="INSERT INTO slider (id,title,image) VALUES('','$title','$image')";
        $result=mysqli_query($conn,$sql);
        if($result){
                $msg='Slider Inserted Successfully.';
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
            <a href="#">Add Slider</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Add Slider</h2>
				
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
                        <label for="exampleInputEmail1">title:</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">image:</label>
                        <input type="file" class="form-control" name="image" id="image">
                    </div>
					<button type="submit" name='add' value="ADD SLIDER" class="btn btn-primary">ADD SLIDER</button>&nbsp;
					<button type="clear" class="btn btn-default">CLEAR</button>
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
    