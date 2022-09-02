<?php

    $conn = mysqli_connect("localhost","root","","blog");

    if(!$conn){
        echo "<h3 class='container bg-dark text-center p-3 text-warning rounded-lg mt-5'>No Database
        Connection. Don't try again later because it's probably not gonna work.</h3>";
    }

    $sql ="select * FROM data";
    $query = mysqli_query($conn, $sql);

    if(isset($_POST["New_Post"])){
        $title = $_POST["header"];
        $content = $_POST["blog_contents"];
        $author = $_POST["blog_author"];
        $category = $_POST["blog_category"];
        $filename="";
        if(isset($_FILES["blog_image"]))
        {
            $filename = $_FILES["blog_image"]["name"];
            $tempname = $_FILES["blog_image"]["tmp_name"];
            $folder = "D:/Applications/XAMPP/htdocs/Blog/Assets/image/".$filename;
            move_uploaded_file($tempname, $folder);
        }


        $sql = "INSERT INTO data(header, blog_contents, blog_author, blog_category, blog_image) 
                VALUES('{$title}','{$content}','{$author}','{$category}','{$filename}')";
        mysqli_query($conn, $sql);

        header("Location: index.php?info=added");
        exit();
    }

    if(isset($_REQUEST['id'])){
        $id=$_REQUEST['id'];

        $sql = "SELECT * FROM data WHERE id=$id";
        $query = mysqli_query($conn,$sql);
    }

    if(isset($_POST['Update'])){
        $id=$_POST['id'];
        $title = $_POST["header"];
        $content = $_POST["blog_contents"];
        $author = $_POST["blog_author"];
        $category = $_POST["blog_category"];
        $filename="";
        if(isset($_FILES["blog_image"]))
        {
            $filename = $_FILES["blog_image"]["name"];
            $tempname = $_FILES["blog_image"]["tmp_name"];
            $folder = "D:/Applications/XAMPP/htdocs/Blog/Assets/image/".$filename;
            move_uploaded_file($tempname, $folder);
        }

        $sql = "UPDATE data SET header='$title',blog_contents='$content',blog_author='$author',
                blog_category='category',blog_image='$filename' WHERE id=$id";
        mysqli_query($conn,$sql);

        header("Location: index.php?info=updated");
        exit();
    }

    if(isset($_GET['delete'])){
        $id=$_GET['id'];

        $sql = "DELETE FROM data WHERE id=$id";
        $query = mysqli_query($conn,$sql);

        header("Location: index.php?info=deleted");
        exit();
    }

