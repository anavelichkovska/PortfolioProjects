<?php
    require_once "php/header.php";
    
?>
<body class="overflowY">
    <div class="container">
        <div class="row">
            <h1 class="col-md-6 paddingTop15vh paddingBottom15vh font-weight-bolder">Choose your category</h1>
        </div>
        <div class="row flex rowPadding5 rowHeight70">  
            <div class="col-md-3" id="cards" >
                <h5 class="text-center font-weight-bolder">Web Development</h5>
                <a class="btn btn-sm btnCustom" href="development.php" value ="1"  role="button">CHOOSE</a>
            </div>
            <div class="col-md-3" id="cards">
                <h5 class="text-center font-weight-bolder">Data Science</h5>
                <a class="btn btn-sm btnCustom" id="dataCv" href="data.php"  value ="2" role="button">CHOOSE</a>
            </div>
            <div class="col-md-3" id="cards">
                <h5 class="text-center font-weight-bolder">Digital Marketing</h5>
                <a class="btn btn-sm btnCustom" href="marketing.php" role="button">CHOOSE</a>
            </div>
            <div class="col-md-3" id="cards">
                <h5 class="text-center font-weight-bolder">Design</h5>
                <a class="btn btn-sm btnCustom" href="design.php" role="button">CHOOSE</a>
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
