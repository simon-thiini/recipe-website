<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/script.js" defer></script>
    <title>About Us</title>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div id="carouselExampleCaptions1" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/alll.jpeg" class="d-block w-100 img-fluid" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Recipe 1</h5>
                                    <p>Our recipes are based on the 3 categories lunch, breakfast, and supper</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/bakery.jpeg" class="d-block w-100 img-fluid" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Recipe 2</h5>
                                    <p>Delicious bakery items made fresh every day</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/bugers.jpeg" class="d-block w-100 img-fluid" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Recipe 3</h5>
                                    <p>Our burgers are made with the finest ingredients for a great taste</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div id="recipe-content"></div>
                </div>
            </div>
        </div>
    </div>
     <!--footer-->
       <div class="container-fluid class"></div>
       <!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/6485a457cc26a871b021d58a/1hb6521vb';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
        <!--End of Tawk.to Script-->
</body>

</html>
