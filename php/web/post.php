
<?php

if (isset($_POST['UserName'])) {
    session_start();
    $_SESSION['logged_in_usr'] = $_POST['UserName'];
    echo $_SESSION['logged_in_usr'];
    echo $_POST['UserName'];
    print_r($_SESSION);
    header("Location: index.php");
}
?>