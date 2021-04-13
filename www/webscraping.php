<?php
require('addingDatabase.php');

if (isset($_POST["product"])) {
    $link = $_POST["product"];
    Adding($link);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="preconnect" href="Raleway-Light.ttf">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <title>Product Adding</title>
</head>
<body class="pagebackground">
<div class="nav navbar">
            <div class="col-md-4 navHeader ">
            <a href="index.php" class="homeLink mx-3 textcolor">LOGO</a>
            </div>
            <div class="col-md-8 navItems d-flex justify-content-end">
                <a href="index.php" class="homeLink mx-3 textcolor">Homepage</a>
                <a href="webscraping.php" class="listLink mx-3 textcolor">Adding Product</a>
            </div>
    </div>
    <div class="container link">
        <form method="POST">
        <div class="row linkRow">
            <div class="col-md-11">
                <div class="input-group  input-group-lg">
                    <input type="text" class="form-control" name="product" placeholder="Add Link..." required>
                </div>
            </div>
            <div class="col-md-1">
                <button class="btn btn-lg" type="submit">Add</button>
            </div>
        </div>
        </form>
    </div>
    <div class="container-fluid copyright">
        <div class="container p-0">
            <div class="row py-2">
                <div class="col-md-6 text-left text-center d-flex align-items-center">
                    <p class="m-0">Copyright © 2021.</p>
                </div>
                <div class="col-md-6 text-right">
                    <i class="fab fa-2x fa-github"></i>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>
