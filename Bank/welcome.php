<?php
   include('session.php');
?>
<html>
   
   <script>

    function func(){
        if(document.getElementById("r1").checked)
        {
            window.location = "checkBal.php"
            document.getElementById("p").innerHTML = "r1";
        }
        
        if(document.getElementById("r2").checked)
        {
            window.location = "deposit.php"
            document.getElementById("p").innerHTML = "r2";
        }
        
        if(document.getElementById("r3").checked)
        {
            window.location = "checkBal.php"
            document.getElementById("p").innerHTML = "r3";
        }
    }

   </script>
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welcome <?php echo $login_session; ?></h1> 
      
      <input type = "radio" name = "radio"id = "r1">Check Balance </>
      <input type = "radio" name = "radio" id = "r2">Deposit </>
      <input type = "radio" name = "radio" id = "r3">Withdrawal </>
      <button onClick = func() >Proceed</button>
      <p id = "p"></p>
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html>