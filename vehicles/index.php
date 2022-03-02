
<?php 

// This is the vehicle controler 


// Get the database connection file
require_once '../library/connections.php';
// Get the PHP Motors model for use as needed
require_once '../model/main-model.php';
//Get the vehicle Module
require_once '../model/vehicle-model.php';
// Get the functions library
require_once '../library/functions.php';

// Get the array of classifications
$classifications = getClassifications();

//Build a navigation bar using the $classifications array and the function NavigationBar
$navList = navigationBar($classifications);



$action = filter_input(INPUT_GET, 'action');
 if ($action == NULL){
  $action = filter_input(INPUT_POST, 'action');
 }

 
 switch ($action){

  case 'link-add-classification':

  include "../view/add-classification.php";
  break;

 case 'add-classification':
  // filter and store the data
  $classificationName = filter_input(INPUT_POST,'classificationName', FILTER_SANITIZE_STRING);
  trim($classificationName);

  //checck for mission data for classificcation
  if(empty($classificationName)){
    $message = '<p>Please provide information for the car classification </p>';
    include '../view/add-classification.php';
    exit;
  }

  
  //send the data to the model
  $regOutcome = regClassification($classificationName);

   // Check and report the result
  if($regOutcome === 1){
    // $message = "<p> Thanks for registering $classificationName </p>";
    include '../view/vehicle-man.php'; 
    exit;
  } else{
    $message = "<p>Sorry $classificationName, the add cclassification failed please try again";
    include '../view/add-classification.php';
    exit;
  }

  break;

case 'link-add-vehicle':

  include "../view/add-vehicle.php";
  break;

 case 'add-vehicle':
  // filter and store the data
  $invMake = filter_input(INPUT_POST, 'invMake', FILTER_SANITIZE_STRING);
  $invModel = filter_input(INPUT_POST, 'invModel', FILTER_SANITIZE_STRING);
  $invDescription = filter_input(INPUT_POST, 'invDescription', FILTER_SANITIZE_STRING);
  $invImage = filter_input(INPUT_POST, 'invImage', FILTER_SANITIZE_STRING);
  $invThumbnail = filter_input(INPUT_POST, 'invThumbnail', FILTER_SANITIZE_STRING);
  $invPrice = filter_input(INPUT_POST, 'invPrice', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
  $invStock = filter_input(INPUT_POST, 'invStock', FILTER_SANITIZE_NUMBER_INT);
  $invColor = filter_input(INPUT_POST, 'invColor', FILTER_SANITIZE_STRING);
  $classificationId = filter_input(INPUT_POST, 'classificationId');

  trim($invMake);
  trim($invModel);
  trim($invDescription);
  trim($invImage);
  trim($invThumbnail);
  trim($invPrice);
  trim($invStock);
  trim($invColor);


  // Debugging
  // echo $invMake, $invModel, $invDescription, $invImage, $invThumbnail, $invPrice, $invStock, $invColor, $classificationId;
  // exit;

  if(empty($invMake) || empty($invModel) || empty($invDescription) || empty($invImage) || empty($invThumbnail) || empty($invPrice) || empty($invStock) || empty($invColor) || empty($classificationId)){
    $message = '<p>Please provide information for all empty form fields.</p>';
    include '../view/add-vehicle.php';
    exit; 
  }

  
  // Send the data to the model
  $regOutcome = regVehicle($invMake, $invModel, $invDescription, $invImage, $invThumbnail, $invPrice, $invStock, $invColor, $classificationId);


  if($regOutcome === 1){
    $message = "<h2>The $invMake $invModel was added successfully! </h2>";
    header("Location: /phpmotors/vehicles/"); 
    exit;
  } else {
    $message = "<h2> Sorry there was an error adding the $invMake $invModel. Please try again </h2>";
    include '../view/add-vehicle.php';
    exit;
  }

  break;

 default:
  include '../view/vehicle-man.php';
}