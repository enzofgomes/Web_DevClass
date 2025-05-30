<!-- ***************************************************************************************
  Page Name  : Help.php
  Author     : Enzo Gomes
  Your URL   : ocelot-aul.fiu.edu/~edeol005
  Course     : CGS4854
  Program #  : Program 4
  Purpose    : Show the functionality of each button in a popup window.
  Due Date   : 04/16/2025
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person.
  ..........{ Enzo Felippe De Oliveira Gomes }..........
**************************************************************************************** -->

<!DOCTYPE html>
<html>
<head>
    <title>Help Enzo Gomes</title>
</head>
<body onload="help()">
    <script>
        function help() {
            // Open a new pop up window when the function is called
            var myWindow = window.open("", "Help", "width=300, height=600, scrollbars=yes,resizable=yes, left=80, top=80");    	
             
            // Display the purpose of each button on the form in the pop up window
            myWindow.document.write("<h2>Buttons Functions:</h2>");
            myWindow.document.write("<p><b>Save.</b> Use to save a new record.</p>");
            myWindow.document.write("<p><b>Find.</b> Use to find a record.</p>");
            myWindow.document.write("<p><b>Modify.</b> Use to modify an existing record.</p>");
            myWindow.document.write("<p><b>Delete.</b> Use to delete a record.</p>");
            myWindow.document.write("<p><b>Clear.</b> Use to clear the form fields.</p>");
            myWindow.document.write("<p><b>Help.</b> Opens your beloved help window.</p>");
            myWindow.document.write("<p><b>About.</b> Information about this application.</p>");
        }
    </script>
</body>
</html> 