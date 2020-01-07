<?php
    require "header.php";
?>

    <main>
    <?php
        if (isset($_SESSION["id"])) {
            echo '<p  class="out">You are logged in</p>';
        }
        else {
            echo '<p class="out">You are logged out!</p>';
        }
    ?>  
    </main>

<?php
    require "footer.php"
?>