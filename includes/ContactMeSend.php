<!-- ***************************************************************************************
  Page Name  : ContactMeSend.php
  Author     : Enzo Gomes
  Your URL   : ocelot-aul.fiu.edu/~edeol005
  Course     : CGS4854
  Program #  : ContactMeSend.php
  Purpose    : Displays a confirmation message after submitting the contact form.
  Due Date   : 03/26/2025
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person.
  ..........{ Enzo Felippe De Oliveira Gomes }..........
**************************************************************************************** -->

<!DOCTYPE html>
<html>
  <head>
    <title>Contact Me</title> 
  </head>
 
  <body>
      <?php include('Gomes_header.php'); ?> <!-- Header  -->

     <tr><td> &nbsp; </td> </tr> <!-- leaves one empty row between sections -->

      <div align="center" style="font-size: 24px; font-weight:bold; color:red;">
         CONTACT ME
      </div>
	 
     <tr><td> &nbsp; </td> </tr> <!-- leaves one empty row between sections -->

      <?php include('mainMenu.php'); ?> <!-- Main menu -->

     <tr><td> &nbsp; </td> </tr> <!-- leaves one empty row between sections -->
	  
      <div align="center" style="margin-top: 20px;">
         Your message has been submitted to michael.robinson@cs.fiu.edu<br>  <!-- guidelines don't specify if we leave a blank line or not -->
         Thank You!
 
   </body>
</html>
