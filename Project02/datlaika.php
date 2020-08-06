<?php
    require_once "php/header.php";
?>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-7 WLframe1 content">
            <div class="row">
                <div class="col-md-10 ">
                    <a type="button" class=" col-md-2 btn btn-lg btnGrey font-weight-bold" href="data.php">CV</a>
                    <a type="button" class=" col-md-2 btn btn-lg btnGrey font-weight-bold" href="datlinkedin.php">LINKEDIN</a>
                    <a type="button" class=" col-md-2 btn btn-lg btnGrey font-weight-bold" href="datlaika.php">WEARELAIKA.COM</a>
                </div>
                <div class="col-md-2 ">
                    <a type="button" class="btn btn-lg greyPurpleCustom font-weight-bold" data-toggle="modal" data-target="#myModal">FINISHED</a>
                        <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="img/popup.png"   class="popup" alt="...">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
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
                        <img src="img/Laika/Laika1.png" id="imgLaika1"  class="carImg" alt="...">
                        <div class="">
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/Laika/Laika2.png" id="imgLaika2" class="carImg" alt="...">
                        <div class="">
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/Laika/Laika3.png" id="imgLaika3" class="carImg" alt="...">
                        <div class="">
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/Laika/Laika4.png" id="imgLaika4" class="carImg" alt="...">
                        <div class="">
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/Laika/Laika5.png" id="imgLaika5" class="carImg"  alt="...">
                         <div class="">
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left blackCont" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right blackCont" aria-hidden="true"></span>
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
