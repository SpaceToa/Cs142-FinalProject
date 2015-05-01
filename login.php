<html> 
    
    <?php
       $username="";
       $password="";
       
       $storedUsername="";
       $storedPassword="";
       
       $loginERROR=false;
       
       if (isset($_POST["btnSubmit"])){
           $username = $_POST['username'];
           $password = $_POST['password'];
           
           
           
       }
       
    ?>
    <head>
        <title>Bored Gamers Board</title>
        <meta charset="utf-8">
        <meta name="author" content="Andy Green">
        <meta name="description" content="List of links to all of my CS 142 assignemts ">

        <link rel="stylesheet" href="style.css" media="screen">

        <!--[if lt IE 9]>
            <script src="//html5shim.googlecode.com/sin/trunk/html5.js"></script>
        <![endif]-->
    </head>
    
    <body>
        <h2> Login In</h2>
        
        <form name="login" method="post" action="login.php" id="f1" <?php if($loginERROR) echo 'class="mistake"'; ?>>
            
            <label for="Username" class="required">Username</label>
            <input type="text" id="Username" name="txtName" accept=""
                    value="<?php echo $username; ?>"tabindex="010" maxlength="40"autofocus onfocus="this.select()" >
           
            <label for="password" class="required">Username</label>
            <input type="text" id="password" name="txtName" accept=""
                    value="<?php echo $username; ?>"tabindex="010" maxlength="40"autofocus onfocus="this.select()" >
            
            <input type="submit" id="btnSubmit" name="btnSubmit" value="Register" tabindex="991" class="button">
                    
        </form> 
        
    </body>
</html>