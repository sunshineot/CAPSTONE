<?php
// this code should be placed in any page using a session, 
// setup using login.php code.
// 
// Start the session.
session_start();

// (can write in an if statemt here to manage timeout situations etc)

// read in form data [can use $_GET , or $_REQUEST to retrieve both GET and
// POST, but post is better for this kind of use]
$some_get = $_GET["get_var"];
$some_post = $_POST["post_var"];
$some_req = $_REQUEST["req_var"];
// sanitize
$mysql_str_var = mysql_real_escape_string($some_req);

    //Connect to the database
    $host = "<host_name here>";   //host name
    $user = "<user_name here";                     //username
    $pass = "";                                 //password
    $db = "<db_name here>";                          //Your database name you want to connect to
    $port = 3306;                               //The port #. <usually 3306>

    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());



    //check for user
    $query = "SELECT * FROM ...";
    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        //echo "The ID is: " . $row['id'] . " and the Username is: " . $row['username'];
        
        // Do something with your results here...
        // $_SESSION["uid"] = $row['id'];
        // $_SESSION["user"] = $row['username'];
    }
    
    
?>