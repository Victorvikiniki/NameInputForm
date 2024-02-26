<?php
// require_once("form.html");
require_once("post.php");
require_once("exit.php");
// session_start();
if (!empty($_SESSION['logged_in_usr'])) {
    echo  'Hi, ' . $_SESSION['logged_in_usr'] . '!';
    print_r($_SESSION);
    echo "<a href='exit.php'>Logout</a>";
} else {
    echo "Ничего не введено";
    header('Location:form.html');

    // echo " <HTML>
    // <form action='post.php' method='POST' enctype='multipart/form-data'>
    // <label for='UserName'>Введите имя пользователя</label>  <br>
    // <input type='text' name='UserName' id='UserName'><br>

    // <input type='submit' name='submit' value='Войти'<br>
    // </form>   
    // </HTML>";
}
