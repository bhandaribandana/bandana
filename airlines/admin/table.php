<?php include("common/head.php");?>
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
                <a href="#">Tables</a>
            </li>
        </ul>
    </div>

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> Datatable + Responsive</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    <!--<div class="alert alert-info"> </div>-->
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Username</th>
        <th>Date registered</th>
        <th>Role</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Saruar Ahmed</td>
        <td class="center">2012/03/01</td>
        <td class="center">Member</td>
        <td class="center">
            <span class="label-warning label label-default">Pending</span>
        </td>
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                View
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Delete
            </a>
        </td>
    </tr>
    <tr>
        <td>Ahemd Saruar</td>
        <td class="center">2012/03/01</td>
        <td class="center">Member</td>
        <td class="center">
            <span class="label-warning label label-default">Pending</span>
        </td>
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                View
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Delete
            </a>
        </td>
    </tr>
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
