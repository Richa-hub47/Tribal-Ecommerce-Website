<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Registration</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            .top_margin{
                margin-top:20px;}
            .h3{
                color:blue;
            }   
             
                
            
        </style>
        
        <!---- The page has a title weather entered page-->

<title>Registration</title>
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
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username); 
 $email = stripslashes($_REQUEST['email']);
 $email = mysqli_real_escape_string($con,$email);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 $trn_date = date("Y-m-d H:i:s");
 $address = stripslashes($_REQUEST['address']);
        //escapes special characters in a string
 $address = mysqli_real_escape_string($con,$address); 
        $query = "INSERT into `users` (username, password, email, trn_date, address)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date', '$address')";
        $result = mysqli_query($con,$query);
        if($result){
            
            echo  "<div class='new'     >
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='http://localhost/Emarket/login.php' >Login</a></div>";  
        }
    }else{
?>

    
    
    <div class="header">
        <div class="inner-header">
            <div class="logo"><a><span class="glyphicon glyphicon-fire" aria-hidden="true"></span>TribalMarket</a></div>
         <div class="header-link"><a href="http://localhost/Emarket/registration.php" >Sign up</a> </div>
            <div class="header-link"><a href="http://localhost/Emarket/login.php">Login</a> </div>
          
        </div>
    </div>
    
    <div class="content">
       <div class="banner-image">
           <div class="inner-banner-image" >
              <center>
               <div class="banner_content">


    <div class="form">
<h1 style="color:yellow;">Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required /></br></br> 
<textarea type="address" name="address" rows="10" cols="25" placeholder="address" required ></textarea></br></br> 
<input type="submit" name="submit" value="Register" />
</form>
</div>
<?php } ?>
                   
                      
                   
               </div>
                            </center>
                   
                    
                </div>
              
           </div>
        </div>

            

</body>
</html>


