<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
      <title>TribalMarket</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            .top_margin{
                margin-top:20px;
            }
        </style>
        
        <!---- The page has a title weather entered page-->

<title>Login</title>
<link rel="shortcut icon" href="./img/srtcticon.png" type="image/png" >

<!---- External css file index.css placed in the folder css is linked-->

<link  href="style.css" rel="stylesheet" type="text/css"/>

    </head>
</head>
<body>
    <div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 //Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
 $result = mysqli_query($con,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
        if($rows==1){
     $_SESSION['username'] = $username;
            // Redirect user to index.php
     header("Location: index.php");
         }else{
 echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php' >Login</a></div>";
 }
    }else{
?>
    
    
    <div class="header">
        <div class="inner-header">
            <div class="logo"><a><span class="glyphicon glyphicon-fire" aria-hidden="true"></span>TribalMarket</a></div>
              <div class="header-link"><a href="http://localhost/Emarket/registration.php">Sign up</a> </div>
           <div class="header-link"><a href="http://localhost/Emarket/login.php">Login</a> </div>
           
        </div>
    </div>
    
    <div class="content">
       <div class="banner-image">
           <div class="inner-banner-image">
              <center>
               <div class="banner_content">


<div class="form">
<h1 style="color:yellow;">Login</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required /></br>
<input name="submit" type="submit" value="Login" />
</form></br>
<p style="color:yellow;">Not registered yet? <a href='registration.php'>Register Here</a></p>
</div>
<?php } ?>
                   
                      
                   
               </div>
                            </center>
                   
                    
                </div>
              
           </div>
        </div>

            

</body>
</html>



                  
                   
