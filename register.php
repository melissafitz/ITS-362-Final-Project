<?php
    require('config.inc.php');
    include('header.html');
    require(MYSQL);

    if (isset($_POST['submit'])) {
        //echo $_POST['name'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $user = $_POST['username'];
        $pass = $_POST['password'];
        // success/fail messages
        $accountExists = 'Sorry, an account already exists with this email address.';
        $success = 'Awesome! Your account was successfully created.';
        $fail = 'There was an error. Please try again.';

        $q = "SELECT email, username FROM users WHERE email = '$email'";
        $r = mysqli_query($dbc, $q);
        $rows = mysqli_num_rows($r);

        if ($rows == 0) { //account does not already exist
            //push registration info to DB
            $q = "INSERT INTO users (name, phone, email, username, password)
                  VALUES ('$name', '$phone', '$email', '$user', '$pass')";
            $r = mysqli_query($dbc, $q);

            //check if it ran correctly
            if (mysqli_affected_rows($dbc) == 1) {
                echo $success;
                include('footer.html');
                exit();
            } else {
                echo $fail;
            }
        } else { //account already exists
            echo $accountExists;
        }
    }
?>

<h3> Register </h3>

<form action="register.php" method="POST">

    <label>Name: </label><input type="text" name="name"/><br/>
    <label>Phone number: </label><input type="text" name="phone"/><br/>
    <label>Email address: </label><input type="text" name="email"/><br/>
    <label>Username: </label><input type="text" name="username"/><br/>
    <label>Password: </label><input type="text" name="password"/><br/>

    <input type="submit" name="submit" value=" Register " id="submitbtn"/>

</form>

<?php
    include('footer.html');