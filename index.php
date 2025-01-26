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
        <?php include 'include/header.php'; ?>
        <?php include 'connexion.php'; ?>

        <h2>Posts list</h2>
        <div class="container">
            <?php
            $request = "SELECT id, title, content FROM posts";
            $query = mysqli_query($connexion, $request);
            if ($query) {
                while ($row = mysqli_fetch_array($query)) : ?>
                    <!-- card -->
                    <div class="card">
                        <!-- card header -->
                        <div class="card-header">
                            <h2><?php echo htmlspecialchars($row['title']); ?></h2>
                        </div>

                        <!-- card content -->
                        <div class="card-content">
                            <p><?php echo htmlspecialchars($row['content']); ?></p>
                        </div>

                        <!-- card footer -->
                        <div class="card-footer">
                            <div class="link-button">
                                <a class="btn" href="add.php">Add</a>
                                <a href="delete.php?id=<?php echo $row['id']; ?>">Supprimer</a>
                                <a href="update.php?id=<?php echo $row['id']; ?>">Modifier</a>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
            <?php endwhile;
            } else {
                echo "Erreur lors de la récupération des posts : " . mysqli_error($connexion);
            }
            ?>
        </div>
    </main>
</body>

</html>