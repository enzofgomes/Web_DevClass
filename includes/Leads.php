<!-- ***************************************************************************************
  Page Name  : Leads.php
  Author     : Enzo Gomes
  Your URL   : ocelot-aul.fiu.edu/~edeol005/includes/Leads.php
  Course     : CGS4854
  Program #  : Program 4
  Purpose    : Front end to browse customer records using new navigation buttons
  Due Date   : 04/16/2025
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person.
  ..........Enzo Felippe De Oliveira Gomes..........
**************************************************************************************** -->

<?php include('mainMenu.php'); ?>

<!-- Method "post" form activity to the leads controller -->
<form method="post" action="ControllerFirstNextPreviousLast.php">
  <br><br>

  <div style="text-align:center;">
    <font face="Arial" size="5" color="black">
      <b>Program 4 Database Search</b>
    </font>
    <br><br>

    <font face="Arial" size="4" color="blue">
      <b>Home &nbsp;&nbsp; Program 1 &nbsp;&nbsp; Program 2 &nbsp;&nbsp; Program 3 &nbsp;&nbsp; Program 4</b>
    </font>
  </div>

  <br><br>

  <!-- Set up form fields within a table echo php variables-->
  <center>
    <table width="25%" border="0">

      <tr>
        <td style="text-align:left;">Panther ID</td>
        <td><input type="text" name="PantherID" value="<?php echo $PantherID ?? ''; ?>" style="width: 100%;"></td>
      </tr>

      <tr>
        <td style="text-align:left;">First Name</td>
        <td><input type="text" name="FirstName" value="<?php echo $FirstName ?? ''; ?>" style="width: 100%;"></td>
      </tr>

      <tr>
        <td style="text-align:left;">Last Name</td>
        <td><input type="text" name="LastName" value="<?php echo $LastName ?? ''; ?>" style="width: 100%;"></td>
      </tr>

      <tr>
        <td style="text-align:left;">Email</td>
        <td><input type="text" name="Email" value="<?php echo $Email ?? ''; ?>" style="width: 100%;"></td>
      </tr>

      <tr><td>&nbsp;</td></tr>

      <tr>
        <td style="text-align:left;">Suggestions</td>
        <td><textarea name="Suggestions" style="width: 100%; height: 50px;"><?php echo $Suggestions ?? ''; ?></textarea></td>
      </tr>

      <tr><td>&nbsp;</td></tr> <!-- leaves one empty row between sections -->

      <!-- $message and $location display -->
      <tr>
        <td></td>
        <td style="text-align:center;">
          <?php echo $message ?? ''; ?><br>
          <?php echo "loc = " . ($location ?? 0); ?>
        </td>
      </tr>

      <!-- Hidden input to store location -->
      <tr>
        <td colspan="2">
          <input type="hidden" name="location" value="<?php echo $location ?? 0; ?>">
        </td>
      </tr>

      <tr><td>&nbsp;</td></tr>

      <!-- 4 new submit buttons -->
      <tr>
        <td></td>
        <td style="text-align:center;">
          <input type="submit" name="First" value="First">
          <input type="submit" name="Next" value="Next">
          <input type="submit" name="Previous" value="Previous">
          <input type="submit" name="Last" value="Last">
        </td>
      </tr>

    </table>
  </center>
</form>
