<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>



    <main>


        <?php include 'include/header.php' ?>
        <img src="assets/images/louis.jpg">
        <?php include 'connexion.php'  ?>
        <h2>Posts list</h2>
        <?php
        $request = "SELECT id,title, content FROM posts";
        $query = mysqli_query($connexion, $request);
        while ($row = mysqli_fetch_array($query)) : ?>
            <h2><?php echo $row['title']; ?></h2>

            <p><?php echo $row['content']; ?></p>

            <div class="link-button">
                <a href="add.php">Add</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>">Supprimer</a>
                <a href="update.php?id=<?php echo  $row['id'];  ?>">Modifier</a>
            </div>

        <?php endwhile ?>
        <h2>List categories</h2>
        <?php
        $request = "SELECT category_name FROM category";
        $query = mysqli_query($connexion, $request);
        while ($row = mysqli_fetch_array($query)) : ?>
            <h3><?php echo $row['category_name']; ?></h3>

            <a class="link-button" href="add_category.php">Add category</a>
        <?php endwhile ?>


    </main>

    <?php include 'include/footer.php' ?>

</body>



</html>