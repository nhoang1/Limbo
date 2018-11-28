<!DOCTYPE html>
<html>
    <title>Edit Item</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
  <link rel="stylesheet" type="text/css" href="css/style.css" >
  <body>


<nav class="w3-bar w3-color">
  <a href="/limbo-Alpha/landing.php" class="w3-left w3-button w3-hover-white">Limbo</a>
  <a href="/limbo-Alpha/lost.php" class="w3-left w3-button w3-hover-white">Lost Items</a>
  <a href="/limbo-Alpha/found.php" class="w3-left w3-button w3-hover-white">Found Items</a>
  <a href="/limbo-Alpha/ql.php" class="w3-left w3-button w3-hover-white">Quick Links</a>
  <a href="/limbo-Alpha/admin-1.php" class="w3-left w3-button w3-hover-white">Admin Dashboard</a>
  <a href="/limbo-Alpha/landing.php" class="w3-right w3-button w3-hover-white">Logout</a>
</nav>
<?php

# Connect to MySQL server and the database
require( 'includes/connect_db.php' ) ;

# Includes these helper functions
require( 'includes/helpers.php' ) ;

// series of if statements for updating the table row according to id

if( isset($_POST['newName']) ) {

    $id = $_GET['id'];
    $newName = $_POST['newName'];
    $query = "UPDATE stuff SET name='$newName' WHERE id='$id'";
	show_query($query);
	
	$results = mysqli_query( $dbc , $query) ;

}

if( isset($_POST['newDescription']) ) {

    $id = $_GET['id'];
    $newDescription = $_POST['newDescription'];
    $query2 = "UPDATE stuff SET description='$newDescription' WHERE id='$id'" ;
	show_query($query2);
	
	$results = mysqli_query( $dbc , $query2 ) ;

}

if( isset($_POST['newLocation']) ) {

    $id = $_GET['id'];
    $newLocation = $_POST['newLocation'];
    $query3 = "UPDATE stuff SET location_name='$newLocation' WHERE id='$id'" ;
	show_query($query3);
	
	$results = mysqli_query( $dbc , $query3 ) ;

}

if( isset($_POST['newStatus']) ) {

    $id = $_GET['id'];
    $newStatus = $_POST['newStatus'];
    $query4 = "UPDATE stuff SET status='$newStatus' WHERE id='$id'" ;
	show_query($query4);
	
	$results = mysqli_query( $dbc , $query4 ) ;

}

if( isset($_POST['newReward']) ) {

    $id = $_GET['id'];
    $newReward = $_POST['newReward'];
    $query5 = "UPDATE stuff SET reward='$newReward' WHERE id='$id'" ;
	show_query($query5);
	
	$results = mysqli_query( $dbc , $query5 ) ;

}

if( isset($_POST['newAmount']) ) {

    $id = $_GET['id'];
    $newAmount = $_POST['newAmount'];
    $query6 = "UPDATE stuff SET reward_amount='$newAmount' WHERE id='$id'" ;
	show_query($query6);
	
	$results = mysqli_query( $dbc , $query6 ) ;

}

if( isset($_POST['newEmail']) ) {

    $id = $_GET['id'];
    $newEmail = $_POST['newEmail'];
    $query7 = "UPDATE stuff SET contact_email='$newEmail' WHERE id='$id'" ;
	show_query($query7);
	
	$results = mysqli_query( $dbc , $query7 ) ;

}

if( isset($_POST['newNumber']) ) {

    $id = $_GET['id'];
    $newNumber = $_POST['newNumber'];
    $query8 = "UPDATE stuff SET contact_phone='$newNumber' WHERE id='$id'" ;
	show_query($query8);
	
	$results = mysqli_query( $dbc , $query8 ) ;

}

if( isset($_POST['newLink']) ) {

    $id = $_GET['id'];
    $newLink = $_POST['newLink'];
    $query9 = "UPDATE stuff SET image_link ='$newLink' WHERE id='$id'" ;
	show_query($query9);
	
	$results = mysqli_query( $dbc , $query9 ) ;

}

if(isset($_GET['id'])) {
          show_record($dbc, $_GET['id']);
}

# Close the connection
mysqli_close( $dbc ) ;

?>

<!--getting user inputs-->

<form action="" method="POST" class="table-structure w3-center">
    <p>Name: <input  class="edit-text" type="text" name="newName" placeholder="Item Name" required/><span style="color: red;">*</span> 

    <p>Description: <input class="edit-text" type="text" name="newDescription" placeholder="Information about the item"/> 

    <p>Location: <input class="edit-text" type="text" name="newLocation" placeholder="Where did you find this item?" required/><span style="color: red;">*</span> 

    <p>Status: <input class="edit-text" type="text" name="newStatus" placeholder="found/lost" required/><span style="color: red;">*</span> 

    <p>Reward: <input class="edit-text" type="text" name="newReward" placeholder="yes/no"/> 

    <p>Reward Amount: <input class="edit-text" type="int" name="newAmount"/> 

    <p>Email: <input class="edit-text" type="text" name="newEmail" placeholder="a@bcd.com" required/><span style="color: red;">*</span> 

    <p>Phone Number: <input class="edit-text" type="int" name="newNumber"placeholder="8450000000" required/><span style="color: red;">*</span> 
    
    <p>Image Link: <input class="edit-text" type="text" name="newLink"placeholder="mothslovelamps.com/meme" required/><span style="color: red;">*</span> 

    <P></P><input type="submit"/></p>
</form>

<?php
# Includes header
require( 'includes/footer.php' ) ;

?>