<?php
require_once("form.html");
require_once("post.php");
require_once("exit.php");
session_start();
if (!empty($_SESSION['logged_in_usr'])) {
    echo  'Hi, ' . $_SESSION['logged_in_usr'] . '!';
    print_r($_SESSION);
    echo "  <HTML>
    <form>
                <form action='exit.php' method='get'enctype='multipart/form-data'>
                    <input type='submit' name='exit' id='exit' value='Выйти'>
                </form></HTML>";
    // <?php// header('Location:exit.php');
} else {
    // echo "Ничего не введено";
    header('Location:form.html');
}
