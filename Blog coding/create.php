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
        <form method="post" action="" enctype="multipart/form-data">
            <input type="text" name="header" placeholder="Blog Title" class="form-control bg-dark text-white my-3
            text-center">
            <textarea name="blog_contents" class="form-control bg-dark text-white my-3"></textarea>
            <input type="text" name="blog_author" placeholder="Blog Author" class="form-control bg-dark text-white my-3
            text-center">
            <input type="text" name="blog_category" placeholder="Blog Category" class="form-control bg-dark text-white my-3
            text-center">
            <input type="file" name="blog_image">
            <button type="submit" name="New_Post" class="btn btn-dark">Add Post</button>
            <a href="http://localhost/Blog/Blog%20coding/" class="btn btn-outline-dark">Back<span class="text-danger">
                            &leftarrow;</span></a>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>

</body>
</html>