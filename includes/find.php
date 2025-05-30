<!-- ***************************************************************************************
  Page Name  : find.php
  Author     : Enzo Gomes
  Your URL   : ocelot-aul.fiu.edu/~edeol005
  Course     : CGS4854
  Program #  : find.php
  Purpose    : finding and displaying customer records
  Due Date   : 03/26/2025
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person.
  ..........{ Enzo Felippe De Oliveira Gomes }..........
**************************************************************************************** -->

<!DOCTYPE html>
<html>
  <body>
    <?php
	   // SQL to select table and read data
       $sql="SELECT * FROM customers WHERE PantherID = '$PantherID'";
       if ($result=mysqli_query($connection,$sql)) {
          $rowcount=mysqli_num_rows($result);
		  
		  //If statement to determine if data is the same
          if ($rowcount > 0) {
              $row = mysqli_fetch_array($result);
              $PantherID       = $row['PantherID'];
              $Email           = $row['Email'];
              $LastName        = $row['LastName'];
              $FirstName       = $row['FirstName'];
              $Address         = $row['Address'];
              $City            = $row['City'];
              $State           = $row['State'];
              $Country         = $row['Country'];
              $Zip             = $row['Zip'];
              $Suggestions     = $row['Suggestions'];
              $GraduationTerm  = $row['GraduationTerm'];
              $Coffee          = $row['Coffee'];
              $IT              = $row['IT'];
              $CS              = $row['CS'];
              $Robotics        = $row['Robotics'];
              $Cyber           = $row['Cyber'];
              
              $found = $PantherID;
			  
			  // Feedback messages
              $message = "<span style='color: blue;'>RECORD $PantherID FOUND</span><br>";
          } else {
              $message = "<span style='color: red;'>RECORD $PantherID NOT FOUND</span><br>";
          }
       } else {
          $message = "<span style='color: red;'>ERROR</span><br>";
       }
    ?>
  </body>
</html>
