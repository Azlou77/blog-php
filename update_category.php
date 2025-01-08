<!DOCTYPE html>
<html>
<h2>Update category</h2>
<?php
include 'connexion.php';
$id_category  =  $_GET['id_category'];
$request = "SELECT category_name FROM category WHERE id_category='$id_category'";
$query = mysqli_query($connexion, $request);
$category_name = $_POST['category_name'];
$request = "UPDATE category SET category_name='$category_name'";
$updateQuery =  mysqli_query($connexion, $request);
?>
<form action="update_category.php" method="POST">
    <label for="category_name">Category name</label>
    <input type="text" name="category_name" value="<?php echo $row['category_name']; ?>" />
    <input type="submit" value="update" />
</form>


</html>