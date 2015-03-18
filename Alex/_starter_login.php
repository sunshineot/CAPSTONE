<?php
// this code should be placed in a login php file that will receive form
// data and use it to check for a user in a database, then start a session
// for that user.
// 
// Start the session.
session_start();
// unset if a session is already set (shouldn't be, if you're logging in,
// but just in case...)
session_unset();

// read in form data [can use $_GET , or $_REQUEST to retrieve both GET and
// POST, but post is better for this kind of use]
$USER = $_POST["username"];
$PASS = $_POST["password"];
// sanitize
$USER = mysql_real_escape_string($USER);
$PASS = mysql_real_escape_string($PASS);

    //Connect to the database
    $host = "<host_name here>";   //host name
    $user = "<user_name here";                     //username
    $pass = "";                                 //password
    $db = "<db_name here>";                          //Your database name you want to connect to
    $port = 3306;                               //The port #. <usually 3306>

    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());



    //check for user
    $query = "SELECT * FROM users WHERE username='$USER' AND password='$PASS'";
    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        //echo "The ID is: " . $row['id'] . " and the Username is: " . $row['username'];
        
        // Assuming the database has these attributes on record, this will
        // set the user's id & username to the session
        $_SESSION["stid"] = $row['id'];
        $_SESSION["fname"] = $row['fname'];
    }
    
// Anything here....probably redirect to a profile page or something.
// BY THE WAY: I can also add a timestamp as a variable, which can be 
// used to timeout a session that's been inactive for some time.
?>