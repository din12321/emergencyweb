<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMERGENCY NOTIFICATION SYSTEM</title>
    <link rel="stylesheet" href="style/my.css">
</head>
<body>
   
    <ul>
    <li><a href="/index.php">Send Alert</a></li>
        <li><a href="/sms.html">Send Alert</a></li>
        <li><a href="/contact.html">Contact</a></li>
        <li><a href="/logout.php">Logout</a></li>
      </ul> 
      <br>
    
      
      
 <center>
   <div class="header">
    <div class="image">
    <h1><span>EMERGENCY NOTIFICATION SYSTEM</span></h1>
    <img src="emergency-alerts1.jpg"  >
   </center>
</div>
</div> 
   </div>

</body>
<script>
</script>
</html>