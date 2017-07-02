<?php include("common/head.php");
// Create connection
   include("../includes/config.php");
    $conn = mysqli_connect(DBSERVER, DBUSER, DBPASSW, DBNAME);
    // Check connection

        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }
    if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="SELECT * from category WHERE cat_id=$id";
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
            <a href="#">Add Category</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Edit Category</h2>
				
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
                <form role="form" action="update_category.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Category Name:</label>
                        <input type="text" class="form-control" name="title" id="title" value="<?php echo $data['title'];?>" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Status:</label>
						<select class="form-control" name="status">
						<option class="form-control" value="">SELECT</option>
                        <option class="form-control" value="1"<?=$data['status'] == '1' ? ' selected="selected"' : '';?>>YES</option>
						<option class="form-control" value="0"<?=$data['status'] == '0' ? ' selected="selected"' : '';?>>NO</option>
						</select>
                    </div> 
					<input type="hidden" name="id" value="<?php echo $data['cat_id'];?>">
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
    