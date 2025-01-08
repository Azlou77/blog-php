<!DOCTYPE html>
<html>
<h2>Add categories</h2>
<?php
include 'connexion.php';
$category_name = $_POST['category_name'];
$request = "INSERT INTO category (category_name) VALUES ('$category_name')";
$query = mysqli_query($connexion, $request);

?>
<form action="" method="POST">
    <label for="category_name">Category name</label>
    <input type="text" name="category_name" required />
    <input type="submit" value="add" />
</form>

</html>