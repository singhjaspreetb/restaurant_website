<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Menu Admin</title>
    <style>
        .container {
            display: flex;
            justify-content: center;
            text-align: center;
            margin-top: 5%;
        }

        form {
            background-color: aliceblue;
            border-radius: 5%;
            padding: 3%;
            border: 2px solid;
            box-shadow: 5px 5px 10px black;
        }

        h2 {
            color: #F7CA3E;
            font-family: arial;
            text-shadow: 0rem 0rem 1rem white;
        }

        input,
        select,
        textarea {
            width: 300px !important;
            margin-top: 20px;
        }

        .btn {
            font-size: 1.3rem;
            padding: .2rem 1rem;
            border-radius: 5rem;
            margin-top: 1rem;
            background: none;
            color: #333;
            cursor: pointer;
            border: .2rem solid #F7CA3E;
        }

        .btn:hover {
            background: #F7CA3E;
        }
    </style>
</head>

<body>
    <section class="container">
        <form action="" method="POST" enctype="multipart/form-data">
            <h2>Blog Form</h2>
            <select class="custom-select" id="validationDefault04" required name="topic">
                <option selected disabled value="">-- Select --</option>
                <option name="popular" value="popular">popular</option>
                <option name="trending" value="trending">trending</option>
            </select>
            <input type="text" class="form-control" name="title" placeholder="Title" required>
            <textarea class="form-control" name="headline" rows="2" required placeholder="Headline"></textarea>
            <input type="file" class="form-control" name="uploadfile" value="" required>
            <!-- <input type="text" class="form-control" name="imagefile"  id="imagefile" required> -->
            <textarea class="form-control" name="info" rows="3" required placeholder="Menu Info"></textarea>
            <input class="btn btn-primary" name="submt" type="submit" value="Submit Data">
        </form>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>

<?php
include('blog_con.php');
if (isset($_POST['title'])) {
    $topic = $_POST['topic'];
    $title = $_POST['title'];
    $info = $_POST['info'];
    $headline = $_POST['headline'];    

    $imagefile = $_FILES["uploadfile"]["name"];
    $tmp_imagefile = $_FILES["uploadfile"]["tmp_name"];
    $loc = "../assets/images/blog/" . $imagefile;

    move_uploaded_file($tmp_imagefile, $loc);

    $sql = "INSERT INTO `blog`.`$topic` (`title`, `image`, `info`,`headline`) VALUES ('$title',' $loc', '$info', '$headline');";

    if ($con->query($sql) == true) {
        echo "<script>alert('Blog Submitted');</script>";
        // header("Location: ../../pages/home.php");
    } else {
        echo "INSERT INTO `blog`.`$topic` (`title`, `image`, `info`,`headline`) VALUES ('$title',' $loc', '$info', '$headline');";
        echo "<script>alert('Try Again!');</script>";
    }
}
?>