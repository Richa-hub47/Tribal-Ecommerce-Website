<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
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

<title>TribalMarket</title>
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

    <div class="header">
        <div class="inner-header">
            <div class="logo"><a><span class="glyphicon glyphicon-fire" aria-hidden="true"></span>TribalMarket</a></div>
             
       
            <div class="header-link" ><a href="http://localhost/Emarket/login.php">Logout</a> </div>
        </div>
    </div>
    
    <div class="content">
       <div class="banner-image">
           <div class="inner-banner-image">
              <center>
               <div class="banner_content">
                   
                


   <div >
<p style="color:white;" >CONTACT US <?php echo $_SESSION['username']; ?>!</p>
<p style="color:white;">Phone:9900000000, Email:Tribalmarket@gmail.com</p>

</div>
                   
                      
                   
               </div>
                            </center>
                   
                    
                </div>
              </center>
           </div>
        </div>

            

</body>
</html>


