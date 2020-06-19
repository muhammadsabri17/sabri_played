<?php
session_start();
include_once('app/User.php');

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $object = new User();
    $object->Login($email, $password);
}

?>



<center>
    <h2>Login</h2>
</center>
<form method="POST" action="">
    <table width="400px" border="2" cellpadding="10" cellspacing="10" bgcolor="green" align="center">
        <tr>
            <td>Your Email</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>Your Password</td>
            <td><input type="password" name="password"></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="SIMPAN"></td>
        </tr>
    </table>
</form>