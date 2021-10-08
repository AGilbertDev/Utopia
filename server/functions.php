<?php
/*--------------------------------------------------------------------------------------------
    File: functions.php
    Author: Alexandre Gilbert
    Description: Contains every function to use with the database.
--------------------------------------------------------------------------------------------*/

/*--------------------------------------------------------------------------------------------
                                      Form validation        
--------------------------------------------------------------------------------------------*/
function emptyInputRegister($fName, $lName, $email, $username, $password, $confirm) {
    echo "checking empty input";
    $result;

    if (empty($fName) || empty($lName) || empty($email) || empty($username) || empty($password) || empty($confirm)) {
        $result = true;
    }

    else {
        $result = false;
    }

    return $result;
}

function invalidUsername($username) {
    echo "checking username";
    $result;
    
    /* Check if username contains allowed characters */
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    }

    else {
        $result = false;
    }

    return $result;
}

function invalidEmail($email) {
    echo "checking email";
    $result;
    
    /* Check if email is valid */
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }

    else {
        $result = false;
    }

    return $result;
}

function pwdMatch($password, $confirm) {
    echo "checking password";
    $result;
    
    /* Check if email is valid */
    if ($password !== $confirm) {
        $result = true;
    }

    else {
        $result = false;
    }

    return $result;
}

function usernameExists($conn, $username, $email) {
    echo "checking taken account";
        /* SQL search query */
        $sql = "SELECT * FROM users WHERE usersUsername = ? OR usersEmail = ?;";
        
        /* Prepared statement (prevents sql injection by user via sign up form) */
        $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("location: ../pages/register.php?error=stmtfailed");
                exit();
            }

            /* Binding user input in the statement */
            mysqli_stmt_bind_param($stmt, "ss", $username, $email);

            /* Executing the statement */
            mysqli_stmt_execute($stmt);

            /* Checking search result */
            $resultData = mysqli_stmt_get_result($stmt);

            /* Creating the array containing data */
            if ($row = mysqli_fetch_assoc($resultData)) {
                return $row;
            }

            else {
                $result = false;
                return $result;
            }

    /* Closing the statement */
    mysqli_stmt_close($stmt);
}

/*--------------------------------------------------------------------------------------------
                                    Database functions        
--------------------------------------------------------------------------------------------*/
function createUser($fName, $lName, $email, $username, $password) {
    echo "creating new account"; 
    /* SQL search query */
    $sql = "INSERT INTO users (usersFName, usersLName, usersEmail, usersUsername, usersPassword) VALUES (?, ?, ?, ?, ?);";
        
    /* Prepared statement (prevents sql injection by user via sign up form) */
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../pages/register.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    /* Binding user input in the statement */
    mysqli_stmt_bind_param($stmt, "sssss", $fName, $lName, $email, $username, $hashedPwd);

    /* Executing the statement */
    mysqli_stmt_execute($stmt);

    /* Closing the statement */
    mysqli_stmt_close($stmt);
    
    /* Redirecting to registration page */
    header("location: ../pages/register.php?error=none");
    exit();
}