<!-- ***************************************************************************************
  Page Name  : modify.php
  Author     : Enzo Gomes
  Your URL   : ocelot-aul.fiu.edu/~edeol005
  Course     : CGS4854
  Program #  : modify.php
  Purpose    : modifies existing user records
  Due Date   : 03/26/2025
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person.
  ..........{ Enzo Felippe De Oliveira Gomes }..........
**************************************************************************************** -->

<!DOCTYPE html>
<html>
  <body>
    <?php
       $found = $_POST['found']; // Get found to verify if record exists using the PantherID
       if ((strlen(trim($found)) > 0) && ($found == $_POST['PantherID'])) { 
          $query = "UPDATE customers 
                    SET FirstName      = '{$_POST['FirstName']}',  
                        LastName       = '{$_POST['LastName']}',
                        Email          = '{$_POST['Email']}',
                        Address        = '{$_POST['Address']}',
                        City           = '{$_POST['City']}',
                        State          = '{$_POST['State']}',
                        Country        = '{$_POST['Country']}',
                        Zip            = '{$_POST['Zip']}',
                        Suggestions    = '{$_POST['Suggestions']}',
                        GraduationTerm = '{$_POST['GraduationTerm']}',
                        Coffee         = '{$_POST['Coffee']}',
                        IT             = '{$_POST['IT']}',
                        CS             = '{$_POST['CS']}',
                        Robotics       = '{$_POST['Robotics']}',
                        Cyber          = '{$_POST['Cyber']}'
               WHERE PantherID = '{$_POST['PantherID']}'";
               
		 // Runs the update query if true
          $sql = mysqli_query($connection, $query);
          
          if ($sql) {
			  // User Feedback
             $message = "<span style='color: blue;'>RECORD {$_POST['PantherID']} MODIFIED</span><br>";
          } else {
             $message = "<span style='color: red;'>RECORD {$_POST['PantherID']} CANNOT BE MODIFIED, FIND IT FIRST</span><br>";
             $message .= "<br>MySQL Error: " . mysqli_error($connection);
          }
       } else {
          $message = "<span style='color: red;'>FIND THE RECORD BEFORE MODIFYING IT</span><br>";
       }
    ?>
  </body>
</html>


