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
            <a href="submit.php"><li class="navButton">Submit</li></a>
        </ul>
    </nav>
   
<!--   Console Filter buttons -->
    <aside>
        <ul>
            <li class="filter" id="pc">PC</li>
            <li class="filter" id="360">Xbox 360</li>
            <li class="filter" id="xbone">Xbox One</li>
            <li class="filter" id="ps3">PS3</li>
            <li class="filter" id="ps4">PS4</li>
        </ul>
    </aside>
    
    <!-- Feed of submissions -->
    <section id="feed">
    <?php
    
//$row = 1;
//if (($handle = fopen("feedData.csv", "r")) !== FALSE) {
//    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
//        $num = count($data);
//        echo "<p> $num fields in line $row: <br /></p>\n";
//        $row++;
//        for ($c=0; $c < $num; $c++) {
//            echo $data[$c] . "<br />\n";
//        }
//    }
//    fclose($handle);


    
<<<<<<< HEAD
=======
    
    
        $row = 1;
       if (($handle = fopen("feedData.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000)) !== FALSE) {
               
                $num = count($data);
                echo "<p> $num fields in line $row: <br /></p>\n";
                $row++;
                $name= $data[0];
                $account= $data[1];
                $system= $data[2];
                $game= $data[3];
                $description= $data[4];
                $timeSubmit= $data[5];
                
                include 'feedbox.php';
        
        }
    fclose($handle);
    }
    ?>
        
    </section>
    
>>>>>>> Andys-Work
    <footer>
        <p>Created by Andy Green and Chris Mahmood</p>
    </footer>
    </body>
</html>
