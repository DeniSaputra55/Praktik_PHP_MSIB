<!-- 24-3-2023
Form Proses -->
<form method="POST">
    <label for="">Username</label> <br>
    <input type="text" name="uname"> <br>
    <label for="">Password</label> <br>
    <input type="password" name="pass"> <br>

    <input type="sumbit" name="login" value="login">
</form>
<?php
error_reporting(0);
$username = $_POST['uname'];
$password = $_POST['pass'];
$login = $_POST['login'];
if(isset($login)){
    echo 'Hallo'.$username. '<br> Password anda '.$password;
}
?>