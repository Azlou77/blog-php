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
        <?php include 'connexion.php' ?>
        <?php
        $request = "SELECT * FROM articles";
        $query = mysqli_query($connexion, $request);
        while ($row = mysqli_fetch_array($query)) : ?>
            <h2><?php echo $row['title']; ?></h2>
            <section id="presentation">

                <p><?php echo $row['content']; ?>
                </p>
                <a class="link-button" href="add.php">Add</a>
                <a class="link-button" href="delete.php?id=<?php echo $row['id']; ?>">Supprimer</a>
                <a class="link-button" href="update.php?id=<?php echo $row['id']; ?>">Modifier</a>
            </section>
        <?php endwhile ?>

    </main>

    <?php include 'include/footer.php' ?>

</body>



</html>