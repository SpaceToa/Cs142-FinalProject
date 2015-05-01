<?php

//Debug
$debug = TRUE;

if(isset($_GET["debug"])){
    $debug = true;
}

if ($debug){ print "<p>DEBUG MODE IS ON</p>";}

//Setting variables

$name="";
$account="";
$system="";
$game="";
$description="";
$timeSubmit="";

//get current time
date_default_timezone_set(America/New_York);
$date = date('m/d/Y h:i:s a', time());
print $date;
        
//ERROR variables

$nameERROR=false;


// Start of Recording to CSV

if (isset($_POST["btnSubmit"])){
 print "working";
    //******************************************************************
    // is the refeering web page the one we want or is someone trying 
    // to hack in. this is not 100% reliable but ok for our purposes   */
    //
    // Security check block one, no changes needed
    
   //** Temp out for reasons ---^---^---^---^---^---^-- 
   //$fromPage = getenv("http_referer"); 

   //if ($debug) print "<p>From: " . $fromPage . " should match yourUrl: " . $yourURL;

    //if($fromPage != $yourURL){
      // die("<p>Sorry you cannot access this page. Security breach detected and reported</p>");
//}
    $name = htmlentities($_POST["txtName"],ENT_QUOTES,"UTF-8");
    $account=htmlentities($_POST["txtAccount"],ENT_QUOTES,"UTF-8");
    $system=htmlentities($_POST["txtSystem"],ENT_QUOTES,"UTF-8");
    $game=htmlentities($_POST["txtGame"],ENT_QUOTES,"UTF-8");
    $description=htmlentities($_POST["txtDescription"],ENT_QUOTES,"UTF-8");;
    $timeSubmit=$date;
    
    print $name;
    print $account;
    print $system;
    print $game;
    print $description;
    print $timeSubmit;
    
    //---^---^--^ Out Till Later
    //include 'validate.php';
    
 //$errorMsg=array();

    
 $dataRecord=array();   

    //starting actual recoding all varialbe
 $dataRecord[] =$name ;
 $dataRecord[] =$account;
 $dataRecord[] =$system;
 $dataRecord[] =$game;
 $dataRecord[] =$description;
 $dataRecord[] =$timeSubmit;
 
 
 // our form data is valid at this point so we can process the data
    if(!$errorMsg){	
        if ($debug) print "<p>Form is valid</p>";
     $fileExt=".csv";
        $filename= "feedData". $fileExt;
        
        if ($debug) {
            print "\n\n<p>Your name is $filename";
            print "\n\n<p>Console is $webspace";
            print "\n\n<p>Script filename is " . $_SERVER['SCRIPT_FILENAME'];
            print "<pre>";
            print_r($findYourUsername);
            print "</pre>";
            print "\n\n<p>findYourUsername 4 is " . $findYourUsername[4];
            print "\n\n<p>file ext is $fileExt";
        }
        
        
        // now we just open the file for append
        $file = fopen($filename, 'a');    

        // write the forms informations
        fputcsv($file, $dataRecord);

        // close the file
        fclose($file);    
        
        reset($dataRecord);
        
        print 'Submission complete';
        
// $message  = '<h2>Submited, you shoul find your character info below and on the character selection menu where it appears on the site</h2>';
//
//        foreach ($_POST as $key => $value){
//            $message .= "<p>"; 
//
//            $camelCase = preg_split('/(?=[A-Z])/',substr($key,3));
//
//            foreach ($camelCase as $one){
//                $message .= $one . " ";
//            }
//            $message .= " = " . $value . "</p>";
//        }       
     }
   } //end of submit
   ?>

<html>
    <head>
        <title>Bored Gamers Board</title>
        <meta charset="utf-8">
        <meta name="author" content="Andy Green, Chris Mahmood">
        <meta name="description" content="A site to connect with other gamers and play">

        <link rel="stylesheet" href="style.css" media="screen">

        <!--[if lt IE 9]>
            <script src="//html5shim.googlecode.com/sin/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <header>
            <h1 id="banner">Board Gamers Board</h1>
        </header>

    <!--   Nav Bar -->   
        <nav id="mainNav">
            <ul>
                <a href="forum.php"><li class="navButton">Forum</li></a>
                <a href="calender.php"><li class="navButton">Calender</li></a>
                <a href="events.php"><li class="navButton">Events</li></a>
                <a href="giveaway.php"><li class="navButton">Giveaways</li></a>
            </ul>
        </nav>

        <form>
            <fieldset>
                <label for="txtName">Name</label>
                <input type="text" id="txtName" name="txtName" 
                       <?php if($nameERROR) echo 'class="mistake"'; ?>
                       value="<?php echo $name; ?>" 
                       tabindex="105" maxlength="30" placeholder="enter your name" autofocus onfocus="this.select()" >


                <label>System</label>
                <select id="system" name="txtSystem" tabindex="110" size="1">
                    <option value="PC" <?php if($align =="PC") echo ' selected="selected" ';?>>PC</option>
                    <option value="PS3" <?php if($align =="PS3") echo ' selected="selected" ';?>>PS3</option>
                    <option value="Xbox 360" <?php if($align =="Xbox 360") echo ' selected="selected" ';?>>Xbox 360</option>
                    <option value="PS4" <?php if($align =="PS4") echo ' selected="selected" ';?>>PS4</option>
                    <option value="Xbox One" <?php if($align =="Xbox One") echo ' selected="selected" ';?>>Xbox One</option>
                </select>

                <label for="txtAccount">Account Name</label>
                <input type="text" id="txtAccount" name="txtAccount" 
                       value="<?php echo $account; ?>" 
                       tabindex="115" maxlength="30" placeholder="enter account name/ID"  onfocus="this.select()" >

                <label for="txtGame">Game</label>
                <input type="text" id="txtGame" name="txtGame" 
                       value="<?php echo $game; ?>" 
                       tabindex="120" maxlength="30" placeholder="enter games tittle"  onfocus="this.select()" >

                <label for="txtDescription">Description</label>
                <input type="text" id="txtDescription" name="txtDescription" 
                       value="<?php echo $description; ?>" 
                       tabindex="125" maxlength="200" placeholder="What do you want to do?"  onfocus="this.select()" >
            </fieldset>
            
            <fieldset class="buttons">
                <legend>Submit or Reset the form</legend>				
                <input type="submit" id="btnSubmit" name="btnSubmit" value="Submit" tabindex="991" class="button">

                <input type="reset" id="butReset" name="butReset" value="Reset Form" tabindex="993" class="button" onclick="reSetForm()">
            </fieldset>
         
        </form>

        <footer>
            <p>Created by Andy Green and Chris Mahmood</p>
        </footer>
</body>
</html>