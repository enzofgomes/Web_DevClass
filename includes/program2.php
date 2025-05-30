<!-- ***************************************************************************************
  Page Name  : program2.php
  Author     : Enzo Gomes
  Your URL   : ocelot-aul.fiu.edu/~edeol005
  Course     : CGS 4854
  Program #  : Program 2
  Purpose    : This is the main page for program 2

  Due Date   : 02/17/2025
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person.

  ..........{ Enzo Felippe De Oliveira Gomes }..........
**************************************************************************************** -->

<title> GomesEPgm2 </title>
<?php include('Gomes_header.php'); ?>
<br>
<?php include('mainMenu.php'); ?>

<br>
      <form method="post" action="Controller2.php"> <!-- ??another way to center table <table style="width: 50%; margin: 0px auto; padding-right: 10%;"> -->
         <table style="width: 30%" align="center"> <!-- 9 different text input fields -->
            <tr> <!-- #1 User's Telephone -->
               <td style="width: 5%; text-align:right;">Panther ID &nbsp;</td>
               <td style="width: 20%;">
                  <input type="text" name="PantherID" value="" style="width: 87%;">
               </td>
            </tr>
            
            <tr> <!-- #2 User's Email -->
               <td style="width: 5%; text-align:right;">Email &nbsp;</td>
               <td style="width: 20%;">
                  <input type="text" name="Email" value="" style="width: 87%;">
               </td>
            </tr>  
            
            <tr> <!-- #3 User's Last Name -->
               <td style="width: 5%; text-align: right;">Last Name &nbsp; </td>
               <td style="width: 20%;">
                  <input type="text" name="LastName" value="" style="width: 87%;">
               </td>
            </tr>
            
            <tr> <!-- #4 User's First Name -->
               <td style="width: 5%; text-align: right;">First Name &nbsp; </td>
               <td style="width: 20%;">
                  <input id="birth" type="text" name="FirstName" value="" style="width: 87%;">
               </td>
            </tr>				
            
            <tr> <!-- #5 User's Address -->
               <td style="width: 5%; text-align: right;">Address &nbsp; </td>
               <td style="width: 20%;">
                  <input id="birth" type="text" name="Address" value="" style="width: 87%;">
               </td>
            </tr>		
            
            <tr> <!-- #6 User's City -->
               <td style="width: 5%; text-align: right;">City &nbsp; </td>
               <td style="width: 20%;">
                  <input id="birth" type="text" name="City" value="" style="width: 57%;">
               </td>
            </tr>	
            
            <tr> <!-- #7 User's State -->
               <td style="width: 5%; text-align: right;">State &nbsp; </td>
               <td style="width: 20%;">
                  <input id="birth" type="text" name="State" value="" style="width: 57%;">
               </td>
            </tr>		
            
            <tr> <!-- #8 User's Country -->
               <td style="width: 5%; text-align: right;">Country &nbsp; </td>
               <td style="width: 20%;">
                  <input id="birth" type="text" name="Country" value="" style="width: 57%;">
               </td>
            </tr>				
            
            <tr> <!-- #9 User's Zip -->
               <td style="width: 5%; text-align: right;">Zip &nbsp; </td>
               <td style="width: 20%;">
                  <input id="birth" type="text" name="Zip" value="" style="width: 57%;">
               </td>
            </tr>			
           
            <tr><td> &nbsp; </td> </tr> <!-- leaves one empty row between sections -->
            
            <tr> <!-- create textarea section -->
               <td style="width: 5%; text-align: right;">Suggestions &nbsp; </td>
               <td style="width: 60%;">
                 <textarea name="Suggestions" style="width: 63%; height: 50px;"></textarea> 
               </td>
            </tr>
               
            <tr><td> &nbsp; </td> </tr> <!-- leaves one empty row between sections -->
           
            <tr> <!-- create dropdown menu section -->
               <td style="width: 5%; text-align: right;">Graduation Term &nbsp; </td>
               <td style="width: 20%; text-align: left;">
                   <select name="GraduationTerm" style="width: 70%;">
                      <option value="Spring">Spring</option>
                      <option value="Summer">Summer</option>
                      <option value="Fall">Fall</option>
                   </select>
               </td>
            </tr>
            
            <tr><td> &nbsp; </td> </tr> <!-- leaves one empty row between sections -->
            
            <tr> <!-- create radio buttons section -->
                <td style="width: 5%; text-align:right;">Coffee &nbsp; </td>
                <td style="width: 20%; text-align:left;">
                   <table style="width: 100%;">
                      <tr>
                         <td style="width: 20%;"> <input type="radio" name="Light" value="Light">Light </td>
                         <td style="width: 20%;"> <input type="radio" name="Cuban" value="Cuban">Cuban </td>
                         <td style="width: 20%;"> <input type="radio" name="Sweet" value="Sweet">Sweet </td>
                         <td style="width: 20%;"> <input type="radio" name="Decaf" value="Decaf">Decaf </td>
                      </tr>
                   </table>
                </td>
            </tr>
            
            <tr> <!-- create checkbox section -->
                <td style="width: 5%; text-align:right;">Minor &nbsp; </td> 
                <td style="width: 20%; text-align:left;">
                   <table style="width: 100%;">
                      <tr>
                         <td style="width: 20%;"> <input type="checkbox" name="IT" value="IT">IT </td>
                         <td style="width: 20%;"> <input type="checkbox" name="CS" value="CS">CS </td>
                         <td style="width: 20%;"> <input type="checkbox" name="Robotics" value="Robotics">Robotics </td>
                         <td style="width: 20%;"> <input type="checkbox" name="Cyber" value="Engineering">Cyber </td>
                      </tr>
                   </table>
                </td>
            </tr>

            <tr><td> &nbsp; </td> </tr> <!-- leaves one empty row between sections -->
            
            <tr>
               <td style="width: 5%;"> </td>            
               <td style="width: 20%;" align=center> 
                $message
               </td>
            </tr>
               
            <tr><td> &nbsp; </td> </tr> <!-- leaves one empty row between sections -->

            <tr> <!-- create 4 submit buttons -->
               <td style="width: 15%;"> </td>            
               <td style="width: 20%; align="center"> 
                  <input type="submit" name="Save" value="Save">&nbsp;
                  <input type="submit" name="Find" value="Find">&nbsp;
                  <input type="submit" name="Modify" value="Modify">&nbsp;
                  <input type="submit" name="Delete" value="Delete">&nbsp;
                  <input type="submit" name="ClearScreen" value="ClearScreen">
               </td>
            </tr>            
            <tr><td> &nbsp; </td> </tr> <!-- leaves one empty row between sections -->
         </table>
      </form>

<?php include('mainMenu.php'); ?>
