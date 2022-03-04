<?php

// This is the main controler

// creat or access a session 
session_start();

// Get the database connection file
require_once 'library/connections.php';
// Get the PHP Motors model for use as needed
require_once 'model/main-model.php';
// Get the functions library
require_once 'library/functions.php';


// Get the array of classifications
$classifications = getClassifications();

// Build a navigation bar using the $classifications array
$navList = navigationBar($classifications);

// Check if the firstname cookie exists, get its value
if(isset($_COOKIE['firstname'])){
  $cookieFirstname = filter_input(INPUT_COOKIE, 'firstname', FILTER_SANITIZE_STRING);
 }


 $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
 if ($action == NULL){
  $action = filter_input(INPUT_POST, 'action');
 }

 switch ($action){
 case 'template':
  include 'view/template.php';
  break;

 default:
  include 'view/home.php';
}