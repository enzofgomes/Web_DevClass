<!-- ***************************************************************************************
  Page Name  : ControllerFirstNextPreviousLast.php
  Author     : Enzo Gomes
  Your URL   : ocelot-aul.fiu.edu/~edeol005
  Course     : CGS4854
  Program #  : Program 4
  Purpose    : Controller to navigate customer records First, Next, Previous, Last buttons 
  Due Date   : 04/16/2025
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person.
  ..........Enzo Felippe De Oliveira Gomes..........
**************************************************************************************** -->

<?php

// Get location count from hidden input on leads.php
$location = $_POST['location'] ?? 0;
$location = (int)$location;

// Connect to database using the credentials
$server   = "ocelot.aul.fiu.edu";
$username = "spr25_edeol005";
$password = "6346299";
$database = "spr25_edeol005";

$connection = mysqli_connect($server, $username, $password, $database);
if (!$connection) {
  die("Connection failed: " . mysqli_connect_error());
}

// Setting the SQL commands for each nav buttons
$table = "customers";
$sql = "SELECT * FROM $table ORDER BY PantherID ASC";
$result = mysqli_query($connection, $sql);

if ($result) {
  $totalRows = mysqli_num_rows($result);

  if (isset($_POST['Last'])) {
  $location = $totalRows - 1;
  $message = "Pressed LAST button";
} elseif (isset($_POST['Previous'])) {
  if ($location > 0) $location--;
  $message = "Pressed PREVIOUS button";
} elseif (isset($_POST['Next'])) {
  if ($location < $totalRows - 1) $location++;
  $message = "Pressed NEXT button";
} else {
  $location = 0;
  $message = "Pressed FIRST button";
}

  mysqli_data_seek($result, $location);
  $row = mysqli_fetch_assoc($result);

  // Getting the variables from the table content
  $PantherID   = $row['PantherID'];
  $FirstName   = $row['FirstName'];
  $LastName    = $row['LastName'];
  $Email       = $row['Email'];
  $Suggestions = $row['Suggestions'];

  mysqli_free_result($result);
} 

mysqli_close($connection);

// Includes Leads screen with variables
include("Leads.php");
?>
