
<?php
if (isset($_POST['UserName'])) {
    session_start();


    $_SESSION['logged_in_usr'] = $_POST['UserName'];
    echo $_SESSION;
    echo $_POST['UserName'];
    session_write_close();
    print_r($_SESSION);
    header("Location: index.php");
} else {
    // echo $_SESSION['logged_in_usr'];
    // echo $_POST['UserName'];

    // header("Location: index.php");
    header("Location: form.html");
}

exit;
?>