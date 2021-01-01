<?php
// $aa=$_POST["search"] ;
include("header.php");
echo "<h2>Search Result " .$_GET["uname"] . "</h2>" ;
$formUsername=$_GET["uname"];


//server connnection
{include 'connection.php';}
if ($conn==true){
	
	// echo '<script>alert("Login  Connection Success")</script>';
} else{
	die("Connection failed: " . $conn->connect_error);
	// echo '<script>alert("Login  Connection failed")</script>';
}

// Query if email exists in db
$sql = "select username, firstName,lastName from TTLogin where username='$formUsername'";

//echo $sql;
$result = mysqli_query($conn, $sql);
$rowCount = mysqli_num_rows($result);


if($row = mysqli_fetch_array($result)) {

	$qusername = $row['username'];
    $firstName = $row['firstName'];
    $lastName = $row['lastName'];	
	} 	
    ?>
<table class="table">
    <tr>
        <td>USER NAME</td>
        <td><?php echo $qusername ?></td>
    </tr>
    <tr>
        <td>FIRST NAME</td>
        <td><?php echo $firstName ?></td>
    </tr>
    <tr>
        <td>LAST NAME</td>
        <td><?php echo $lastName ?></td>
    </tr>
</table>
<?php
include("footer.php");

?>