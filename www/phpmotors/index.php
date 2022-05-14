<?php
/* PHPMotors Main Controller
* This file is accessed at http://lvh.me/phpmotors/
* or at http://lvh.me/phpmotors/index.php
* This file controls all traffic to the http://lvh.me/phpmotors/ URL
*/

//Get the dataBase connection file 
require_once 'library/connections.php';

//Get the main-Model
require_once 'model/main-model.php';

//Get the classifications from the main-model and assign it to a local variable.
$classifications = getClassifications();

/* Test of returning array
echo "<pre>";
var_dump($classifications);
echo "</pre>";
exit;
*/
// Creates a navlist to handle menu in the website.
$navlist = '<ul>';
$navlist .= "<li><a href='/phpmotors/index.php' title='View the PHP Motors Home Page'> Home</a></li>";
foreach ($classifications as $classification) {
    $navlist .= "<li><a href='/phpmotors/index.php?action=".urlencode($classification['classificationName'])."' title='View our $classification[classificationName] product line'>$classification[classificationName]</a></li>";
}
$navlist .= '</ul>';

// echo $navlist;


$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
}


switch ($action) {
    case 'template.php';
        break;
    
    default:
        include 'view/home.php';
        break;
}
?>
