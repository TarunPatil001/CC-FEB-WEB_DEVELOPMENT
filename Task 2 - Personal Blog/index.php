<?php

include "database.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Personal Blog</title>
</head>

<body style="background: rgb(0,249,255);
background: radial-gradient(circle, rgba(0,249,255,1) 0%, rgba(70,252,134,1) 55%, rgba(227,252,70,1) 100%); height: 100%; margin-bottom: 10px;">

        <div class="container mt-4">
            <div style="margin-bottom: 50px; margin-top: 0px;">
                <h1 style="text-align: center; font-size: 7rem; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; ">My Blog</h1>
            </div>

            <!-- Create a new Post button -->
            <div class="text-center">
                <a href="blog_creation.php" class="btn btn-outline-secondary">+ Create a new post</a>
            </div>

            <!-- Display posts from database -->
            <div class="row">
                <?php foreach ($query as $q) { ?>
                    <div class="col-12 col-lg-4 d-flex justify-content-center">
                        <div class="card text-white mt-5" style="width: 18rem; background-color: #FBAB7E;
background-image: linear-gradient(62deg, #FBAB7E 0%, #F7CE68 100%); border-radius: 10px; ">
                            <div class="card-body">
                                <h5 class="card-title" style="font-family: 'Calistoga', cursive;"><?php echo $q['title']; ?></h5>
                                <p class="card-text"style="color: black; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"><?php echo substr($q['content'], 0, 50); ?>...</p>
                                <a href="blog_view.php?id=<?php echo $q['id'] ?>" class="btn btn-light">Read More <span class="text-danger">&rarr;</span></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>

        <!-- Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>