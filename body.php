<?php
    require "header.php";
?>

    <main>
    <?php
        // if (isset($_SESSION["id"])) {
        //     echo '<p  class="out">You are logged in</p>';
        // }
        // else {
        //     echo '<p class="out">You are logged out!</p>';
        // }



        $url = "https://thesimpsonsquoteapi.glitch.me/quotes?count=4";
        $data = json_decode(file_get_contents($url), true);
        for ($i=0; $i < count($data); $i++) {
          // echo $data[$i]['character'];
          // echo '<p class="out">' . $data[$i]['character'] . '</p><br/>';
          echo
          '<ul style="color:white">
            <li>' . $data[$i]['quote'] . '</li>
            <li>' . $data[$i]['character'] . '</li>
            <li>' . $data[$i]['characterDirection'] . '</li>
            <li><img src="', $data[$i]['image'] ,'">
          </ul><br/>';
        }


    ?>
    </main>

<?php
    require "footer.php"
?>
