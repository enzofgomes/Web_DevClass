  <!-- ***************************************************************************************
  Page Name  : program4.php
  Author     : Enzo Gomes
  Your URL   : ocelot-aul.fiu.edu/~edeol005
  Course     : CGS4854
  Program #  : Program 4
  Purpose    : Front end for Program 4 user info and CRUD buttons and extra features included.
  Due Date   : 04/16/2025
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person.
  ..........Enzo Felippe De Oliveira Gomes..........
**************************************************************************************** -->

<title>GomesEPgm4</title>
<?php include('Gomes_header.php'); ?>

<!-- JavaScript for Log in info and Current Time -->
<script>
   const now = new Date();
   const loginTime = now.toString();
   function updateCurrentTime() {
      const time = new Date();
      document.getElementById("currentTime").innerText = "Current Time: " + time.toLocaleTimeString();
   }
   setInterval(updateCurrentTime, 1000);
</script>

<!-- Display Log in message and time -->
<p style="text-align:center;">
   Logged in: <script>document.write(loginTime)</script> <span id="currentTime"></span>
</p>

<div style="text-align:center; font-weight:bold; color:red; font-size: 24px;">Program 4</div>
<br>
<?php include('mainMenu.php'); ?>
  
<!-- tooltip setup, to display label when hovering over items -->  
<style>
  .tooltip {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black;
  }

  .tooltip .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: green;
    color: black;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: -60px;
    opacity: 0;
    transition: opacity 1s;
  }

  .tooltip .tooltiptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: red transparent transparent transparent;
  }

  .tooltip:hover .tooltiptext {
    visibility: visible;
    opacity: 1;
  }
</style>

     <form method="post" action="Controller4.php">
         <table style="width: 52%" align="center"> <!-- 9 different text input fields -->
            <tr> <!-- #1 User's PantherID -->
               <td style="width: 5%; text-align:right;">
                 <div class="tooltip">Panther ID
                   <span class="tooltiptext">Enter your Panther ID</span>
                 </div> &nbsp;
               </td>
               <td style="width: 20%;">
                 <input type="text" name="PantherID" value="<?php echo $PantherID ?>" style="width: 87%;" placeholder="Enter Panther ID">
               </td>
            </tr>
            
            <tr> <!-- #2 User's Email -->
               <td style="width: 5%; text-align:right;">
                 <div class="tooltip">Email
                   <span class="tooltiptext">Enter your Email address</span>
                 </div> &nbsp;
               </td>
               <td style="width: 20%;">
                 <input type="text" name="Email" value="<?php echo $Email ?>" style="width: 87%;" placeholder="Enter Email">
               </td>
            </tr>  
            
            <tr> <!-- #3 User's Last Name -->
               <td style="width: 5%; text-align: right;">
                 <div class="tooltip">Last Name
                   <span class="tooltiptext">Enter your Last Name</span>
                 </div> &nbsp;
               </td>
               <td style="width: 20%;">
                 <input type="text" name="LastName" value="<?php echo $LastName ?>" style="width: 87%;" placeholder="Enter Last Name">
               </td>
            </tr>
            
            <tr> <!-- #4 User's First Name -->
               <td style="width: 5%; text-align: right;">
                 <div class="tooltip">First Name
                   <span class="tooltiptext">Enter your First Name</span>
                 </div> &nbsp;
               </td>
               <td style="width: 20%;">
                 <input type="text" name="FirstName" value="<?php echo$FirstName ?>" style="width: 87%;" placeholder="Enter First Name">
               </td>
            </tr>				
            
             <tr> <!-- #5 User's Address -->
               <td style="width: 5%; text-align: right;">
                 <div class="tooltip">Address
                   <span class="tooltiptext">Enter your Address</span>
                 </div> &nbsp;
               </td>
               <td style="width: 20%;">
                  <input id="birth" type="text" name="Address" value="<?php echo $Address ?>" style="width: 87%;" placeholder="Enter Address">
               </td>
            </tr>		
            
            <tr> <!-- #6 User's City -->
               <td style="width: 5%; text-align: right;">
                 <div class="tooltip">City
                   <span class="tooltiptext">Enter your City</span>
                 </div> &nbsp;
               </td>
               <td style="width: 20%;">
                  <input id="birth" type="text" name="City" value="<?php echo$City ?>" style="width: 57%;" placeholder="Enter City">
               </td>
            </tr>	
            
            <tr> <!-- #7 User's State -->
               <td style="width: 5%; text-align: right;">
                 <div class="tooltip">State
                   <span class="tooltiptext">Enter your State</span>
                 </div> &nbsp;
               </td>
               <td style="width: 20%;">
                  <input id="birth" type="text" name="State" value="<?php echo $State ?>" style="width: 57%;" placeholder="Enter State">
               </td>
            </tr>		
            
            <tr> <!-- #8 User's Country -->
               <td style="width: 5%; text-align: right;">
                 <div class="tooltip">Country
                   <span class="tooltiptext">Enter your Country</span>
                 </div> &nbsp;
               </td>
               <td style="width: 20%;">
                  <input id="birth" type="text" name="Country" value="<?php echo $Country ?>" style="width: 57%;" placeholder="Enter Country">
               </td>
            </tr>				
            
            <tr> <!-- #9 User's Zip -->
               <td style="width: 5%; text-align: right;">
                 <div class="tooltip">Zip
                   <span class="tooltiptext">Enter your Zip Code</span>
                 </div> &nbsp;
               </td>
               <td style="width: 20%;">
                  <input id="birth" type="text" name="Zip" value="<?php echo $Zip ?>" style="width: 57%;" placeholder="Enter Zip Code">
               </td>
            </tr>			
           
            <tr><td> &nbsp; </td> </tr> <!-- leaves one empty row between sections -->
            
            <tr> <!-- create textarea section -->
               <td style="width: 5%; text-align: right;">
                <div class="tooltip">Suggestions
                 <span class="tooltiptext">Leave a suggestion</span>
                </div> &nbsp;
               </td>
               <td style="width: 60%;">
                 <textarea name="Suggestions" style="width: 63%; height: 50px;" placeholder="Enter your suggestions here"><?php echo $Suggestions;?></textarea>
               </td>
            </tr>
               
            <tr><td> &nbsp; </td> </tr> <!-- leaves one empty row between sections -->
           
            <tr> <!-- create dropdown menu section -->
               <td style="width: 5%; text-align: right;">
                <div class="tooltip">Graduation Term
                 <span class="tooltiptext">Select your expected graduation term</span>
                </div> &nbsp;
               </td>
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
               <td style="width: 5%; text-align:right;">
                <div class="tooltip">Coffee
                 <span class="tooltiptext">Choose your favorite coffee type</span>
                </div> &nbsp;
               </td>
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
               <td style="width: 5%; text-align:right;">
                <div class="tooltip">Minor
                 <span class="tooltiptext">Select minors you are pursuing</span>
                </div> &nbsp;
               </td>
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
                   <input type="submit" name="Save" value="Save">
                   <input type="submit" name="Find" value="Find">
                   <input type="submit" name="Modify" value="Modify">
                   <input type="submit" name="Delete" value="Delete">
                   <input type="submit" name="Clear" value="Clear">
                   <input type="submit" name="Contact_Me" value="Contact_Me">
                   <button type="button" onclick="window.open('Help.php', 'Help', 'width=400,height=400,scrollbars=yes,resizable=yes,left=100,top=100')">Help</button>
                   <input type="submit" name="About" value="About">
                   <input type="submit" name="Leads" value="Leads">
                   <input type="submit" name="Python" value="Python">
                   <input type="hidden" name="found" value="<?php echo $found ?>">  
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