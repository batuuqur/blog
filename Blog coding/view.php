<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>BLOG site</title>

</head>

<?php
include "logic.php";
?>

<body>

<div class="container mt-5">
    <?php foreach($query as $q) {?>
        <div class="bg-dark p-5 rounded-lg text-white text-center">
            <h1><?php echo $q["header"];?></h1>

            <div class="d-flex mt-2 justify-content-center align-items-center">
                <a href="edit.php?id=<?php echo $q["id"];?>" class="btn btn-light btn-sm m-2">Edit</a>

                <form>
                    <input type="text" hidden name="id" value="<?php echo $q["id"];?>">
                    <button class="btn btn-danger btn-sm ml-2" name="delete">Delete</button>
                </form>
            </div>

        </div>
        <p class="mt-5 border-left border-dark pl-3"><?php echo $q["blog_contents"];?></p>
    <?php } ?>

    <a href="http://localhost/Blog/Blog%20coding/" class="btn btn-outline-dark">Back<span class="text-danger">
                            &leftarrow;</span></a>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
</body>
</html>

