<!-- ***************************************************************************************
  Page Name  : Contact_me.php
  Author     : Enzo Gomes
  Your URL   : ocelot.aul.fiu.edu/~edeol005
  Course     : CGS4854
  Program #  : Contact_me.php
  Purpose    : Displays a contact form and calls for teh controller
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
    <?php include('Gomes_header.php'); ?> <!-- Header -->
    
     <tr><td> &nbsp; </td> </tr> <!-- leaves one empty row between sections -->

    <div style="text-align:center; font-size: 24px; font-weight:bold; color:red;">
      CONTACT ME
    </div>

     <tr><td> &nbsp; </td> </tr> <!-- leaves one empty row between sections -->

    <?php include('mainMenu.php'); ?> <!-- Main Menu -->

     <tr><td> &nbsp; </td> </tr> <!-- leaves one empty row between sections -->

    <form method="post" action="contact_me_controller.php"> <!-- POST contact_me Controller -->
      <table style="width: 30%" align="center"> 
        <tr>
          <td style="width: 5%; text-align:left;">Your Email</td>
          <td style="width: 20%;">
		  <input type="text" name="Email" value="<?php echo $Email; ?>" style="width: 77%;"></td>
        </tr>
        
        <tr>
          <td style="text-align:left;">Last Name</td>
          <td><input type="text" name="LastName" value="<?php echo $LastName; ?>" style="width: 77%;"></td>
        </tr>
        
        <tr>
          <td style="text-align:left;">First Name</td>
          <td><input type="text" name="FirstName" value="<?php echo $FirstName; ?>" style="width: 77%;"></td>
        </tr>

     <tr><td> &nbsp; </td> </tr> <!-- leaves one empty row between sections -->
				
	 <tr> <!-- create radio buttons section -->
          <td style="width: 5%; text-align:left;">Coffee &nbsp; </td>
           <td style="width: 20%; text-align:left;">
              <table style="width: 100%;">
                 <tr>
                  <td style="width: 20%;"> <input type="radio" name="Coffee" value="Light" <?php if ($Coffee == "Light") echo "checked"; ?>> Light</td>
                  <td style="width: 20%;"> <input type="radio" name="Coffee" value="Dark" <?php if ($Coffee == "Dark") echo "checked"; ?>> Dark</td>
                  <td style="width: 20%;">  <input type="radio" name="Coffee" value="Sweet" <?php if ($Coffee == "Sweet") echo "checked"; ?>> Sweet</td>
                 </tr>
               </table>
            </td>
           </tr>
            
     <tr> <!-- create checkbox section -->
           <td style="width: 5%; text-align:left;">Major &nbsp; </td> 
           <td style="width: 20%; text-align:left;">
              <table style="width: 100%;">
                 <tr>
                 <td style="width: 20%;"> <input type="checkbox" name="IT" value="IT" <?php if ($IT == "IT") echo "checked"; ?>> IT</td>
                 <td style="width: 20%;">  <input type="checkbox" name="CS" value="CS" <?php if ($CS == "CS") echo "checked"; ?>> CS</td>
                 <td style="width: 20%;">     <input type="checkbox" name="Physics" value="Physics" <?php if ($Physics == "Physics") echo "checked"; ?>> Physics</td>
                 </tr>
               </table>
             </td>
           </tr>

     <tr><td> &nbsp; </td> </tr> <!-- leaves one empty row between sections -->

        <tr>
           <td style="width: 5%; text-align: left;">Dropdowns &nbsp; </td>
           <td style="width: 20%; text-align: left;">
            <select name="Dropdowns" style="width: 70%;">
              <option value="Option1" <?php if ($Dropdowns == "Option1") echo "selected"; ?>>Option 1</option>
              <option value="Option2" <?php if ($Dropdowns == "Option2") echo "selected"; ?>>Option 2</option>
              <option value="Option3" <?php if ($Dropdowns == "Option3") echo "selected"; ?>>Option 3</option>
            </select>
          </td>
        </tr>

     <tr><td> &nbsp; </td> </tr> <!-- leaves one empty row between sections -->

        <tr>
         <td style="width: 5%; text-align: left;">Comments &nbsp; </td>
          <td style="width: 60%;">
            <textarea name="Comments" style="width: 63%; height: 50px;"><?php echo $Comments;?></textarea> 
          </td>
        </tr>


     <tr><td> &nbsp; </td> </tr> <!-- leaves one empty row between sections -->

        <tr>         
          <td colspan="2" style="text-align:center; padding-top: 10px;">
            <input type="submit" name="Submit"value="Submit"> &nbsp;
            <input type="reset" name="Clear" value="Clear">
          </td>
        </tr>

     <tr><td> &nbsp; </td> </tr> <!-- leaves one empty row between sections -->

      </table>
    </form>

     <tr><td> &nbsp; </td> </tr> <!-- leaves one empty row between sections -->

    <?php include('mainMenu.php'); ?> <!-- Bottom Menu -->
	
  </body>
</html>
