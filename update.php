<!DOCTYPE html>
<h2>Update data</h2>
<?php include 'connexion.php';
$id = $_GET['id'];
$request = "SELECT title,content FROM articles WHERE id='$id'";
$query = mysqli_query($connexion, $request);
$row = mysqli_fetch_array($query);
$title = $row['title'];
$content = $row['content'];

$request = "UPDATE articles SET title='$title', content='$content' WHERE id='$id'";
$updateQuery = mysqli_query($connexion, $request);
?>

<form action="update.php" method="POST">
    <label for="title">Title</label>
    <input type="text" name="title" value="<?php echo $row['title']; ?>" />
    <label for="content">Content</label>
    <textarea name="content"><?php echo $row['content']; ?></textarea>
    <input type="submit" value="update" />
</form>

</html>