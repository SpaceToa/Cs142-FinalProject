<html>


    <?php
    include('header.php');
    include('nav.php');
    ?>
    <body class="home">
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
        $row = 1;
        if (($handle = fopen("feedData.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000)) !== FALSE) {

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

    <?php
    include('footer.php');
    ?>
</body>
</html>
