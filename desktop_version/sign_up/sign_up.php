<?php
include("C:\\xampp\\htdocs\\test.php");
include("C:\\xampp\\htdocs\\signup.php");
if($_SERVER['REQUEST_METHOD']=='POST'){
    $signup = new Signup();
    $result = $signup->evaluate($_POST);
   
}

?>

<!DOCTYPE html>
<html>
    <head>
        <link href="../main/main.css" rel="stylesheet">
        <link href="../signe_in/sign.css" rel="stylesheet">

        <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="sign_up.css" rel="stylesheet">

    </head>
    <body>
        <header>
        <div class="navbar">
            <div class="logo"><a href="#">Loco</a></div>
            <ul class="links">
                <li><a href="../main/index.html"><i class="fa-solid fa-house"></i></a></li>
                <li><a href="#"><i class="fa-solid fa-magnifying-glass"></i></a></li>
                <li><a href="#"><i class="fa-solid fa-gear"></i></a></li>
                <li><a href="../signe_in/sign.html"><i class="fa-solid fa-circle-user"></i></a></li>
            </ul>
           
            <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
            </div>
            
        </div></header><div class="dropdown_menu">
                <li class="left_flech"><a><i class="fa-solid fa-arrow-right"></i></a></li>
                <li class="menu"><a href="../main/index.html"><i class="fa-solid fa-house"></i>-Home</a></li>
                <li class="menu"><a href="#"><i class="fa-solid fa-magnifying-glass"></i>-Search</a></li>
                <li class="menu"><a href="#"><i class="fa-solid fa-gear"></i>-Setting</a></li>
                <li class="menu"><a href="../signe_in/sign.html"><i class="fa-solid fa-circle-user"></i>-Account</a></li>
            </div>
            <main>  
                <form class="frame" method = "POST" action="">
                    <h1>Sign in</h1>
               
                    <input type="text" name = "first_name" class="First_name" placeholder="First name" autofocus="true">
                    <input type="text" name = "last_name" class="Last_name" placeholder="Last name" > 
                    <input type="email" name="email" class="email" placeholder="Email">
                    <input type="password" name="password"  class="password" placeholder="Password">              
                    <input type="submit" name ="submit" value="Sign up"  class="sign_up">
            
                    </form>
            

                    
           
            </main>
            <script src="../main/main.js"></script>
    </body>
</html>