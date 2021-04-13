 <?php
require('connection.php');
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <title>Main Page</title>
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
    <!--ListingSection-->
    <div class="container mt-3 my-2 p-2 listingCards">
        <div class="row">

            <?php
            // if(isset($product)){
            //     foreach ($product as $a) {
            //         echo $a;
            //     }
            // }
            // else{
            //     echo "veri yok";
            // }
            ?>

            <?php
            $query = mysqli_query($conn, "SELECT * FROM `product`");
            while ($data = mysqli_fetch_assoc($query)) {
                echo '
                <div class="col-md-3 p-2 listingCol">
                    <a href="product.php?id=' . $data['id'] . '">
                        <div class="card listingCard">
                            <img src="' . $data['image'] . '" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">';
                if (strlen($data['name']) > 30) {
                    echo substr($data['name'], 0, 30) . '... ';
                } else {
                    echo $data['name'];
                }
                echo '</h5>
                                <p class="card-text font-weight-bold">Price: ' . $data['price'] . ' £</p>
                            </div>
                        </div>
                    </a>
                </div>  
            ';
            }
            ?>




        </div>
    </div>
    <!--End Of ListingSection-->
    <!--FooterSection-->
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
    <!--End Of FooterSection-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>