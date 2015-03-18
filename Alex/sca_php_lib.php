<?php
// SCA PHP function library
// provide php functions for reuse throughout the SCA site

// use <?php require 'header_v3.php'; at start of any php pages that use it
// or <?php require 'sca_php_lib.php';

    //Connect to the database
    $SCA_host = "<host_name here>";                 //host name
    $SCA_user = "<user_name here";                     //username
    $SCA_pass = "";                                 //password
    $SCA_db = "<db_name here>";                          //Your database name you want to connect to
    $SCA_dbport = 3306;                               //The port #. <usually 3306>

    function connect_sca_db() {
        $connection = mysqli_connect($SCA_host, $SCA_user, $SCA_pass, $SCA_db, $SCA_dbport)or die(mysql_error());
        return $connection;
    }
    
    function funcname() {
        //;
    }
    
    
    
?>