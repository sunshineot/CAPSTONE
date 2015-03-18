<?php
// Start the session. This code must be placed at the very start of
// any files that will use php session management. Hence, all pages
// that will make use of sessions will have to be php pages, not html, etc..
//
// if a session already exists, it will be picked up, else a new one will
// be started.
session_start();
?>

<?php
// Set a session variable (Modify an existing variable in the same way)
$_SESSION["var_name"] = "value";

// Access it like
echo $_SESSION["var_name"];
?>

<?php
// useful for printing out all session variables
print_r($_SESSION);
?>

<?php
// to destroy session when you're done:
// ...
//
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 
?>


<?php
// <mysql database stuff...>

    //Connect to the database
    $host = "grahamsutt12-sample_db-1234567";   //host name
    $user = "grahamsutt12";                     //username
    $pass = "";                                 //password
    $db = "sample_db";                          //Your database name you want to connect to
    $port = 3306;                               //The port #. <usually 3306>

    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());



    //And now to perform a simple query to make sure it's working
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "The ID is: " . $row['id'] . " and the Username is: " . $row['username'];
        // note: string concatenation in php uses '.' not '+'
    }

?>