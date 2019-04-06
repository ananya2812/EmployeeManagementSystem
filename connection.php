
<?php
require_once('/home/ananya/Documents/codes/EMS/errorcheck.php');
$error = new error_check();
$error->checkerror();
require_once('/home/ananya/Documents/codes/EMS/lib/smtemplate.php');

class connection{

	private $conn;
	      
	function connect () 
	{       
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "ananya";
 		try {
    			$this->conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    		    }
		catch(PDOException $e)
    		   {
    			echo "Error: " . $e->getMessage();
    		   } 		
	}
	
	function insert()
	{
		
		try{
		$this->connect();
		$name=$_POST['name'];
		$department=$_POST['department'];
		$password=$_POST['password'];
		$email=$_POST['email'];
		$contact=$_POST['contact'];
		
		$stmt = $this->conn->prepare("INSERT INTO employee (name,department,password,email,contact) VALUES(:name,:department,:password,:email,:contact)");
    		$stmt->bindParam(':name', $name);
   	 	$stmt->bindParam(':department', $department);
    		$stmt->bindParam(':password', $password);
		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':contact', $contact);
		$stmt->execute();
		$tpl = new SMTemplate();
		$tpl->render('login', $data=array());

		echo "<script language='javascript' type='text/javascript'>";
		echo "alert('Registration Successful !! Please Login to Continue...');";			
		echo "</script>";
		
		
		}
		catch(PDOException $e)
    		   {
			echo "<script language='javascript' type='text/javascript'>";
			echo "alert('Failed Registration !! :|');";
			echo "</script>";
    			
    		   }

	}
	
	function login()
	{				
		try{		
		$this->connect();		
		$name=$_POST['name'];
		$password=$_POST['password'];

		$stmt = $this->conn->prepare("SELECT name FROM employee WHERE name = ':name' and password = ':password'");
    		$stmt->bindParam(':name', $name);
    		$stmt->bindParam(':password', $password);
		$rows=$stmt->execute();
 		if($rows == 1)
	 			{      
				session_start();
				$_SESSION["name"] = "$name";
				return 1;
      				}
			else {
        			 return 0;
      				
			      }
		}
		catch(PDOException $e)
    		   {
			echo "Error: " . $e->getMessage();
    			
    		   }

	}
function view()
{
	try{
			$this->connect();
			$stmt = $this->conn->prepare("SELECT id, name, department,email,contact FROM employee");
			$rows=$stmt->execute();

			if ($rows > 0) {
			$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
			$tpl = new SMTemplate();
			$tpl->render('to_welcome', array('data' => $data));
			} 
			else 
			{
    			echo "<script language='javascript' type='text/javascript'>";
			echo "alert('NO RECORD IN DATABASE');";
			echo "</script>";
			}

	}
	catch(PDOException $e)
    		   {
			echo "Error: " . $e->getMessage();
    			
    		   }

}
function delete_record($id)
{
		try{
			$this->connect();
			$stmt = $this->conn->prepare("delete from employee where id=:id");
			$stmt->bindParam(':id',$id);
			$rows=$stmt->execute();
			if ($rows) 
			{
				$con = new connection();
				$con->connect();
				$con->view();
				echo "<script language='javascript' type='text/javascript'>";
				echo "alert('RECORD DELETED');";
				echo "</script>";
				
			}
			else 
			{
				echo "<script language='javascript' type='text/javascript'>";
				echo "alert('FAILED');";
				echo "</script>";			
			}

		}
		catch(PDOException $e)
    		   {
			echo "Error: " . $e->getMessage();
    			
    		   }
	}

	function update_record($id)
	{
		try{
		$this->connect();
		$name=$_POST['name'];
		$department=$_POST['department'];
		$password=$_POST['password'];
		$email=$_POST['email'];
		$contact=$_POST['contact'];
		
		$stmt = $this->conn->prepare("UPDATE employee SET name=:name,department=:department,password=:password,email=:email,contact=:contact where id=:id");
    		$stmt->bindParam(':name', $name);
   	 	$stmt->bindParam(':department', $department);
    		$stmt->bindParam(':password', $password);
		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':contact', $contact);
		$stmt->bindParam(':id', $id);
		$stmt->execute();
		

		$con = new connection();
		$con->connect();
		$con->view();
		
		echo "<script language='javascript' type='text/javascript'>";
		echo "alert('RECORD UPDATED');";
		echo "</script>";

		}
		catch(PDOException $e)
    		   {
			$con = new connection();
			$con->connect();
			$con->view();
			echo "<script language='javascript' type='text/javascript'>";
			echo "alert('FAILED');";
			echo "</script>";		
    		   }
		
	}

}
?>
