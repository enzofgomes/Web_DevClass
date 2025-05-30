<!-- ***************************************************************************************
  Page Name  : ControllerPgm3.php
  Author     : Enzo Gomes
  Your URL   : ocelot-aul.fiu.edu/~edeol005
  Course     : CGS4854
  Program #  : Controller3
  Purpose    : Connects to MySQL to create the info table using program3.php input data and
               calls save, find, modify, delete, or clear files when needed.
  Due Date   : 02/17/2025
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person.
  ..........{ Enzo Felippe De Oliveira Gomes }..........
**************************************************************************************** -->

<!DOCTYPE html>
<html>
  <head>
    <title>Controller3</title>
  </head>
          
  <body>
      
    <?php
       // mysql credentials 
       $server   = "ocelot.aul.fiu.edu";
       $username = "spr25_edeol005";  // Shared username
       $password = "6346299";         // Panther ID
       $dbname   = "spr25_edeol005";   
	 
       // Connecting to mysql
       $connection = mysqli_connect($server, $username, $password);
       if (mysqli_connect_errno()) {
           echo "Failed to connect to MySQL: " . mysqli_connect_error();
       }
	   
       // Select the database
       if (!mysqli_select_db($connection, $dbname)) {
           die("Failed to select database: " . mysqli_error($connection));
       }
	   
       // Table operations
       $tableName = "customers";
       $query = mysqli_query($connection, "SELECT * FROM $tableName");
                     
       // If statement to create table if ! 
       if(!$query)
       {
		  echo "The ".$tableName." does not exist. Creating...<br>";
		   
          $sql = "CREATE TABLE ".$tableName."(
                  PantherID VARCHAR(20) NOT NULL,
                  PRIMARY KEY(PantherID),			  
                  Email VARCHAR(50),
                  LastName VARCHAR(30),
                  FirstName VARCHAR(30),
                  Address VARCHAR(100),
                  City VARCHAR(30),
                  State VARCHAR(30),
                  Country VARCHAR(30),
                  Zip VARCHAR(10),
                  Suggestions TEXT,
                  GraduationTerm VARCHAR(20),
                  Coffee VARCHAR(20),
                  IT VARCHAR(2),
                  CS VARCHAR(2),
                  Robotics VARCHAR(8),
                  Cyber VARCHAR(4)				       
                  )";
                          
          $result = mysqli_query($connection, $sql);
                   
          //confirm table creation
          if ($result)
          {
             echo "Table ". $tableName." created successfully<br>";
          }
          else
          {
             die ("ERROR table". $tableName." was not created ". mysqli_error($connection));
          }
       }

       // Extract input values
		$PantherID = $_POST['PantherID'];
		$Email = $_POST['Email'];
		$LastName = $_POST['LastName'];
		$FirstName = $_POST['FirstName'];
		$Address = $_POST['Address'];
		$City = $_POST['City'];
		$State = $_POST['State'];
		$Country = $_POST['Country'];
		$Zip = $_POST['Zip'];
		$Suggestions = $_POST['Suggestions'];
		$GraduationTerm = $_POST['GraduationTerm'];
		$Coffee = $_POST['Coffee'];
		$IT = isset($_POST['IT']) ? "IT" : "";
		$CS = isset($_POST['CS']) ? "CS" : "";
		$Robotics = isset($_POST['Robotics']) ? "Robotics" : "";
		$Cyber = isset($_POST['Cyber']) ? "Cyber" : "";
		
       if ($_POST['Save'])
       { 
          include('save.php');
		  include("program3.php");

       }
       else if ($_POST['Find'])
       { 
          include('find.php');
		  include("program3.php");

       }
       else if ($_POST['Modify'])
       {  
          include('modify.php');
		  include("program3.php");

       }
       else if ($_POST['Delete'])
       { 
          include('delete.php');
		  include("program3.php");

       }
       else if ($_POST['Clear'])
       {
          include('clear.php');
		  include("program3.php");

       }
	   else if ($_POST['Contact_Me'])
	   {
		  include('contact_me.php');
	   }
	   
       else
       { 
          echo "<br><h1>ERROR button now working</h1>";   
       }

       mysqli_close($connection); 

        
    ?>
                 
  </body>
</html>
