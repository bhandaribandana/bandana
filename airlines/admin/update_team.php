<?php
// Create connection
   include("../includes/config.php");
    $conn = mysqli_connect(DBSERVER, DBUSER, DBPASSW, DBNAME);
    // Check connection

        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }
if (isset($_POST['update']) && $_POST['update'] == "UPDATE") {
	$name=($_POST['name']);
	$description=($_POST['description']);
	$image=($_POST['image']);
    $email=($_POST['email']);
	$facebook=($_POST['facebook']);
	$id=$_POST['id'];
	$sql="UPDATE our_team SET name='$name', description='$description', image='$image',email='$email', facebook='$facebook'
			WHERE id=$id";
	$result=mysqli_query($conn,$sql);
	if($result){
		header("Location:view_team.php");
	}
	else{
		header("Location:view_team.php");
	}
} 

?>