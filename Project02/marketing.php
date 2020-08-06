<?php
    require_once "php/header.php";  
    
?>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-7 frame1 content" id="pdf">
            <div class="row">
                <div class="col-md-10 ">
                    <a type="button" class="btn btn-lg btnGrey font-weight-bold" href="marketing.php">CV</a>
                    <a type="button" class="btn btn-lg btnGrey font-weight-bold" href="marlinkedin.php">LINKEDIN</a>
                    <a type="button" class="btn btn-lg btnGrey font-weight-bold" href="marlaika.php">WEARELAIKA.COM</a>
                </div>
                <div class="col-md-2 ">
                    <a type="button" class="btn btn-lg greyPurpleCustom font-weight-bold" id="edit">EDIT</a>
                    <a type="button" style="display: none;" class="btn btn-lg greyPurpleCustom font-weight-bold" id="save">SAVE</a>
                </div>
            </div>
            <div id="target" class="row">
                <div class="row padding5">
                <div  class="col-md-2 paddingTop1">
                            <img id="imgRemove" src="img/st.jpeg" alt="" class="ajimage">
                            <div class="row">
                                    <div style="display: none;" id="imgAdd" class="col-md-12">
                                    <p class="popuptext" id="inputPopup"><input type="file" id="files" name="files[]" multiple /></p>
                                    <div class="pip">
                                        <img class="ajimage rounded-circle" id="profile" src="img/st.jpeg"/></div>  
                                    </div>
                            </div>
                        </div>
                    <div class="col-md-9 col-md-offset-1">
                        <h2 id="marIntro" contenteditable="false" class="marginBottom">Stefanija Tenekedjieva</h2>
                        <h4 contenteditable="false" class="fontSizeTeal">Digital Marketer</h4>
                        <p contenteditable="false">Fascinated by the power of communication and media. Quick learner. Endlessly curious and keen to know more.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 bgTeal ">
                        <div class="row padding1 ">
                            <div id="marInfo"class="col-md-5 col-md-offset-3"><i class="fas fa-envelope fa-lg"></i><span contenteditable="false"> stefanija.tenekegjieva@gmil.com</span></div>
                            <div class="col-md-3"><i class="fas fa-mobile-alt fa-lg"></i><span contenteditable="false" > +3891234567</span></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h1 id="marWork" class="titles text-uppercase padding1 paddingLeft5 teal">Work Experiance</h1>
                        <div class="work1">
                            <h4 contenteditable="false" id="editable_position" ><span class="teal"><strong> &mdash; </strong>    &nbsp;</span><strong>Digital Marketer</strong></h4>
                            <h5 contenteditable="false" class="paddingLeft5" id=" editable_company">Rocket Corp</h5>
                            <span class="paddingLeft5 teal" contenteditable="false" id="editable_date">11/2019 - Present</span>
                            <span contenteditable="false" class="rightText teal"><em>Skopje</em></span>
                            <p class="paddingLeft5 teal">Achievments</p>
                            <ul  class="dashed" id="editable_jobdesc">
                                <li contenteditable="false">Content writing</li>
                                <li contenteditable="false">Social media advertisin</li>
                                <li contenteditable="false">Lead generation</li>
                                <li contenteditable="false">Conversion rate optimisation</li>
                            </ul>
                        </div>
                        <div class="work1">
                            <h4 contenteditable="false" id="editable_position" ><span class="teal"><strong> &mdash; </strong>    &nbsp;</span><strong>Project coordinator</strong></h4>
                            <h5 contenteditable="false" class="paddingLeft5" id=" editable_company">Radio MOF</h5>
                            <span class="paddingLeft5 teal" contenteditable="false" id="editable_date">12/2017 - 02/2019</span>
                            <span contenteditable="false" class="rightText teal"><em>Skopje</em></span>
                            <p class="paddingLeft5 teal">Achievments</p>
                            <ul  class="dashed" id="editable_jobdesc">
                                <li contenteditable="false">Editing, writing, planning and reporting for the projects of radio mof</li>
                                <li contenteditable="false">Maintaining social media profiles, web content and statistics of www.radiomof.mk through Google Analytics</li>
                                <li contenteditable="false">Editing and proofreading of content on www.radiomof.mk</li>
                            </ul>
                        </div>
                        <div class="work1">
                            <h4 contenteditable="false" id="editable_position" ><span class="teal"><strong> &mdash; </strong>    &nbsp;</span><strong>Journalist</strong></h4>
                            <h5 contenteditable="false" class="paddingLeft5" id=" editable_company">Radio MOF</h5>
                            <span class="paddingLeft5 teal" contenteditable="false" id="editable_date">09/2015 - 12/2017</span>
                            <span contenteditable="false" class="rightText teal"><em>Skopje</em></span>
                            <p class="paddingLeft5 teal">Achievments</p>
                            <ul  class="dashed" id="editable_jobdesc">
                                <li contenteditable="false">Content writing and reporting for Radio MOF</li>
                                <li contenteditable="false">Reports and articles for radio shows</li>
                                <li contenteditable="false">Hosting trainings for Civil and Digital Journalism</li>
                            </ul>
                        </div>
                        <div style="display: none;" id="addMarWork">
                                <p>Click to add more<i><i class="fas fa-plus-square"></i></i></p>    
                                </div>
                        <h1 id="marEdu" class="titles padding1 teal paddingLeft5">EDUCATION</h1>
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="marginNone"><span class="teal"><strong> &mdash; </strong>    &nbsp; </span><strong>Education</strong></h4>
                                <h4 contenteditable="false" class="paddingLeft5">Brainster Digital Marketing Academy</h4>
                                <p contenteditable="false" class="paddingLeft5 teal"><span><em>04/2019 - 09/2019</em></span></p>
                                <p class="paddingLeft5 teal"><em>Courses</em></p>
                                <div class="row">
                                    <div class="col-md-6 circleTeal">
                                        <ul class="">
                                            <li contenteditable="false">Integrated marketing Communicaation</li>
                                            <li contenteditable="false">Unpaid & Paid Social Media</li>
                                            <li contenteditable="false">Lead Generation</li>
                                            <li contenteditable="false">Google Analytics</li>
                                            <li contenteditable="false">Segmentation</li>
                                        </ul>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="">
                                            <li contenteditable="false">Funnel Marketing</li>
                                            <li contenteditable="false">Sales</li>
                                            <li contenteditable="false">Google Ads.</li>
                                            <li contenteditable="false">Growth Hacking</li>
                                            <li contenteditable="false">SEO</li>
                                        </ul>
                                    </div>
                                    
                                </div>
                                <div style="display: none;" id="addMarEdu">
                                        <p>Click to add more<i><i class="fas fa-plus-square"></i></i></p>    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="padding1">
                            <h3 id="marSkill" class="titles teal">SKILLS</h3>
                            <span contenteditable="false" class="badge badge backgroundTeal margin1" id="editable_skillset0">Google Ads</span>
                            <span contenteditable="false" class="badge badge backgroundTeal margin1" id="editable_skillset1">Facebook Ads Manager</span>
                            <span contenteditable="false" class="badge badge backgroundTeal margin1" id="editable_skillset2">Google Analytics</span>
                            <span contenteditable="false" class="badge badge backgroundTeal margin1" id="editable_skillset3">Google data Studio</span>
                            <span contenteditable="false" class="badge badge backgroundTeal margin1" id="editable_skillset4">Wordpress</span>
                            <span contenteditable="false" class="badge badge backgroundTeal margin1" id="editable_skillset5">Canva</span>
                            <span contenteditable="false" class="badge badge backgroundTeal margin1" id="editable_skillset6">Adobe Premier</span>
                            <span contenteditable="false" class="badge badge backgroundTeal margin1" id="editable_skillset7">Content Writing</span>
                            <div style="display: none;" id="addMarSkill">
                                <p>Click to add more<i><i class="fas fa-plus-square"></i></i></p>    
                            </div>
                        </div>
                        <div class="padding1">
                            <h3 contenteditable="false" class="titles teal">ACHIEVEMENTS</h3>
                            <h5 contenteditable="false">First Award for Professional reporting of the refugee <br> crisis 2017 by UNHCR and MYLA</h5>
                            <h5 contenteditable="false">Third award for the Best Journalistic story from the <br> Macedonian Council of the Ethics in Media</h5>
                            <div style="display: none;" id="addMarAch">
                                        <p>Click to add more<i><i class="fas fa-plus-square"></i></i></p>    
                            </div>
                        </div>
                        <div class="padding1">
                            <h3 id="marLan" contenteditable="false" class="titles teal">LANGUAGES</h3>
                            <h5 contenteditable="false">English</h5>
                            <p  contenteditable="false"class="teal"><em>Full Professional Proficiency</em></p>
                            <div style="display: none;" id="addMarLan">
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
            <div id="marsuggestions">

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