<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>
<html>
    <head>
	    <style>
            body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("Home.jpg");

  /* Full height */
  height: 100%; 
  

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
        th {text-align: center;}
	    td {text-align: center; padding: 15px;}
	    table {border-spacing: 15px;}
	   
    
       .button {
        padding: 15px 25px;
        font-size: 24px;
        text-align: center;
        cursor: pointer;
        outline: none;
        color:black;
        background-color:grey;
        border: none;
        border-radius: 15px;
        box-shadow: 0 9px #999;
        }

        .button:hover {background-color: #3e8e41}

        .button:active {
        background-color: #3e8e41;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
        }
        </style>
    </head>

    <body>
        <div class="bg">
        <div align="right">
		    <table style="width:20%" "height:20%">
            <tr>
                <p><br></p>
                <p><br></p>
                <p><br></p>
                <p><br></p>
                <p><br></p>
                <p><br></p>
                <p><br></p>
                <p><br></p>  
                <p><br></p>
                <p><br></p>
                <p><br></p> 
                <p>Welcome back, <?=$_SESSION['name']?>!</p> 
            </tr>
  <tr>
    <td><a href="Addition.html"><button class="button">Addition</button></a></td> 
    <td><a href="Subtraction.html"><button class="button">Subtraction</button></a></td> 
  </tr>
  <tr>
    <td><a href="Multiplication.html"><button class="button">Multiplication</button></a></td> 
    <td><a href="Division.html"><button class="button">Division</button></a></td> 
  </tr>
</table>
</div>
</div>
</body>	
</html>
