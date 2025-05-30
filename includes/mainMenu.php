<!-- ***************************************************************************************
  Page Name  : mainMenu.php
  Author     : Enzo Gomes
  Your URL   : ocelot-aul.fiu.edu/~edeol005
  Course     : CGS 4854
  Program #  : Program 2
  Purpose    : This page contains the main menu for Program 2 using CSS

  Due Date   : 02/17/2025
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person.

  ..........{ Enzo Felippe De Oliveira Gomes }..........
**************************************************************************************** -->

<!doctype html>
<html>
  <head>
    <title>
    CSS Main Menu 
    </title>
    <style type="text/css">
      nav ul ul {
          display: none;
      }
      
      nav ul li:hover > ul {
          display: block;
      }
      
      nav ul {
          background: #C1E1F0;
          padding: 0 15px;
          border-radius: 5px;
          list-style: none;
          position: relative;
          display: inline-table;
      }
      
      nav ul:after {
          content: ""; clear: both; display: block;
      }
      
      nav ul li {
          float: left;  
      }
      
      nav ul li:hover {
          background: #4BB8F7; 
      }
      
      nav ul li:hover a {
          color: #21A25D;
      }
      
      nav ul li a {
          display: block; padding: 25px 40px;
          color: black;
      }
      
      nav ul ul {
          background: #DFDFDF;
          position: absolute; top: 100%;
      }
      
      nav ul ul li {
          float: none;
          position: relative;
      }
      
      nav ul ul li a {
          padding: 10px 40px;
          color: #B3DED9;
      }
      
      nav ul ul li a:hover {
          background: blue;
      }
      
      nav ul ul ul {
          position: absolute; left: 100%; top: 0;
      }
      
    </style>
  </head>
  
  <body>
  
    <nav align="center">
       <ul>
          <li><a href="../index.html">Home</a></li>
          <li>
            <a href="Pgm1.html">Program 1</a>
            <ul>
              <li><a href="Page1.html">Page1</a></li>
              <li><a href="Page2.html">Page2</a></li>
              <li><a href="Page3.html">Page3</a></li>
              <li><a href="Page4.html">Page4</a></li>
              <li><a href="../index.html">Home</a></li>
            </ul>
          </li>
          <li><a href="program2.php">Program 2</a></li>
          <li><a href="program3.php">Program 3</a></li>
          <li><a href="program4.php">Program 4</a></li>

       </ul>
    </nav>
    
  </body>
</html>
