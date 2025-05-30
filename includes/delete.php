<!-- ***************************************************************************************
  Page Name  : delete.php
  Author     : Enzo Gomes
  Your URL   : ocelot-aul.fiu.edu/~edeol005
  Course     : CGS4854
  Program #  : delete.php
  Purpose    : deletes user records from the database
  Due Date   : 03/26/2025
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person.
  ..........{ Enzo Felippe De Oliveira Gomes }..........
**************************************************************************************** -->

<!DOCTYPE html>
<html>
  <body>
    <?php
	
       $record = "RECORD ". $PantherID." DELETED";

       $found = $_POST['found']; 
	   
	   // SQL query to delete record
	   $sql="DELETE FROM customers WHERE PantherID='$PantherID'";
	   
	   $PantherID=trim($PantherID);

       // Check if record exists using the found var
       if ((strlen(trim($found)) > 0) && ($found == $PantherID)) {
          
		  // Clear input areas after delete/ user feedback
          if (mysqli_query($connection, $sql)) {
             $message = "<span style='color: red;'>RECORD $PantherID DELETED</span><br>";
             $PantherID = "";
             $Email = "";
             $LastName = "";
             $FirstName = "";
             $Address = "";
             $City = "";
             $State = "";
             $Country = "";
             $Zip = "";
             $Suggestions = "";
             $GraduationTerm = "";
             $Coffee = "";
             $IT = "";
             $CS = "";
             $Robotics = "";
             $Cyber = "";
             $found = "";
          } else {
		     $message = "<span style='color: red;'>RECORD $PantherID DOES NOT EXIST</span><br>";
          }
       }
    ?>
  </body>
</html>
