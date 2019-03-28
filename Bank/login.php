<?php
    session_start();
    error_reporting(0);
    ob_start();
    
    include("config.php");
    $error="";
   if($_SERVER['REQUEST_METHOD'] == "POST") {

        $uname = $_POST['uname'];
        $pass = $_POST['pass'];
        echo $uname ." ". $pass;
        $sql = "SELECT * FROM login ";
        $res = $conn->query($sql);
        if($res->num_rows > 0)  {
            while($row = $res->fetch_assoc())   {
                echo "Uname : ". $row['uname'] . "Pass" . $row['pass'] ."<br>";

                if($row['uname'] == $uname and $row['pass'] == $pass)   {
                    $_SESSION['login_user'] = $uname;
                    echo "<script> window.location = 'welcome.php'</script>";
                    
                }
            }
        }
        $error = "Invalid username/password";
        
   }  
  
?>
<html>
   <head>
      <title>Login Page</title>
      <center><h1> Welcome To Indian Bank </h1></center>
      <style type = "text/css">
        body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
        }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body>
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <center><b>Login</b></center>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label >UserName  :</label><input type = "text" id = "uname" name = "uname" class = "box" required/><br /><br />
                  <label>Password  :</label><input type = "password" id = "pass" name = "pass" class = "box"requireds /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>