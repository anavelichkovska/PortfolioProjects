<?php
    require_once "php/header.php";
    
?>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-7 WLframe1 content">
            <div class="row">
                <div class="col-md-10 ">
                    <a type="button" class="btn btn-lg btnGrey font-weight-bold" href="data.php">CV</a>
                    <a type="button" class="btn btn-lg btnGrey font-weight-bold" href="datlinkedin.php">LINKEDIN</a>
                    <a type="button" class="btn btn-lg btnGrey font-weight-bold" href="datlaika.php">WEARELAIKA.COM</a>
                </div>
            </div>
            <div class="row" id="carouselDiv">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="6"></li>
                </ol>

                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="img/LinkedIn/bill1.png" id="imgBill1" class="carImg" alt="...">
                        <div class="">
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/LinkedIn/bill2.png" id="imgBill2" class="carImg" alt="...">
                        <div class="">
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/LinkedIn/bill3.png" id="imgBill3" class="carImg" alt="...">
                        <div class="">
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/LinkedIn/bill4.png" id="imgBill4" class="carImg" alt="...">
                        <div class="">
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 WLframe2">
            <div id="suggestions">
                <div>Click on the photo to get tips</div>
            </div>
        </div>
    </div>
</div>
    <div class="container-fluid">
        <?php
            require_once "php/banner.php";
        ?>
    </div>
   
    <?php
    require_once "php/footer.php";
    ?>

</body>
</html>
