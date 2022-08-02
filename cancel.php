<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"/>
    <script src="https://kit.fontawesome.com/b32f1a67cb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="cancel.css">
    </head>
    <body> 
        
        <div class="logo"> <a href="landing.php" title="GO BACK TO HOME PAGE"> DELUX HOTEL </a></div>
         <form method="POST" action=""><br><br>
                    <i class="fas fa-user icon"></i>
            <h1>CANCEL YOUR RESERVATION</h1>
                    <?php 
                    if(isset($_SESSION['message']))
                    {
                        echo $_SESSION["message"];
                         $_SESSION["message"] = ""; 
                    }
                        ?>

        <div class="form-input">
            <input type="text" placeholder="Enter Username or Email" name="uname">
        </div>

        <div class="message">
           <a href="login1.php">Back</a><br>
         </div>
                    
                    <input type="submit" class="submit" value="CANCEL" name="submit">
        </form>
    </body>
</html>