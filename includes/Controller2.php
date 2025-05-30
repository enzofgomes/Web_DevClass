<!-- ***************************************************************************************
  Page Name  : Controller2.php
  Author     : Enzo Gomes
  Your URL   : ocelot-aul.fiu.edu/~edeol005
  Course     : CGS 4854
  Program #  : Program 2
  Purpose    : Processes the data submitted from program2.php and displays it.

  Due Date   : 02/17/2025
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person.

  ..........{ Enzo Felippe De Oliveira Gomes }..........
**************************************************************************************** -->

<center>
  <b>
   <font size=6>This is controller2.php</font><br>
   <font size=5>Called from Program 2</font>
  </b>
  
  <?php // Determine which submit button was pressed
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $button = "";
      if(isset($_POST["Save"])) {
         $button = "Save";
      } else if(isset($_POST["Find"])) {
         $button = "Find";
      } else if(isset($_POST["Modify"])) {
         $button = "Modify";
      } else if(isset($_POST["Delete"])) {
         $button = "Delete";
      } else if(isset($_POST["ClearScreen"])) {
         echo "<p>ClearScreen button pressed. Data cleared.</p>"; // ClearScreen button 
         exit();
      }
      
      echo "<p>You pressed the " . htmlspecialchars($button) . " button.</p>";
      
      // Display data fields inputed values.
      echo "<h4>Submitted Data:</h4>";
      echo "Panhther ID: " . htmlspecialchars($_POST['PantherID']) . "<br>";
      echo "Email: " . htmlspecialchars($_POST['Email']) . "<br>";
      echo "Last Name: " . htmlspecialchars($_POST['LastName']) . "<br>";
      echo "First Name: " . htmlspecialchars($_POST['FirstName']) . "<br>";
      echo "Address: " . htmlspecialchars($_POST['Address']) . "<br>";
      echo "City: " . htmlspecialchars($_POST['City']) . "<br>";
      echo "State: " . htmlspecialchars($_POST['State']) . "<br>";
      echo "Country: " . htmlspecialchars($_POST['Country']) . "<br>";
      echo "Zip: " . htmlspecialchars($_POST['Zip']) . "<br>";
      echo "Suggestions: " . htmlspecialchars($_POST['Suggestions']) . "<br>";
      echo "Graduation Term: " . htmlspecialchars($_POST['GraduationTerm']) . "<br>";
      
      // See which Coffee type was selected
      $coffee = "";
      if(isset($_POST['Light'])) {
         $coffee = "Light";
      } else if(isset($_POST['Cuban'])) {
         $coffee = "Cuban";
      } else if(isset($_POST['Sweet'])) {
         $coffee = "Sweet";
      } else if(isset($_POST['Decaf'])) {
         $coffee = "Decaf";
      }
      echo "Coffee: " . htmlspecialchars($coffee) . "<br>";
      
      // Read the checkboxes
      $minor = array();
      if(isset($_POST['IT'])) { $minor[] = "IT"; }
      if(isset($_POST['CS'])) { $minor[] = "CS"; }
      if(isset($_POST['Robotics'])) { $minor[] = "Robotics"; }
      if(isset($_POST['Cyber'])) { $minor[] = "Cyber"; }
      
      echo "Minor: " . (empty($minor) ? "None selected" : implode(", ", $minor)) . "<br>";
    }
  ?>
 
</center>