<?php
    include('html/header.html');
?>

<br/>
    <div id="login" class="body-box">
        <h4> Login </h4>
        <p>Please enter your credentials.<br/>
           No account yet? <a href="register.php">Register here!</a></p>

        <form action="index.php" method="POST">
            <label>Email: </label> <input type="text" name="email"/><br/>
            <label>Password: </label> <input type="text" name="password"/><br/><br/>
            <input type="submit" value=" Login "/>
        </form><br/>
    </div>

<?php

    include('html/footer.html');

?>

<?php

    // Initialize the session
    session_start();
    require(MYSQL);
    
    // check if the user is already logged in,
    // if yes then redirect to index page
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
        header("location: index.php");
        exit;
    }

    require(config.inc.php);

    if($_SERVER["REQUEST_METHOD"] == "POST") { // username and password sent from form 
        
        $un = mysqli_real_escape_string($dbc,$_POST['username']);
        $pw = mysqli_real_escape_string($dbc,$_POST['password']); 
        
        $sql = "SELECT UserID FROM Users WHERE username = '$un' and password = '$pw'";
        $result = mysqli_query($dbc,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['active'];
        
        $count = mysqli_num_rows($result);
        
        // If result matched $un and $pw, table row must be 1 row
        if($count == 1) { //successful login
           session_register("un");
           $_SESSION['login_user'] = $un;
           
           //return to home
           header("location: index.php");
        }else { //failed login
           $error = "Invalid credentials!";
        }
    }
