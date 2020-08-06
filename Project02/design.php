<?php
    require_once "php/header.php";  
    
?>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-7 frame1 content" id="pdf">
            <div class="row">
                <div class="col-md-10 ">
                    <a type="button" class="btn btn-lg btnGrey font-weight-bold" href="design.php">CV</a>
                    <a type="button" class="btn btn-lg btnGrey font-weight-bold" href="deslinkedin.php">LINKEDIN</a>
                    <a type="button" class="btn btn-lg btnGrey font-weight-bold" href="deslaika.php">WEARELAIKA.COM</a>
                </div>
                <div class="col-md-2 ">
                    <a type="button" class="btn btn-lg greyPurpleCustom font-weight-bold" id="edit">EDIT</a>
                    <a type="button" style="display: none;" class="btn btn-lg greyPurpleCustom font-weight-bold" id="save">SAVE</a>
                </div>
            </div>
            <div id="target"class="row">
                <div class="blackBg">
                    <h1 id="desIntro" contenteditable="false" class="paddingLeft5 "><strong>KIRIL</strong></h1>
                    <h1 contenteditable="false" class="paddingLeft5"><strong>NIKOLOVSKI</strong></h1>
                    <h3 contenteditable="false" class="paddingLeft5">Graphic Designer</h3>
                </div>
                <div class="row blackDesignerBorder paddingLeft5">
                    <div class="col-md-7 paddingTop20 ">
                        <h4 contenteditable="false">Graphic Designer with expertise in branding and logo design, packaging design, typography, creative direction and illustration. Oriented into helping small businesses realize their unique vision.</h4> 
                    </div>
                    
                        <div class="col-md-6 paddingTop">
                            <h3 id="desWork" contenteditable="false" class="titles"><strong>WORK EXPERIANCE</strong></h3>
                            <h4 contenteditable="false"><strong>02.2019 - </strong></h4>
                            <p contenteditable="false">Brainster co. Skopje</p>
                            <p contenteditable="false">Junior Graphic Designer</p>
                            <p contenteditable="false" class="rowPadding5">Creating  visual concepts to communicate ideas that inspire. Inform and captivate consumers. Developing overall layout and production design for ads. brochures, magazines and corporate digital marketing content.</p>

                            <h4 contenteditable="false"><strong>2016 - 2019 </strong></h4>
                            <p contenteditable="false">Upwork</p>
                            <p contenteditable="false">Freelance Graphic Designer</p>
                            <p contenteditable="false">Working with international clients and helping them get their ideas out in a workable way.</p>
                            <p contenteditable="false">Conceptualizing visuals based on their requirements.</p>
                            <p contenteditable="false" class="rowPadding5">Shaping the visual aspects of brand identities, product packaging, book covers, magazines, brochures, posters and many more.</p>

                            <div style="display: none;" id="addDesWork">
                                <p>Click to add more<i><i class="fas fa-plus-square"></i></i></p>    
                            </div>

                            <h4 id="desInfo" contenteditable="false" class="titles"><strong>CONTACT</strong></h4>
                            <p contenteditable="false">+3891234567</p>
                            <p contenteditable="false">kiril.nikolovski@gmail.com</p>
                            <p contenteditable="false">linkedin.com/in/kiril-nikolovski</p>
                            <p contenteditable="false" class="rowPadding5">Skopje, Macedonia</p>

                            <div style="display: none;" id="addDesInfo">
                                <p>Click to add more<i><i class="fas fa-plus-square"></i></i></p>    
                            </div>
                        </div>
                        <div class="col-md-5">
                            <h3 id="desEdu" contenteditable="false" class="titles"><strong>EDUCATION</strong></h3>
                            <h4 contenteditable="false">2018 - 2019</h4>
                            <p contenteditable="false" class="rowPadding5">Brainster Academy of Design</p>

                            <h4 contenteditable="false">2016 - 2019</h4>
                            <p contenteditable="false">Ss. Cyril and Methodius University</p>
                            <p contenteditable="false">Faculty of Mechanical Engineering</p>
                            <p contenteditable="false" class="rowPadding5">Industrial Design</p>

                            <div style="display: none;" id="addDesEdu">
                                <p>Click to add more<i><i class="fas fa-plus-square"></i></i></p>    
                            </div>

                            <h3 id="desSkill" contenteditable="false" class="titles"><strong>SKILLS</strong></h3>
                            <p contenteditable="false">Adobe Photoshop</p>
                            <p contenteditable="false">Adobe Illustrator</p>
                            <p contenteditable="false">Adobe inDesign</p>
                            <p contenteditable="false">Adobe Premiere Pro</p>
                            <p contenteditable="false">Adobe After Effects</p>
                            <p contenteditable="false">Adobe Xd</p>
                            <p contenteditable="false">MC Office</p>
                            <p contenteditable="false">SolidWorks</p> 
                            <div style="display: none;" id="addDesSkill">
                                <p>Click to add more<i><i class="fas fa-plus-square"></i></i></p>    
                            </div>
                        </div>  
                    </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-md-offset-9 paddingTop1">
                    <a type="button" class="btn btn-lg btnPurple text-uppercase font-weight-bold download" id="download" href="javascript:genPDF">download</a>
                </div>
            </div> 
        </div>
        <div class="col-md-4 frame2">
            <div id="dessuggestions">

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