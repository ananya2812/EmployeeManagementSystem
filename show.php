
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('/home/ananya/Documents/codes/EMS/lib/smtemplate.php');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ananya";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error)
 {
    die("Connection failed: " . $conn->connect_error);
 }

$sql = "SELECT id, name, department FROM employee";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    // output data of each row
	$data = mysqli_fetch_all($result,MYSQLI_ASSOC);
 
} 
else 
{
    echo "NO RECORDS IN DATABASE";
}
$conn->close();

$tpl = new SMTemplate();
$tpl->render('tableview', $data);

?>
