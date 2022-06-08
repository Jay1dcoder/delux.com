<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <?php 

    $name = $email = $message = "";
    $nameErr = $emailErr = $messageErr = "";

    if(isset($_POST['submit'])){
        if(empty($_POST['email'])){
            $emailErr = "Email is required";
        }else{
            $email = test($_POST['email']);
        }
    }

        if(empty($_POST['name'])){
            $nameErr = "Name is required";
        }else{
            $name = test($_POST['name']);
        }

        if(empty($_POST['message'])){
            $message = "Message is required";
        }else{
            $message = test($_POST['message']);
        }





    function test($data){
        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = stripslashes($data);
        return $data;
    }

    ?>
</head>
<body>
    <div id="toTop"></div>
    <a href="#toBottom">To Bottom</a>

    

    <h1>If you have any questions, please don't hesitate to contact use</h1>

    <form action="POSTc">
        <h1>Get in touch</h1>
        <input type="email" id="email" name="email" placeholder="Enter your email address">
        <div style = "background: red";><?php //echo $emailErr; echo $email; ?> </div><br>

        <input type="text" id="name" name="name" placeholder="Enter your name">
        <div style = "background: red";><?php //echo $nameErr; echo $name; ?> </div><br>

        <textarea name="message" id="message" cols="30" rows="10"></textarea>
        <div style = "background: red";><?php //echo $messageErr; echo $message; ?> </div><br>

        <p>* All fields are mandatory</p>

        <input type="submit" id="sendMess" name="sendMess" value="Send Message">
    </form>

    <h2>Information</h2>
    <h3>ADDRESS</h3>
    <P>Plot 32 Williams Franklin street, Coconut Island, Cavarian</P>

    <h3>PHONE?FAX</h3>
    <p>+17156787977677, +1456578789800</p>

    <h3>E-MAIL</h3>
    <p>sales@deluxhotels.com</p>
    <p>reservation@deluxhotels.com</p>
    <p>banquet@deluxhotels.com</p>

    <div>
        <div>About</div>
        <div>Gallery</div>
        <div>Our Events</div>
        <div>Dining</div>
        <div>Our Vision & Mission</div>
        <div>Terms & Conditions</div>
    </div>

    <form action="">
        <h1>Newsletter</h1>
        <h3>Subscribe to our email newsletter to receive updates and news</h3>
        <input type="email" name="newEmail" id="newEmail">

        <hr>
        <h3>Copyright &copy; 2019 Delux HOTELS & Suites</h3>
    </form>
    <div id="toBottom"></div>
    <a href="#toTop">To Top</a>
</body>
</html>