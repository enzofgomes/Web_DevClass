<!-- ***************************************************************************************
  Page Name  : Contact_me_Controller.php
  Author     : Enzo Gomes
  Your URL   : ocelot-aul.fiu.edu/~edeol005
  Course     : CGS4854
  Program #  : contact_me_controller.php
  Purpose    : Sends form data from Contact_me.php to the professor's email
  Due Date   : 03/26/2025
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person.
  ..........{ Enzo Felippe De Oliveira Gomes }..........
**************************************************************************************** -->
<!DOCTYPE html>
<html>
  <head>
    <title>Contact_me_Controller</title>
  </head>
          
  <body>
<?php
// Process info from the form  when  'submit'
if (isset($_POST['Submit'])) {
    // Extract input values from Contact_me.php
    $Email = $_POST['Email'];
    $LastName = $_POST['LastName'];
    $FirstName = $_POST['FirstName'];
    $Coffee = $_POST['Coffee'];
    $IT = isset($_POST['IT']) ? "IT" : "";
    $CS = isset($_POST['CS']) ? "CS" : "";
    $Physics = isset($_POST['Physics']) ? "Physics" : "";
    $Dropdowns = $_POST['Dropdowns'];
    $Comments = $_POST['Comments'];

    // Email variables
    $to = "michael.robinson@cs.fiu.edu";
    $subject = "Contact Me Enzo Gomes Submission CGS4854";

    // Email Body 

    $body = "

Your Email  $Email
Last Name   $LastName
First Name  $FirstName

Coffee      $Coffee
Major       $IT $CS $Physics

Dropdowns   $Dropdowns
                                                  
Comments    $Comments";

    // Send Email
    if(mail($to, $subject, $body)) {
        // If email is sent successfully, redirect to ContactMeSend.php
        include("ContactMeSend.php");
        exit();
    } else {
        // If email fails, show error message
        echo "<div style='text-align:center; color:red;'>Failed to send email. Please try again.</div>";
    }
} 
?>
 </body>
</html>
