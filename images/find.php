<!-- ***************************************************************************************
  Page Name  : find.php
  Author     : Enzo Gomes
  Your URL   : ocelot-aul.fiu.edu/~edeol005
  Course     : CGS4854
  Program #  : Program 3
  Purpose    : Handles finding and displaying customer records
  Due Date   : 02/17/2025
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person.
  ..........{ Enzo Felippe De Oliveira Gomes }..........
**************************************************************************************** -->

<?php
$sql = "SELECT * FROM customers WHERE PantherID = '$PantherID'";
if ($result = mysqli_query($connection, $sql)) {
    $rowcount = mysqli_num_rows($result);
    
    if ($rowcount > 0) {
        while($row = mysqli_fetch_array($result)) {
            $PantherID = $row['PantherID'];
            $Email = $row['Email'];
            $LastName = $row['LastName'];
            $FirstName = $row['FirstName'];
            $Address = $row['Address'];
            $City = $row['City'];
            $State = $row['State'];
            $Country = $row['Country'];
            $Zip = $row['Zip'];
            $Suggestions = $row['Suggestions'];
            $GraduationTerm = $row['GraduationTerm'];
            $Coffee = $row['Coffee'];
            $Minor = $row['Minor'];
        }
        $message = "<span style=\"color: blue;\">RECORD $PantherID FOUND</span><br>";
    } else if(strlen($PantherID) == 0) {
        $message = "<span style=\"color: red;\">Panther ID CANNOT BE EMPTY</span><br>";
    } else {
        $message = "<span style=\"color: red;\">RECORD $PantherID NOT FOUND</span><br>";
    }
}
?> 