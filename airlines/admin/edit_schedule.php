<?php include("common/head.php");
// Create connection
   include("../includes/config.php");
    $conn = mysqli_connect(DBSERVER, DBUSER, DBPASSW, DBNAME);
    // Check connection

        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }
    if(isset($_GET['flight_no'])){
    $id=$_GET['flight_no'];
    $sql="SELECT * from flight_schedule WHERE flight_no=$id";
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
            <a href="#">Add Schedule</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Edit Schedule</h2>
				
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
                <form role="form" action="update_schedule.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Operation days:</label>
                        <input type="text" class="form-control" name="Op_days" id="Op_days" value="<?php echo $data['Op_days'];?>" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Departure:</label>
                        <input type="text" class="form-control" name="Departure" id="Departure" value="<?php echo $data['Departure'];?>" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Arrival:</label>
                        <input type="text" class="form-control" name="Arrival" id="Arrival" value="<?php echo $data['Arrival'];?>" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Route:</label>
                        <input type="text" class="form-control" name="Route" id="Route" value="<?php echo $data['Route'];?>" required>
                    </div>
                   
					<input type="hidden" name="flight_no" value="<?php echo $data['flight_no'];?>">
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
    