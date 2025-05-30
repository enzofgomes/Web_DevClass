<!-- ***************************************************************************************
  Page Name  : pgm3.php
  Author     : Enzo Gomes
  Your URL   : ocelot-aul.fiu.edu/~edeol005
  Course     : CGS4854
  Program #  : Program 3
  Purpose    : Front end for Program 3 user info and CRUD operations.
  Due Date   : 03/26/2025
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person.
  ..........{ Enzo Felippe De Oliveira Gomes }..........
**************************************************************************************** -->

<title> GomesEPgm3 </title>
<?php include('Gomes_header.php'); ?>
<br>
<?php include('mainMenu.php'); ?>

<br>
      <form method="post" action="Controller3.php">
         <table style="width: 35%" align="center"> <!-- 9 different text input fields -->
            <tr> <!-- #1 User's Telephone -->
               <td style="width: 5%; text-align:right;">Panther ID &nbsp;</td>
               <td style="width: 20%;">
                 <input type="text" name="PantherID" value="<?php echo $PantherID ?>" style="width: 87%;">
               </td>
            </tr>
            
            <tr> <!-- #2 User's Email -->
               <td style="width: 5%; text-align:right;">Email &nbsp;</td>
               <td style="width: 20%;">
                 <input type="text" name="Email" value="<?php echo $Email ?>" style="width: 87%;">
               </td>
            </tr>  
            
            <tr> <!-- #3 User's Last Name -->
               <td style="width: 5%; text-align: right;">Last Name &nbsp; </td>
               <td style="width: 20%;">
                 <input type="text" name="LastName" value="<?php echo $LastName ?>" style="width: 87%;">
               </td>
            </tr>
            
            <tr> <!-- #4 User's First Name -->
               <td style="width: 5%; text-align: right;">First Name &nbsp; </td>
               <td style="width: 20%;">
                 <input type="text" name="FirstName" value="<?php echo$FirstName ?>" style="width: 87%;">
               </td>
            </tr>				
            
             <tr> <!-- #5 User's Address -->
               <td style="width: 5%; text-align: right;">Address &nbsp; </td>
               <td style="width: 20%;">
                  <input id="birth" type="text" name="Address" value="<?php echo $Address ?>" style="width: 87%;">
               </td>
            </tr>		
            
            <tr> <!-- #6 User's City -->
               <td style="width: 5%; text-align: right;">City &nbsp; </td>
               <td style="width: 20%;">
                  <input id="birth" type="text" name="City" value="<?php echo$City ?>" style="width: 57%;">
               </td>
            </tr>	
            
            <tr> <!-- #7 User's State -->
               <td style="width: 5%; text-align: right;">State &nbsp; </td>
               <td style="width: 20%;">
                  <input id="birth" type="text" name="State" value="<?php echo $State ?>" style="width: 57%;">
               </td>
            </tr>		
            
            <tr> <!-- #8 User's Country -->
               <td style="width: 5%; text-align: right;">Country &nbsp; </td>
               <td style="width: 20%;">
                  <input id="birth" type="text" name="Country" value="<?php echo $Country ?>" style="width: 57%;">
               </td>
            </tr>				
            
            <tr> <!-- #9 User's Zip -->
               <td style="width: 5%; text-align: right;">Zip &nbsp; </td>
               <td style="width: 20%;">
                  <input id="birth" type="text" name="Zip" value="<?php echo $Zip ?>" style="width: 57%;">
               </td>
            </tr>			
           
            <tr><td> &nbsp; </td> </tr> <!-- leaves one empty row between sections -->
            
            <tr> <!-- create textarea section -->
               <td style="width: 5%; text-align: right;">Suggestions &nbsp; </td>
               <td style="width: 60%;">
                 <textarea name="Suggestions" style="width: 63%; height: 50px;"><?php echo $Suggestions;?></textarea> 
               </td>
            </tr>
               
            <tr><td> &nbsp; </td> </tr> <!-- leaves one empty row between sections -->
           
            <tr> <!-- create dropdown menu section -->
               <td style="width: 5%; text-align: right;">Graduation Term &nbsp; </td>
               <td style="width: 20%; text-align: left;">
                 <select name="GraduationTerm" style="width: 70%;">
                   <option value="Spring"  <?php if($GraduationTerm == "Spring") echo "checked"; ?>>Spring</option>
                   <option value="Summer" <?php if($GraduationTerm == "Summer") echo "checked"; ?>>Summer</option>
                   <option value="Fall" <?php if($GraduationTerm == "Fall") echo "checked"; ?>>Fall</option>
                 </select>
               </td>
            </tr>
            
            <tr><td> &nbsp; </td> </tr> <!-- leaves one empty row between sections -->
            
            <tr> <!-- create radio buttons section -->
                <td style="width: 5%; text-align:right;">Coffee &nbsp; </td>
                <td style="width: 20%; text-align:left;">
                   <table style="width: 100%;">
                      <tr>
                         <td style="width: 20%;"> <input type="radio" name="Coffee" value="Light" <?php if($Coffee == "Light") echo "checked"; ?>> Light </td>
                         <td style="width: 20%;"> <input type="radio" name="Coffee" value="Cuban"  <?php if($Coffee == "Cuban") echo "checked"; ?>> Cuban </td>
                         <td style="width: 20%;"> <input type="radio" name="Coffee" value="Sweet"  <?php if($Coffee == "Sweet") echo "checked"; ?>> Sweet </td>
                         <td style="width: 20%;"> <input type="radio" name="Coffee" value="Decaf"  <?php if($Coffee == "Dcaf") echo "checked"; ?>> Decaf </td>
                      </tr>
                   </table>
                </td>
            </tr>
            
            <tr> <!-- create checkbox section -->
                <td style="width: 5%; text-align:right;">Minor &nbsp; </td> 
                <td style="width: 20%; text-align:left;">
                   <table style="width: 100%;">
                      <tr>
                         <td style="width: 20%;"> <input type="checkbox" name="IT" value="IT"  <?php if ($IT == "IT") echo "checked";?>> IT </td>
                         <td style="width: 20%;"> <input type="checkbox" name="CS" value="CS" <?php if ($CS == "CS") echo "checked";?>> CS </td>
                         <td style="width: 20%;"> <input type="checkbox" name="Robotics" value="Robotics" <?php if ($Robotics == "Robotics") echo "checked";?>> Robotics </td>
                         <td style="width: 20%;"> <input type="checkbox" name="Cyber" value="Cyber" <?php if ($Cyber == "Cyber") echo "checked";?>> Cyber </td>
                      </tr>
                   </table>
                </td>
            </tr>

            <tr><td> &nbsp; </td> </tr> <!-- leaves one empty row between sections -->
            
            <tr>
               <td style="width: 5%;"> </td>            
               <td style="width: 20%;" align=center> 
                <?php echo isset($message) ? $message : ''; ?>
               </td>
            </tr>
               
            <tr><td> &nbsp; </td> </tr> <!-- leaves one empty row between sections -->

            <tr> <!-- create 5 submit buttons -->
               <td style="width: 15%;"> </td>            
               <td style="width: 20%; align="center"> 
                  <input type="submit" name="Save" value="Save">&nbsp;
                  <input type="submit" name="Find" value="Find">&nbsp;
                  <input type="submit" name="Modify" value="Modify">&nbsp;
                  <input type="submit" name="Delete" value="Delete">&nbsp;
                  <input type="submit" name="Clear" value="Clear">&nbsp;
                  <input type="submit" name="Contact_Me" value="Contact_Me"> 
                  <input type="hidden" name="found"  value="<?php echo $found ?>" >				  
               </td>
            </tr>         
           
            <tr><td> &nbsp; </td> </tr> <!-- leaves one empty row between sections -->
         </table>
      </form> 
      
      <?php include('mainMenu.php'); ?>
      
      <tr><td> &nbsp; </td> </tr> <!-- leaves one empty row between sections -->

      <div style="text-align: center; font-weight: bold; margin-top: 20px;">
         Enzo Felippe De Oliveira Gomes
      </div>

