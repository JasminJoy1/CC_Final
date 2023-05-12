<?php
require 'file/connection.php';
session_start();
if(!isset($_SESSION['hid']))
{
  header('location:login.php');
}
else {
	if(isset($_SESSION['hid'])){
		$id=$_SESSION['hid'];
		$sql = "SELECT * FROM hospitals WHERE id='$id'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result);
	}
}
?>

<!DOCTYPE html>
<html>
<?php $title="Bloodbank | My Profile"; ?>
<?php require 'head.php';?>
<style>
.login-form{
    width: calc(100% - 20px);
    max-height: 650px;
    max-width: 450px;
    background-color: white;
}

/* Add a black background color to the top navigation */

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

</style>
<body>
	<?php require 'header.php'; ?>
	<div class="topnav">
		<a href="hospitalpage.html" class="nav-link">My Home</a>
		<a href="hprofile.php" class="nav-link">My Account</a>
		<a href="bloodinfo.php" class="nav-link">Stock Of Blood</a>
		<a href="bloodrequest.php" class="nav-link">Blood Requests</a>
		<a href="deleteit.php" class="nav-link">Need Blood</a>
		<a href="sentrequestd.php" class="nav-link">Status of Your Blood Request</a>
		<a href="logout.php" class="nav-link">LogOut</a>
	</div>

	<div class="container cont">

		<?php require 'message.php'; ?>

		<div class="row justify-content-center">
			<div class="col-lg-4 col-md-4 col-sm-6 mb-5">
				<div class="card">
					<div class="media justify-content-center mt-1">
						<img src="image/hospital.png" alt="profile" class="rounded-circle" width="70" height="60">
					</div>
					<div class="card-body">
					   <form action="file/updateprofile.php" method="post">
					   	<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Hospital Name</label>
						<input type="text" name="hname" value="<?php echo $row['hname']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold">Hospital Email</label>
						<input type="email" name="hemail" value="<?php echo $row['hemail']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold">Hospital Password</label>
						<input type="text" name="hpassword" value="<?php echo $row['hpassword']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold">Hospital Phone Number</label>
						<input type="text" name="hphone" value="<?php echo $row['hphone']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold">Hospital City</label>
						<input type="text" name="hcity" value="<?php echo $row['hcity']; ?>" class="form-control mb-3">
						<input type="submit" name="update" class="btn btn-block btn-primary" value="Update">
					   </form>
					</div>
					<a href="hospitalpage.html" class="text-center">Cancel</a><br>
				</div>
			</div>
		</div>
	</div>
	<?php require 'footer.php'; ?>
</body>
</html>