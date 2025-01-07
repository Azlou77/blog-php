<!DOCTYPE html>
<h2>Add data</h2>
<html?php include 'connexion.php' ;
    $title=$_POST['title'];
    $content=$_POST['content'];

    $request="INSERT INTO articles (title, content) VALUES ('$title', '$content')" ;
    $query=mysqli_query($connexion, $request);
    ?>

    <form action="add.php" method="POST">
        <label for="title">Title</label>
        <input type="text" name="title" required />
        <label for="content">Content</label>
        <textarea name="content"></textarea>
        <input type="submit" value="add" />
    </form>

    </html>