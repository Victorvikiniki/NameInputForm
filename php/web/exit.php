<?php
// session_reset();
if (isset($_GET['exit'])) {
    // session_destroy();
    // unset($_SESSION['logged_in_usr']);
    session_abort();
    header("Location: index.php");
}
