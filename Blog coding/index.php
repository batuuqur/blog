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

        <?php if(isset($_REQUEST['info'])){?>
            <?php if($_REQUEST['info']=="added"){?>
                <div class="alert alert-success" role="alert">
                    Post has been created
                </div>
            <?php }else if($_REQUEST['info']=="updated"){?>
                <div class="alert alert-success" role="alert">
                    Post has been updated successfully
                </div>
            <?php }else if($_REQUEST['info']=="deleted"){?>
                <div class="alert alert-danger" role="alert">
                    Post has been deleted successfully
                </div>
            <?php } ?>
        <?php } ?>
        <div class="text-center">
            <a href="create.php" class="btn btn-outline-dark">+ Create a new post</a>
        </div>

        <div class="row">




            <?php foreach($query as $q){?>
                <div class="col-4 d-flex justify-content-center align-items-center">
                    <div class="card text-white bg-dark mt-5">
                        <div class="card-body" style="width:18rem;">
                            <h5 class="card-title"><?php echo $q['header'];?></h5>
                            <p class="card-text"><?php echo $q['blog_contents'];?></p>
                            <p class="card-text"><?php echo $q['blog_author'];?></p>
                            <p class="card-text"><?php echo $q['blog_category'];?></p>

                            <p class="card-img-bottom"><img src="../Assets/image/<?php echo $q['blog_image'];?>" width="150px" height="100px"></p>

                            <a href="view.php?id=<?php echo $q['id']?>" class="btn btn-light">Read More<span class="text-danger">
                            &rarr;</span></a>
                        </div>
                    </div>
                </div>

            <?php } ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
</body>
</html>

