<!DOCTYPE html>
<h2>Update data</h2>
<?php include 'connexion.php';
$id = $_GET['id'] ?? null;

$request = "SELECT title, content FROM posts WHERE id='$id'";
$query = mysqli_query($connexion, $request);
$row = mysqli_fetch_array($query);


if (isset($_POST['update'])) {
    $new_title = $_POST['title'];
    $new_content = $_POST['content'];
    $newrequest = "UPDATE posts SET title='$new_title', content='$new_content' WHERE id='$id'";
    mysqli_query($connexion, $newrequest);
}

?>

<form method="POST">
    <label for="title">Title</label>
    <input type="text" name="title" value="<?php echo $row['title']; ?>" required />
    <label for="content">Content</label>
    <textarea name="content"><?php echo  $row['content'] ?></textarea>
    <input type="submit" name="update" value="update" />
</form>


</html>