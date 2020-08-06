<?php
    require_once "php/header.php";
    
?>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7 frame1">
                <div class="row">
                    <div class="col-md-10 ">
                        <a type="button" class="btn btn-lg btnGrey font-weight-bold" href="data.php">CV</a>
                        <a type="button" class="btn btn-lg btnGrey font-weight-bold" href="datlinkedin.php">LINKEDIN</a>
                        <a type="button" class="btn btn-lg btnGrey font-weight-bold" href="datlaika.php">WEARELAIKA.COM</a>
                    </div>
                    <div class="col-md-2 ">
                        <a type="button" class="btn btn-lg greyPurpleCustom font-weight-bold" id="edit">EDIT</a>
                        <a type="button" style="display: none;" class="btn btn-lg greyPurpleCustom font-weight-bold" id="save">SAVE</a>
                    </div>
                </div>
                <div id="target"class="row">
                    <div class="row padding5">
                        <div  class="col-md-2 paddingTop1">
                            <img id="imgRemove" src="img/aj.jpeg" alt="" class="ajimage">
                            <div class="row">
                                    <div style="display: none;" id="imgAdd" class="col-md-12">
                                    <p class="popuptext" id="inputPopup"><input type="file" id="files" name="files[]" multiple /></p>
                                    <div class="pip">
                                        <img class="ajimage rounded-circle" id="profile" src="img/aj.jpeg"/></div>  
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-9 col-md-offset-1">
                            <h2 id="dataIntro" contenteditable="false" class="marginBottom">Aleksandra Janakievska</h2>
                            <h1 contenteditable="false" class="marginNone textGrey"><small>Data Scientist</small></h1>
                            <p contenteditable="false">Highly accurate experienced Data scientist adept at collecting, analyzing and interpreting large datasets, developing new forecasting and performing data management tasks.</p>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-10 col-md-offset-1 borderData ">
                            <div class="row padding1 ">
                                <div id="dataInfo" class="col-md-4 col-md-offset-3"><i class="fas fa-envelope fa-lg"></i><span contenteditable="false"> aleksandra@wearelaika.com</span></div>
                                <div class="col-md-3"><i class="fas fa-mobile-alt fa-lg"></i><span contenteditable="false" > +3891234567</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="row paddingLeft5">
                        <div class="col-md-6 rowPadding5">
                            <h1 id="dataWork" class="titles text-uppercase">Work Experiance</h1>
                            <div class="work1">
                                <h4 contenteditable="false" ><strong>Data Science</strong></h4>
                                <h5 contenteditable="false" id="editable_company">Rocket Corp</h5>
                                <span contenteditable="false">11/2019 - Present</span>
                                <span contenteditable="false" class="rightText"><em>Skopje</em></span>
                                <p>Accomplishments</p>
                                <ul  class="dashed">
                                    <li contenteditable="false">Collecting, analyzing, and interpreting raw data from
                                    various websites</li>
                                    <li contenteditable="false">Collaborating with the Operations and Technology
                                    Department on the development of new automated data
                                    management/analysis software which increases the overall
                                    productivity and cut unnecessary costs</li>
                                    <li contenteditable="false">Maintaining and managing company's MS SQL server</li>
                                </ul>
                            </div>
                            <div class="work1">
                                <h4 contenteditable="false"><strong>Data Science Intern</strong></h4>
                                <h5 contenteditable="false">Random Co.</h5>
                                <span contenteditable="false">07/2019 - 10/2019</span>
                                <span contenteditable="false" class="rightText"><em>Skopje</em></span>
                                <p>Accomplishments</p>
                                <ul class="dashed">
                                    <li contenteditable="false">Reported actionable, statistical and analytical insights to executives for effective strategic positioning in the market place</li>
                                    <li contenteditable="false">Shadowed data scientists and assist in developing algorithms for predictive modeling</li>
                                    <li contenteditable="false">Analysed and processed sophisticated data sets using SAS, MySQL and Excel</li>
                                    <li contenteditable="false">Wrote python scripts to automate everyday tasks</li>
                                </ul>
                                <div style="display: none;" id="addDataWork">
                                <p>Click to add more<i><i class="fas fa-plus-square"></i></i></p>    
                                </div>
                            </div>
                            <h1 id="dataEdu" contenteditable="false"class="titles">EDUCATION</h1>
                            <div>
                                <h5 contenteditable="false"><strong>Data Science Academy</strong></h5>
                                <h6 contenteditable="false">Brainster</h6>
                                <span contenteditable="false">01/2019 - 10/2020</span>
                                <span contenteditable="false" class="rightText"><em>Skopje</em></span>
                            </div>
                            <div>
                                <h5 contenteditable="false"><strong>Financial management</strong></h5>
                                <h6 contenteditable="false">Faculty of Economy, University"St. Cyril and Methodius"</h6>
                            </div>
                            <div style="display: none;" id="addDataAch">
                                <p>Click to add more<i><i class="fas fa-plus-square"></i></i></p>    
                                </div>
                        </div>
                        <div class="col-md-5">
                            <div class="padding1">
                                <h3 id="dataSkill" class="titles">SKILLS</h3>
                                <table class="table" id="tableBorder">
                                <tbody>
                                <tr>
                                    <td  contenteditable="false">Pyhton</td>
                                    <td id="container1">
                                        <span class="full rate"></span>
                                        <span class="full rate"></span>
                                        <span class="full rate"></span>
                                        <span class="full rate"></span>
                                        <span class="empty rate"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td   contenteditable="false">MySQL</td>
                                    <td id="container2">
                                        <span class="full rate"></span>
                                        <span class="full rate"></span>
                                        <span class="full rate"></span>
                                        <span class="full rate"></span>
                                        <span class="empty rate"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td contenteditable="false">PHP</td>
                                    <td id="container3" >
                                        <span class="full rate"></span>
                                        <span class="full rate"></span>
                                        <span class="full rate"></span>
                                        <span class="empty rate"></span>
                                        <span class="empty rate"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td contenteditable="false">R</td>
                                    <td id="container4" >
                                        <span class="full rate"></span>
                                        <span class="full rate"></span>
                                        <span class="full rate"></span>
                                        <span class="empty rate"></span>
                                        <span class="empty rate"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td contenteditable="false">C</td>
                                    <td id="container5" >
                                        <span class="full rate"></span>
                                        <span class="full rate"></span>
                                        <span class="full rate"></span>
                                        <span class="empty rate"></span>
                                        <span class="empty rate"></span>
                                    </td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                        <div style="display: none;" id="addDataSkill">
                                <p>Click to add more<i><i class="fas fa-plus-square"></i></i></p>    
                                </div>
                        <div class="padding1">
                            <h3 id="dataCert" contenteditable="false" class="titles">CERTIFICATES</h3>
                            <h4 contenteditable="false" >Data Analysis</h4>
                            <h4 contenteditable="false" >Machine Learning</h4>
                            <div style="display: none;" id="addDataCert">
                                <p>Click to add more<i><i class="fas fa-plus-square"></i></i></p>    
                            </div>
                        </div>
                        <div class="padding1">
                            <h3 id="dataLan "contenteditable="false" class="titles">LANGUAGES</h3>
                            <h5 contenteditable="false">English</h5>
                            <p  contenteditable="false"class="textGrey"><em>Full Professional Proficiency</em></p>
                            <div style="display: none;" id="addDataLan">
                                <p>Click to add more<i><i class="fas fa-plus-square"></i></i></p>    
                            </div>
                        </div>
                        <div class="padding1">
                            <h3 id="dataIE" contenteditable="false" class="titles">INFORMAL EDUCATION</h3>
                            <p contenteditable="false" class=" btn btn-default cvBotton">Artificial intelligence Webinar</p><br>
                            <p contenteditable="false" class="btn btn-default cvBotton">Businnes Analytics Course</p>
                            <div style="display: none;" id="addDataIE">
                                <p>Click to add more<i><i class="fas fa-plus-square"></i></i></p>    
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                    <div class="col-md-2 col-md-offset-9">
                        <a type="button" class="btn btn-lg btnPurple text-uppercase font-weight-bold download" id="download" href="javascript:genPDF">download</a>
                    </div>
            </div>
        </div>
        <div class="col-md-4 frame2">
            <div id="datasuggestions">

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