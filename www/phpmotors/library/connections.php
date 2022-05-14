<?php 
/*This file will holds proxy connections to a database */

function phpmotorsConnect() {
    $server = 'mysql';
    $dbname = 'dbase';
    $username = 'dbuser';
    $password = 'dbpass';
    $dsn = "mysql:host=$server;dbname=$dbname";
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

    try {
        $link = new PDO($dsn, $username, $password, $options);
        //echo "It worked";
        return $link;

       } catch(PDOException $e) {
        header('Location: /phpmotors/view/500.php');
        exit;
       }

}

?>