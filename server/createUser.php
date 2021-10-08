<?php
/*--------------------------------------------------------------------------------------------
    File: register.php
    Author: Alexandre Gilbert
    Description: User registration page.
--------------------------------------------------------------------------------------------*/

/*--------------------------------------------------------------------------------------------
                                        Form validation           
--------------------------------------------------------------------------------------------*/
/* Validating proper form submission */
if (isset($_POST["submit"])) {
    
    /* User information */
    $fName = $_POST["fName"];
    $lName = $_POST["lName"];
    $email = $_POST["email"];
    $username = $_POST["usr"];
    $password = $_POST["pwd"];
    $confirm = $_POST["pwdConfirm"];

    require_once 'dbHandler.php';
    require_once 'functions.php';

    /* Empty fields */
    if (emptyInputRegister($fName, $lName, $email, $username, $password, $confirm) !== false) {
        header("location: ../pages/register.php?error=emptyinput");
        exit();
    }

    /* Invalid username */
    if (invalidUsername($username) !== false) {
        header("location: ../pages/register.php?error=invalidusername");
        exit();
    }

    /* Invalid email */
    if (invalidEmail($email) !== false) {
        header("location: ../pages/register.php?error=invalidemail");
        exit();
    }

    /* Password confirmation */
    if (pwdMatch($password, $confirm) !== false) {
        header("location: ../pages/register.php?error=passwordsdontmatch");
        exit();
    }

    /* Username taken */
    if (usernameExists($conn, $username, $email) !== false) {
        header("location: ../pages/register.php?error=usernametaken");
        exit();
    }

    /* TODO:
        - Validate password
    */

    /*----------------------------------------------------------------------------------------
                                           User creation       
    ----------------------------------------------------------------------------------------*/
    createUser($conn, $fName, $lName, $email, $username, $password);
}

/*--------------------------------------------------------------------------------------------
                                           Redirection          
--------------------------------------------------------------------------------------------*/
/* Redirecting to the registration form */
else {
    header("location: ../pages/register.php");
    exit();  
}