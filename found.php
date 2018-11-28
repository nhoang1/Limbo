<!DOCTYPE html>
<html>
  <title>Found Items</title>
  
<body>
<?php
# Includes header
require( 'includes/header.php' ) ;

# Connect to MySQL server and the database
require( 'includes/connect_db.php' ) ;

# Includes these helper functions
require( 'includes/helpers.php' ) ;


# Show the records
show_found_records_brief($dbc);

# Close the connection
mysqli_close( $dbc ) ;
?>
<!--link for the user to go to the report found item page-->
<p class="w3-center report-text">Can't find what's been found? You can report the lost item below.</p>
<div class="w3-center w3-container">
      <a class="report-btn" href="/limbo-Alpha/lost-1.php">Report lost item</a>
</div>

</body>
<?php
# Includes header
require( 'includes/footer.php' ) ;

?>

