<!DOCTYPE html>
<html>
<title>Report Found Item</title>

<?php
# Includes header
require( 'includes/header.php' ) ;

# Connect to MySQL server and the database
require( 'includes/connect_db.php' ) ;


# Includes these helper functions
require( 'includes/helpers.php' ) ;
    
if ($_SERVER[ 'REQUEST_METHOD' ] == 'POST') {
  	$name = $_POST['name'] ;
    $location = $_POST['location_name'] ;
  	$desciption = $_POST['description'];
  	$create_date = $_POST['create_date'];
  	$contact_email = $_POST['contact_email'];
  	$contact_phone = $_POST['contact_phone'];
  	$image_link = $_POST['image_link'];
    insert_found_record($dbc, $name, $location, $description, 'found', $create_date, $contact_email, $contact_phone, $image_link);
    echo '<p class="reported-text">Item has been reported found!</p>';
}




?>

<!-- Drop down list location query -->
<?php 
  require( 'includes/connect_db.php' ) ;

  if (isset($_POST['location_name'])) { 
    $location = $_POST['location_name']; 
    $query = "insert into stuff(location_name) values('$location')";
    mysqli_query ($dbc, $query); 
  }
?>

<!--Get inputs from the user. -->
<h1 class="page-heading">Report Found Item</h1>
<form action="found-1.php" method="POST">
  <table class="table-structure">
    <tr>
      <td>Item: <input type="text" name="name" value="<?php if
      (isset($_POST['name'])) echo $_POST['name']; ?>" placeholder="Item Name" required><span style="color: red;">*</span>
    </tr>
     <!-- Drop down list locations -->
    <tr>
      <td>Location: 
        <select name="location_name" required>
           <option value="Byrne House">Byrne House</option>
           <option value="Buidling D">Building D</option>
           <option value="Cannavino Library">Cannavino Library</option>
           <option value="Champagnat Hall">Champagnat Hall</option>
           <option value="Chapel">Chapel</option>
           <option value="Cornell Boathouse">Cornell Boathouse</option>
           <option value="Donnelly Hall">Donnelly Hall</option>
           <option value="Dyson Center">Dyson Center</option>
           <option value="Fern Tor">Fern Tor</option>
           <option value="Fontaine  Hall">Fontaine  Hall</option>
           <option value="Foy Townhouses">Foy Townhouses</option>
           <option value="Fulton Street Townhouses (Lower)">Fulton Street Townhouses (Lower)</option>
           <option value="Fulton Street Townhouses (Upper)">Fulton Street Townhouses (Upper)</option>
           <option value="Greystone Hall">Greystone Hall</option>
           <option value="Hancock Center">Hancock Center</option>
           <option value="Kieran Gatehouse">Kieran Gatehouse</option>
           <option value="Kirk House">Kirk House</option>
           <option value="Lavelle Hall">Lavelle Hall</option>
           <option value="Leo Hall">Leo Hall</option>
           <option value="Longview Park">Longview Park</option>
           <option value="Lowell Thomas">Lowell Thomas</option>
           <option value="Lower New Townhouses">Lower New Townhouses</option>
           <option value="Marian Hall">Marian Hall</option>
           <option value="Marist Boathouse">Marist Boathouse</option>
           <option value="McCann Center">McCann Center</option>
           <option value="Marian Hall">Marian Hall</option>
           <option value="Mid-Rise Hall">Mid-Rise Hall</option>
           <option value="O'Shea Hall">O'Shea Hall</option>
           <option value="St. Anns Hermitage">St. Anns Hermitage</option>
           <option value="St.Peters">St.Peters</option>
           <option value="Science and Allied Health Building">Science and Allied Health Building</option>
           <option value="Sheahan Hall">Sheahan Hall</option>
           <option value="Steel Plant Studios and Gallery">Steel Plant Studios and Gallery</option>
           <option value="Student Center/Music Building">Student Center/Music Building</option>
           <option value="Ward Hall">Ward Hall/option>
           <option value="West Cedar Townhouses (Lower)">West Cedar Townhouses (Lower)</option>
           <option value="West Cedar Townhouses (Upper)">West Cedar Townhouses (Upper)</option>
           <option value="Rotunda">Rotunda</option>
        </select>
        <span style="color: red;">*</span></td>
    </tr>
      <td>Description: <input type="text" name="description" value="<?php if
      (isset($_POST['description'])) echo $_POST['description']; ?>" placeholder="Additional details"></td>
    </tr>
     <tr>
      <td>Date/Time: <input type="text" name="create_date" value="<?php if
      (isset($_POST['create_date'])) echo $_POST['create_date']; ?>" placeholder="YYYY-MM-DD HH:MM:SS" required><span style="color: red;">*</span></td>
    </tr>
    <tr>
    <tr>
      <td>Contact email: <input type="email" name="contact_email" value="<?php if
      (isset($_POST['contact_email'])) echo $_POST['contact_email']; ?>" placeholder="a@bcd.com" required><span style="color: red;">*</span></td>
    </tr>   
    <tr>
      <td>Contact Phone Number: <input type="int" name="contact_phone" value="<?php if
      (isset($_POST['contact_phone'])) echo $_POST['contact_phone']; ?>" placeholder="8450000000" minlength="10" maxlength="10" required><span style="color: red;">*</span></td>
    </tr>
    <tr>
      <td>Image Link: <input type="text" name="image_link" value="<?php if
      (isset($_POST['image_link'])) echo $_POST['image_link']; ?>" placeholder="mothslovelamps.com/meme"></td>
    </tr>
  </table>
  <p class="w3-container w3-center"><input type="submit" class="submit-btn" value ="Submit Report"></p>
</form>
</body>
<?php
# Includes header
require( 'includes/footer.php' ) ;

?>