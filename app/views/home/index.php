<?php
if (!$_SESSION["user_session"]) {
    header("Location:" . BASEURL . "auth/login");
}
 
?>

<a href="<?= BASEURL ?>auth/Logout">Logout</a>