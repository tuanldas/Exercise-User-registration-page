<?php
require 'action_page.php'
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 10/09/2018
 * Time: 4:52 CH
 */
?>
<form method="post" action="action_page1.php">
    <?php require_once 'action_page.php'?>
    <link rel='stylesheet' href="css.css">
    <div class="container">
        <h1>Register</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" >
        <div style="color: #ff573e"><?php echo "$email1"?> </div>
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw">
        <div style="color: #ff573e"><?php echo $pas?></div>
        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat">
        <div style="color: #ff573e"><?php echo $repeatPas?></div>
        <hr>

        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
        <button type="submit" class="registerbtn">Register</button>
    </div>

    <div class="container signin">
        <p>Already have an account? <a href="#">Sign in</a>.</p>
    </div>
</form>
