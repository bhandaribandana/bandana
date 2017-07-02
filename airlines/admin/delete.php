<?php // Create connection
   include("../includes/config.php");
    $conn = mysqli_connect(DBSERVER, DBUSER, DBPASSW, DBNAME);
    // Check connection
        if (!$conn) {
        die("Connection failed: ". mysqli_connect_error());
        }
	if(isset($_GET['id'])){
	$id=$_GET['id'];
	$sql="DELETE from category WHERE cat_id=$id";
	$result=mysqli_query($conn,$sql);
	if($result){
		header("Location:table.php");
	}else{
		header("Location:table.php");
	}
}
?>