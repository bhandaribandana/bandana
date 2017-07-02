<?php include("common/head.php");
// Create connection
   include("../includes/config.php");
    $conn = mysqli_connect(DBSERVER, DBUSER, DBPASSW, DBNAME);
    // Check connection
        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }
        $sql="SELECT * from package";
        $result=mysqli_query($conn,$sql);
        ?>
    <!-- topbar ends -->
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
                <a href="#">View package</a>
            </li>
        </ul>
    </div>

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> View Package</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    <div class="alert alert-info"> Showing the list of Package.</div>
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>S.No.</th>
        <th>Category</th>
        <th>Package Name</th>
        <th>Image</th>
        <th>iframe</th>
        <th>Description</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php 
    $i=1;
    while($data=mysqli_fetch_array($result)){
    ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td class="center"><?php echo $data['category']; ?></td>
        <td class="center"><?php echo $data['package_name']; ?></td>
        <td class="center"><img src="../images/abs/<?php echo $data['image']; ?>" /></td>
        <td class="center"><?php echo $data['iframe']; ?></td>
        <td class="center"><?php echo $data['description']; ?></td>
        <td class="center">
            <a class="btn btn-info" href="edit_package.php?package_id=<?php echo $data['package_id'];?>">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a>
            <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete??');" href="delete_package.php?id=<?php echo $data['package_id'];?>">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Delete
            </a>
        </td>
    </tr>
    <?php
    $i++;
    }
    ?>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->

    </div><!--/row-->

    </div><!--/row-->

    <hr>
<?php include("common/footer.php");?>