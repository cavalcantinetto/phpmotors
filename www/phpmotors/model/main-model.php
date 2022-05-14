<?php
/* This file will holds main model for out phpmotors homepage
---> Main PHP Motors Model <----
*/


function getClassifications() {
    //creates a connection object to phpmotors connection function
    $db = phpmotorsConnect();
    //The SQL statements to be used
    $sql = 'SELECT classificationName FROM carclassification ORDER BY classificationName ASC';
    //creates the statement for the connection using phpconnection function
    $stmt = $db->prepare($sql);
    $stmt->execute();
    //Now we are going to hold the response from DataBase
    $classifications = $stmt->fetchAll();
    //Close interaction
    $stmt->closeCursor();
    //Will retrieve the result
    return $classifications;

}