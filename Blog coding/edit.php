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
$blog_query = "SELECT * FROM data WHERE id='{$_GET['id']}'";
$blog = mysqli_query($conn, $blog_query)->fetch_array();
?>

<body>

<div class="container mt-5">
        <form method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $blog["id"];?>">
            <input type="text" name="header" placeholder="Blog Title" class="form-control bg-dark text-white my-3
            text-center" value="<?php echo $blog["header"];?>">
            <textarea name="blog_contents" class="form-control bg-dark text-white my-3"><?php echo $blog["blog_contents"];?></textarea>
            <input type="text" name="blog_author" placeholder="Blog Author" class="form-control bg-dark text-white my-3
            text-center" value='<?php echo $blog["blog_author"];?>'>
            <input type="text" name="blog_category" placeholder="Blog Category" class="form-control bg-dark text-white my-3
            text-center" value="<?php echo $blog["blog_category"];?>">
            <input type="file" name="blog_image" value="<?php echo $blog["blog_image"];?>">
            <button type="submit" name="Update" class="btn btn-dark">Update</button>
            <a href="view.php?id=<?php echo $blog['id']?>" class="btn btn-dark">Back<span class="text-danger">&leftarrowtail;</span></a>
        </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>

</body>
</html>