<?php

if (isset($_POST["login-submit"])) {
    
    require "database.php";

    $mailuid = $_POST["mailuid"];
    $pass = $_POST["pwd"];

    if (empty($mailuid) || empty($pass)) {
        header("Location: ../body.php?error=empty");
        exit();
    }
    else {
        $sql = "SELECT * FROM users WHERE uiduser=? OR email=?";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../body.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            
            $results = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($results)) {
                $passwordcheck = password_verify($pass, $row['pwd']);
                if ($passwordcheck == false) {
                    header("Location: ../body.php?error=wrongpassword");
                    exit();
                }
                elseif ($passwordcheck == true) {
                    session_start();
                    $_SESSION["id"] = $row["id"]; 
                    $_SESSION["uid"] = $row["uid"];  

                    header("Location: ../body.php?login=success");
                    exit();
                }
                else {
                    header("Location: ../body.php?error=wrongpassword");
                    exit();
                }
            }
            else{
                header("Location: ../body.php?error=nouser");
                exit();
            }
        }
    }

}
else {
    header("Location: ../body.php");
    exit();
}