<?php
    require_once "php/header.php";

?>
<body>
    <div class="development container-fluid">
        <div class="row" id="main">
        <div class="col-md-7 frame1 content" id="pdf">
            <div class="row">
                <div class="col-md-10 ">
                    <a type="button" id="cv" class="btn btn-lg btnGrey font-weight-bold" href="development.php">CV</a>
                    <a id="linkedin"type="button" class="btn btn-lg btnGrey font-weight-bold" href="devlinkedin.php">LINKEDIN</a>
                    <a type="button" class="btn btn-lg btnGrey font-weight-bold" href="devlaika.php">WEARELAIKA.COM</a>
                </div>
                <div class="col-md-2 ">
                    <a type="button" class="btn btn-lg greyPurpleCustom font-weight-bold" id="edit">EDIT</a>
                    <a type="button" style="display: none;" class="btn btn-lg greyPurpleCustom font-weight-bold" id="save">SAVE</a>
                </div>

            </div>
            <div id="target" class="row cv margin30 padding5 content">
                <div class="row text tealBorder">
                    <div class="col-md-12">
                        <div class="row">
                            <div id="devIntro" class="col-md-6">
                                <h1 contenteditable="false" >Elon Musk</h1>
                                <h3 class="fontSizeTeal" contenteditable="false">Entrepreneur, Engineer, Inventor and Investor</h3>
                                <p contenteditable="false">Aiming to reduce global warming through sustainable energy production and consumption. Planning to reduce the risk of human extinction by making life multi-planetary and setting up a human colony on Mars.</p>
                            </div>
                            <div  class="col-md-2 paddingTop1">
                                 <img id="imgRemove" src="img/em.jpg" alt="" class="emimage">
                                 <div class="row">
                                    <div style="display: none;" id="imgAdd" class="col-md-12">
                                    <p class="popuptext" id="inputPopup"><input type="file" id="files" name="files[]" multiple /></p>
                                    <div class="pip">
                                        <img class="emimage rounded-circle" id="profile" src="img/em.jpg"/></div>  
                                    </div>
                                 </div>
                            </div>                            
                            <div class="col-md-3 col-md-offset-1 paddingTop5vh" >
                                <div class="description" id="devInfo">
                                    <div class="row">
                                        <div contenteditable="false" class="editable_skill"> elon@teslamotors.com</div>
                                        <i class="fas fa-envelope" id="editable_skilli12"> </i>

                                    </div>

                                    <div class="row">
                                        <div contenteditable="false" id="editable_phone" class="editable_skill"> 620-681-5000 </div>
                                        <i class="fas fa-mobile-alt" id="editable_skilli13"></i>
                                    </div>

                                    <div class="row">
                                        <div contenteditable="false" id="editable_address" class="editable_skill">    Los Angeles, USA  </div>
                                        <i class="fas fa-map-marker-alt"id="editable_skilli14" ></i>
                                    </div>

                                    <div class="row">
                                        <div contenteditable="false" id="editable_twitter" class="editable_skill">   @elonmusk </div>
                                        <i class="fab fa-twitter" id="editable_skilli15"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="titles text-uppercase" id="devWork">Work Experience</h1>
                        <div>
                            <h5 contenteditable="false" class="font-weight-bold" id="editable_position">Founder, CEO & Lead Designer</h5>
                            
                            <h5 contenteditable="false" id="editable_company">SpaceX-Space Exploration Technologies</h5>
                           
                            <span contenteditable="false" class="font-italic teal" id="editable_date">06/2002 - Present Howthorne, USA</span>
                            
                            <span contenteditable="false" class="font-italic teal">Accomplishments</span>
                            <ul contenteditable="false" id="editable_jobdesc">
                                <li contenteditable="false">Successfully launched Falcon Heavy, the most powerful operational rocket in the world bu a factor of two, with the ability to lift into orbit nearly 64 metric tons (141,000 lb) -- a mass greater than a 737 jetliner loaded with passengers, crew, luggage and fuel.</li>
                                <li contenteditable="false">Plans to reduce space transportation costs to enable people to colonize Mars.</li>
                                <li contenteditable="false">Developed the Falcon 9 spacecraft which replaced the space shuttle when it retired in 2011.</li>
                            </ul>
                        </div>
                        <div>
                            <h5 contenteditable="false" class="font-weight-bold" id="editable_position2">Founder</h5>
                            <h5 contenteditable="false" id="editable_company2">The Boring Company</h5>
                            <span contenteditable="false" class="font-italic teal" id="editable_date2">12/2016 - Present Howthorne, USA</span>
                            <span contenteditable="false" class="font-italic teal">Accomplishments</span>
                            <ul contenteditable="false" id="editable_jobdesc2">
                                <li contenteditable="false">Raised $10m by selling 20.000 flamethrowers in 4 days.</li>
                                <li contenteditable="false">Raised $1m by selling 50.00 baseball caps.</li>
                                <li contenteditable="false">Hyperloop -- an ultra high-speed underground public transportation system in which passengers are transported on autonomous electric pods traveling at 600+ miles per hour in a pressurized cabin.</li>
                            </ul>
                            
                        </div>
                        <div>
                            <h5 contenteditable="false" class="font-weight-bold" id="editable_position3">CEO and Product Architect</h5>
                            <h5 contenteditable="false" id="editable_company3">Tesla Inc.</h5>
                            <span contenteditable="false" class="font-italic teal" id="editable_date3">2004 - Present San Mateo, USA</span>
                            <span contenteditable="false" class="font-italic teal">Accomplishments</span>
                            <ul contenteditable="false" id ="editable_jobdesc3">
                                <li contenteditable="false">Global sales passed 250,000 units in September 2017.</li>
                                <li contenteditable="false">Consumer Reports named Tesla as the top American car brand and ranked it 8th among global carmakers in February 2017.</li>
                                <li contenteditable="false">Topped Consumer Reports Annual Owner Satisfaction Survey at 91% in 2016.</li>
                            </ul>
                        </div>
                        <div>
                            <h5 contenteditable="false" class="font-weight-bold" id="editable_position4">Co-founder and Former Chairman</h5>
                            <h5 contenteditable="false" id="editable_company4">SolarCity (subsidiary of Tesla Inc.).</h5>
                            <span contenteditable="false" class="font-italic teal" id="editable_date4">2004 - Present San Mateo, USA</span>
                            <span contenteditable="false" class="font-italic teal">Accomplishments</span>
                            <ul contenteditable="false" id ="editable_jobdesc4">
                                <li contenteditable="false">Merged the company with Tesla Inc. and now offers energy storage services through Tesla, including a turnakey residential battery backup service that incorporates Tesla's Powerwall.</li>
                                <li contenteditable="false">In 2015, installed 870MW of solar power, approximately 28% of non-utility solar installation in U.S that year.</li>
                            </ul>
                        </div>
                        <div>
                            <h5 contenteditable="false" class="font-weight-bold" id="editable_position5">Founder & CEO</h5>
                            <h5 contenteditable="false" id="editable_company5">Neurolink</h5>
                            <span contenteditable="false" class="font-italic teal" id="editable_date5">07/2016 - Present San Francisco, USA</span>
                            <span contenteditable="false" class="font-italic teal">Accomplishments</span>
                            <ul contenteditable="false" id ="editable_jobdesc5">
                                <li contenteditable="false">A company aims to make devices to treat serious brain diseases in the short-term, with the eventual goal of human enhancement.</li>
                            </ul>
                        </div>
                        <div style="display: none;" id="addDevWork">
                            <p>Click to add more<i><i class="fas fa-plus-square"></i></i></p>    
                        </div>
                    </div>
                    <div class="col-md-6">
                        
                        <div class="skill">
                            <h1 class="titles text-uppercase" id="devSkill">Skills & Competence</h1>
                            <span contenteditable="false" class="badge badge backgroundTeal margin1" id="editable_skillset0">Thinking trought first principles</span>
                            <span contenteditable="false" class="badge badge backgroundTeal margin1" id="editable_skillset1">Marketing</span>
                            <span contenteditable="false" class="badge badge backgroundTeal margin1" id="editable_skillset2">Micromanagement</span>
                            <span contenteditable="false" class="badge badge backgroundTeal margin1" id="editable_skillset3">Goal oriented</span>
                            <span contenteditable="false" class="badge badge backgroundTeal margin1" id="editable_skillset4">Resiliency</span>
                            <span contenteditable="false" class="badge badge backgroundTeal margin1" id="editable_skillset5">Future focused</span>
                            <span contenteditable="false" class="badge badge backgroundTeal margin1" id="editable_skillset6">Leadership</span>
                            <span contenteditable="false" class="badge badge backgroundTeal margin1" id="editable_skillset7">Creativity</span>
                            <span contenteditable="false" class="badge badge backgroundTeal margin1" id="editable_skillset8">Time Management</span>
                            <span contenteditable="false" class="badge badge backgroundTeal margin1" id="editable_skillset9">Persistence</span>
                            <span contenteditable="false" class="badge badge backgroundTeal margin1" id="editable_skillset10">Turning ideas into companies</span>
                            <span contenteditable="false" class="badge badge backgroundTeal margin1" id="editable_skillset11">Long-term thinking</span>
                            <div style="display: none;" id="addDevSkill">
                            <p>Click to add more<i><i class="fas fa-plus-square"></i></i></p>    
                        </div>
                        </div>
                        
                        <div>
                            <h1 contenteditable="false" class="text-uppercase titles font-weight-bold" id="devEdu">Achievements & Certificates</h1>
                            <p contenteditable="false" id="editable_certificate0">53rd Richest person in the world - Forbes (2018) </p>
                            <p contenteditable="false" id="editable_certificate1">21st on the Forbes list of The World's Most Powerful People (2016)</p>
                            <span contenteditable="false" id="editable_certificate2">IEEE Honorary Membership (2015)</span> <br>
                            <span contenteditable="false" class="font-italic grey" id="editable_certdesc0">Given to people who have rendered meritorious service to humanity in the IEEE's designated fields of interest.</span> <br>
                            <p contenteditable="false" id="editable_certificate3">Businessperson of The Year by Fortune Magazine (2013)</p>
                            <span contenteditable="false" id="editable_certificate4">FAI Gold Space Medal (2010)</span> <br>
                            <span contenteditable="false" class="font-italic grey" id="editable_certdesc1">One of the highest honors in the aerospace industry shared with prominent personalities like Neli Armstrong and John Glenn.</span> <br>
                            <p contenteditable="false" id="editable_certificate5">Honorary Doctorate in Design from the Art Center College of Design</p>
                            <p contenteditable="false" id="editable_certificate6">Honorary Doctorate (DUniv) in Aerospace Engeneering from the University of Surrey</p>
                            <p contenteditable="false" id="editable_certificate7">Honorary Doctorate of Engineering and Technology from Yale University</p>
                            <div style="display: none;" id="addDevAch">
                            <p>Click to add more<i><i class="fas fa-plus-square"></i></i></p>    
                        </div>
                            
                        </div>
                        
                        <div class="row">
                            <h1 contenteditable="false" class="titles" id="devInt">INTEREST</h1>
                            <div class="col-md-6 small">
                                <div contenteditable="false">
                                <i contenteditable="false" class="fas fa-atom teal" id="editable_skilli1"> </i>
                                <h5 contenteditable="false" id="editable_skill1" class="editable_skill margin1"> Physics</h5>
                                </div>
                                <div contenteditable="false">
                                <i contenteditable="false" class="fas fa-mountain teal" id="editable_skilli2"></i>
                                <h5 contenteditable="false" id="editable_skill2" class="editable_skill margin1"> Sustainability</h5>
                                </div>
                                <div>
                                <i contenteditable="false" id="editable_skilli3" class="fas fa-globe-europe teal"></i>
                                <h5 contenteditable="false" class="editable_skill margin1" id="editable_skill3">  Philanthrophy </h5>
                                </div>
                                <div contenteditable="false">
                                <i contenteditable="false" class="fab fa-twitter teal" id="editable_skilli4"></i>
                                <h5 contenteditable="false" id="editable_skill4" class="editable_skill margin1" >Twitter</h5>
                                </div>
                                <div contenteditable="false">
                                <i contenteditable="false" class="fas fa-satellite teal" id="editable_skilli5" ></i>
                                <h5 contenteditable="false" id="editable_skill5" class="editable_skill margin1"> Extraterrestrial Life</h5>
                                </div>
                            </div>
                            <div class="col-md-6 small">
                               <div contenteditable="false">
                               <i contenteditable="false" class="fas fa-solar-panel teal" id="editable_skilli6"></i>
                               <h5 contenteditable="false" class="editable_skill"  id="editable_skill6"> Alternative Energy</h5>
                               </div>
                                <div contenteditable="false">
                                <i contenteditable="false" class="fas fa-rocket teal" id="editable_skilli7"></i>
                                <h5 contenteditable="false" class="editable_skill"  id="editable_skill7"> Space Engineering</h5>
                                </div>
                                <div contenteditable="false">
                                <i contenteditable="false" class="fas fa-book teal" id="editable_skilli8"></i>
                                <h5 contenteditable="false" class="editable_skill"  id="editable_skill8"> Reading</h5>
                                </div>
                                <div contenteditable="false">
                                <i contenteditable="false" class="fas fa-gamepad teal" id="editable_skilli9"></i>
                                <h5 contenteditable="false" class="editable_skill"  id="editable_skill9"> Video Games</h5>
                                </div>
                                <div contenteditable="false">
                                <i contenteditable="false" class="fas fa-brain teal" id="editable_skilli10"></i>
                                <h5 contenteditable="false" class="editable_skill"  id="editable_skill10"> AI</h5>
                                </div>
                            </div>
                            <div style="display: none;" id="addDevInt">
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
            <div id="devsuggestions">

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
