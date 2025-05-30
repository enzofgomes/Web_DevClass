<!-- ***************************************************************************************
  Page Name  : save.php
  Author     : Enzo Gomes
  Your URL   : ocelot-aul.fiu.edu/~edeol005
  Course     : CGS4854
  Program #  : save.php
  Purpose    : Handles saving new user records to the database
  Due Date   : 02/17/2025
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person.
  ..........{ Enzo Felippe De Oliveira Gomes }..........
**************************************************************************************** -->

<!DOCTYPE html>
<html>
  <body>

   <?php
   
   // trim primary key to prevent spaces saved
   $PantherID = trim($PantherID);
   if (strlen($PantherID) > 0)
   {     
   // Insert reccords into database 
        $sql = "INSERT INTO customers (
                    PantherID,
                    Email,
                    LastName,
                    FirstName,
                    Address,
                    City,
                    State,
                    Country,
                    Zip,
                    Suggestions,
                    GraduationTerm,
                    Coffee,
                    IT,
                    CS,
                    Robotics,
                    Cyber
                ) VALUES (
                    '$PantherID',
                    '$Email',
                    '$LastName',
                    '$FirstName',
                    '$Address',
                    '$City',
                    '$State',
                    '$Country',
                    '$Zip',
                    '$Suggestions',
                    '$GraduationTerm',
                    '$Coffee',
                    '$IT',
                    '$CS',
                    '$Robotics',
                    '$Cyber'
                )";

       if (mysqli_query($connection, $sql)) 
	   {
          $message = "<span style='color: blue;'>Record $PantherID ADDED</span><br>";
       } 
	   else 
	   {
          $message = "<span style='color: red;'>ERROR $PantherID already exists</span><br>";
        }
    }	
    ?>

  </body>
</html>
