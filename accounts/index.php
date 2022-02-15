<?php

// This is the account controler

// Get the database connection file
require_once '../library/connections.php';
// Get the PHP Motors model for use as needed
require_once '../model/main-model.php';

// Get the array of classifications
$classifications = getClassifications();

// Build a navigation bar using the $classifications array
$navList = '<ul id="navigation">';
$navList .= "<li><a href='/php-motors/accounts/index.php' title='View the PHP Motors home page'>Home</a></li>";
foreach ($classifications as $classification) {
 $navList .= "<li><a href='/index.php?action=".urlencode($classification['classificationName'])."' title='View our $classification[classificationName] product line'>$classification[classificationName]</a></li>";
}
$navList .= '</ul>';


 $action = filter_input(INPUT_GET, 'action');
 if ($action == NULL){
  $action = filter_input(INPUT_POST, 'action');
 }


 switch ($action){
    case 'template':
     include '../view/template.php';
     break;
   
    case 'login':
     include '../view/login.php';
     break;
   
    case 'registration':
     $clientFirstname = filter_input(INPUT_POST, 'clientFirstname');
     $clientLastname = filter_input(INPUT_POST, 'clientLastname');
     $clientEmail = filter_input(INPUT_POST, 'clientEmail');
     $clientPassword = filter_input(INPUT_POST, 'clientPassword');
     include '../view/registration.php';
     break;
   
    default:
     include '../view/home.php';
   }