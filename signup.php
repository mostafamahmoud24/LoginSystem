<?php
    require "header.php";
?>

    <main>
        <div class="signup-div">
            <section>
                <h1>Sign Up</h1>
            
            <form action="includes/signup.php" method="post" class="signupform">
                <input type="text" name="uid" placeholder="username" class="field">
                <br>
                <input type="text" name="email" placeholder="E-mail" class="field">
                <br>
                <input type="password" name="pwd" placeholder="Password" class="field">
                <br>
                <input type="Password" name="pwd1" placeholder="Confirm Password" class="field">
                <br>
                <?php
                    if (isset($_GET["error"])) {
                       if ($_GET["error"] == "empty") {
                        echo '<p class="error">Please fill in all fields</p>';
                       }
                       elseif ($_GET["error"] == "invalidmailuid") {
                        echo '<p class="error">Please enter a valid username and email</p>';
                       }
                       elseif ($_GET["error"] == "invaliduid") {
                        echo '<p class="error">Please enter a valid username</p>';
                       }
                       elseif ($_GET["error"] == "passwordcheck") {
                        echo '<p class="error">Password does not match</p>';
                       }
                       elseif ($_GET["error"] == "usertaken") {
                        echo '<p class="error">Username already taken</p>';
                       }

                    }
                    elseif (isset($_GET["signup"])) {
                        if ($_GET["signup"] == "success") {
                            echo '<p class="green">Signup Successful</p>';
                        }
                    }
                    
                ?>
                <br>
                <button type="submit" name="signup-submit" class="signup-submit">Sign Up</button>
            </form>
        </div>
    </main>

<?php
    require "footer.php"
?>