<?php

include '../../db/db-connection.php';

$id = $_GET['id'];

$condition = "";
if (is_numeric($id)) {
    $condition = "WHERE cities.countryId = $id";
}

// get cities
$SQL = "SELECT * FROM cities " . $condition;
$cities = $conn->query($SQL)->fetch_all(MYSQLI_ASSOC);

?>

<option value="" selected="selected">Zgjidhni qytetin</option>
<?php foreach ($cities as $city) {?>
    <option value="<?php echo $city['id']; ?>"><?php echo $city['name']; ?></option>
<?php } ?>


