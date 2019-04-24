<?php
    require('config.inc.php');
    include('header.html');
    require(MYSQL);

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $un = $_POST['username'];
        $pw = $_POST['password'];
        $em = $_POST['email'];

        $q = "INSERT INTO `Users` (`username`, `password`, `email`) VALUES ('$un', '$pw', '$em')";
        $r = mysqli_query($dbc, $q);
?>

</br>
<div id="registerForm" class="body-box">
<h3> Register </h3>

<form action="register.php" action="register.php" method="POST">

    <label>Email address: </label><input type="text" name="email"/><br/>
    <label>Username: </label><input type="text" name="username"/><br/>
    <label>Password: </label><input type="text" name="password"/><br/><br/>

    <input type="submit" name="submit" value=" Register " id="submitbtn"/>

</form><br/>
</div>

<?php

    include('footer.html');

?>
