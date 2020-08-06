    <!DOCTYPE html>
    <html lang="en">

         <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>Project01</title>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    
                <link rel="stylesheet" href="style.css">
                <link rel="stylesheet" media="screen and (min-width: 768px)" href="style/mobile.css">
                <link rel="stylesheet" media="screen and (max-width: 768px)" href="style/mobile.css">
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
                integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        </head>

        <body>
            <div class="container-fluid">
                <div class="row navigation">
                    <div class="col-sm-12">
                        <div class="row rowAlign">
                            <div class="col-xs-1">
                                <a href="index.php"><img class="logo logoSm" src="pic/logo.png"></a>
                            </div>
                            <div class="col-md-8 col-sm-1 visibilityShow paddingTop2 ">
                                <ul class="navList">
                                    <li class="col-md-3"><a href="https://marketpreneurs.brainster.co/">Академија за маркетинг</a></li>
                                    <li class="col-md-3" ><a href="http://codepreneurs.co/">Академија за програмирање</a></li>
                                    <li class="col-md-3" ><a href="https://datascience.brainster.co/">Академија за data science</a></li>
                                     <li class="col-md-3" ><a href="https://design.brainster.co/">Академија за дизајн</a></li>
                                </ul>
                            </div>
                            <div class="col-md-1 col-xs-1 visibilityShow paddingTop2">
                                <button class="btn btn-danger navButton"><a class="textWhite" href="contact/contact.php">Вработи наш студент</a></button>
                            </div>
                            <div class="col-xs-1 visibilityHidden">
                                <div onclick="showSidebar()" class="toggle-nav">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>

                                <div class="sidebar">
                                    <a onclick="closeSidebar()"><i class="fa fa-times"></i></a>
                                     <a href="https://www.brainster.io/marketpreneurs">Академија за маркетинг</a>
                                    <a href="http://codepreneurs.co/">Академија за програмирање</a>
                                     <a href="">Академија за дата сајенс</a>
                                    <a href="https://www.brainster.io/design">Академија за дизајн</a>
                                    <a class="textWhite btn btn-danger btn-xs col-xs-offset-1" href="contact/contact.php">Вработи наш студент</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="text-center flexColumn bgImg col-sm-12">
                        <h1 class="col-sm-12 textWhite bold ">Brainster Labs</h1>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
            <div class="row">
                <ul id = "mobileColumn"class="projects-nav textResponsive">
                    <li onclick="setActive('marketing')" class="active textResponsive col-md-4">Проекти на студенти од академијата<br /> за маркетинг<i
                    class="fa fa-check-circle"></i></li>
                    <li class="col-md-4 textResponsive" onclick="setActive('development')">Проекти на студенти од академијата<br /> за програмирање<i
                    class="fa fa-check-circle"></i></li>
                    <li class="col-md-4 textResponsive" onclick="setActive('design')">Проекти на студенти од академијата<br /> за дизајн<i
                    class="fa fa-check-circle"></i></li>
                </ul>
            </div>
            </div>
             <div class="container-fluid"> 
            <div class=" col-md-10 col-md-offset-1">
                <div class="col-md-12 marginTB3 flexRow">
                    <h1 class="bold">Проекти</h1>
                </div>
                <div class="cards-container">
                    <div class="col-md-4 card-holder designer">
                        <div class="card">
                                <img class="cardImg"
                                src="pic/design1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <span class="margin1 bgYellow padding2">Академија за дизајн</span>
                                <h4 class="card-title bold margin1">Име на проектот стои овде во две линии</h4>
                                <p class="card-text margin1">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот </p>
                                <p class="bold margin1 date">Април-Октомври 2019</p>
                                <div class="flexRight">
                                <a href="#" class="btn btn-danger ">Дознај повеќе</a>
                                </div>  
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 card-holder designer">
                            <div class="card">
                                    <img class="cardImg"
                                    src="pic/design2.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <span class="margin1 bgYellow padding2">Академија за дизајн</span>
                                    <h4 class="card-title bold margin1">Име на проектот стои овде во две линии</h4>
                                    <p class="card-text margin1">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот </p>
                                    <p class="bold margin1 date">Април-Октомври 2019</p>
                                    <div class="flexRight">
                                    <a href="#" class="btn btn-danger ">Дознај повеќе</a>
                                    </div>  
                                </div>
                            </div>
                    </div>
                    <div class="col-md-4 card-holder designer">
                        <div class="card">
                            <img class="cardImg"
                                        src="pic/design3.jpg" alt="Card image cap">
                            <div class="card-body">
                                <span class="margin1 bgYellow padding2">Академија за дизајн</span>
                                <h4 class="card-title bold margin1">Име на проектот стои овде во две линии</h4>
                                <p class="card-text margin1">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот </p>
                                <p class="bold margin1 date">Април-Октомври 2019</p>
                                <div class="flexRight">
                                <a href="#" class="btn btn-danger ">Дознај повеќе</a>
                                </div>  
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 card-holder designer">
                        <div class="card">
                            <img class="cardImg"
                                            src="pic/design4.jpg" alt="Card image cap">
                            <div class="card-body">
                                <span class="margin1 bgYellow padding2">Академија за дизајн</span>
                                <h4 class="card-title bold margin1">Име на проектот стои овде во две линии</h4>
                                <p class="card-text margin1">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот </p>
                                <p class="bold margin1 date">Април-Октомври 2019</p>
                                <div class="flexRight">
                                <a href="#" class="btn btn-danger ">Дознај повеќе</a>
                                </div>  
                            </div>
                        </div>
                    </div>

              
                     <div class="col-md-4 card-holder developer">
                        <div class="card">
                                <img class="cardImg"
                                                src="pic/development1.jpg" alt="Card image cap">
                            <div class="card-body">
                                    <span class="margin1 bgYellow padding2">Академија за програмирање</span>
                                    <h4 class="card-title bold margin1">Име на проектот стои овде во две линии</h4>
                                    <p class="card-text margin1">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот </p>
                                    <p class="bold margin1 date">Април-Октомври 2019</p>
                                <div class="flexRight">
                                <a href="#" class="btn btn-danger ">Дознај повеќе</a>
                                </div>  
                            </div>
                        </div>
                    </div>

                
                        <div class="col-md-4 card-holder developer">
                            <div class="card">
                                <img class="cardImg"
                                                src="pic/development2.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <span class="margin1 bgYellow padding2">Академија за програмирање</span>
                                    <h4 class="card-title bold margin1">Име на проектот стои овде во две линии</h4>
                                    <p class="card-text margin1">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот </p>
                                    <p class="bold margin1 date">Април-Октомври 2019</p>
                                    <div class="flexRight">
                                        <a href="#" class="btn btn-danger ">Дознај повеќе</a>
                                    </div>  
                                </div>
                            </div>
                        </div>
               
                        <div class="col-md-4 card-holder developer">
                            <div class="card">
                                <img class="cardImg"
                                                src="pic/development3.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <span class="margin1 bgYellow padding2">Академија за програмирање</span>
                                    <h4 class="card-title bold margin1">Име на проектот стои овде во две линии</h4>
                                    <p class="card-text margin1">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот </p>
                                    <p class="bold margin1 date">Април-Октомври 2019</p>
                                    <div class="flexRight">
                                    <a href="#" class="btn btn-danger ">Дознај повеќе</a>
                                    </div>  
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 card-holder developer">
                            <div class="card">
                                <img class="cardImg"
                                                src="pic/development4.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <span class="margin1 bgYellow padding2">Академија за програмирање</span>
                                    <h4 class="card-title bold margin1">Име на проектот стои овде во две линии</h4>
                                    <p class="card-text margin1">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот </p>
                                    <p class="bold margin1 date">Април-Октомври 2019</p>
                                    <div class="flexRight">
                                    <a href="#" class="btn btn-danger ">Дознај повеќе</a>
                                     </div>  
                                </div>
                            </div>
                        </div>

                
                        <div class="col-md-4 card-holder developer">
                            <div class="card">
                                <img class="cardImg"
                                                src="pic/development5.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <span class="margin1 bgYellow padding2">Академија за програмирање</span>
                                    <h4 class="card-title bold margin1">Име на проектот стои овде во две линии</h4>
                                    <p class="card-text margin1">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот </p>
                                    <p class="bold margin1 date">Април-Октомври 2019</p>
                                <div class="flexRight">
                                <a href="#" class="btn btn-danger ">Дознај повеќе</a>
                                </div>  
                            </div>
                        </div>
                    </div>

                        <div class="col-md-4 card-holder developer">
                            <div class="card">
                                <img class="cardImg"
                                                src="pic/development6.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <span class="margin1 bgYellow padding2">Академија за програмирање</span>
                                    <h4 class="card-title bold margin1">Име на проектот стои овде во две линии</h4>
                                    <p class="card-text margin1">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот </p>
                                    <p class="bold margin1 date">Април-Октомври 2019</p>
                                <div class="flexRight">
                                <a href="#" class="btn btn-danger ">Дознај повеќе</a>
                                </div>  
                            </div>
                        </div>
                    </div>

                        <div class="col-md-4 card-holder developer">
                            <div class="card">
                                <img class="cardImg"
                                                src="pic/development7.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <span class="margin1 bgYellow padding2">Академија за програмирање</span>
                                    <h4 class="card-title bold margin1">Име на проектот стои овде во две линии</h4>
                                    <p class="card-text margin1">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот </p>
                                    <p class="bold margin1 date">Април-Октомври 2019</p>
                                <div class="flexRight">
                                <a href="#" class="btn btn-danger ">Дознај повеќе</a>
                                </div>  
                            </div>
                        </div>
                     </div>

        
                        <div class="col-md-4 card-holder developer">
                            <div class="card">
                                <img class="cardImg"
                                                src="pic/development8.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <span class="margin1 bgYellow padding2">Академија за програмирање</span>
                                    <h4 class="card-title bold margin1">Име на проектот стои овде во две линии</h4>
                                    <p class="card-text margin1">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот </p>
                                    <p class="bold margin1 date">Април-Октомври 2019</p>
                                <div class="flexRight">
                                <a href="#" class="btn btn-danger ">Дознај повеќе</a>
                                </div>  
                            </div>
                        </div>
                    </div>

                        <div class="col-md-4 card-holder developer">
                            <div class="card">
                                <img class="cardImg"
                                                src="pic/development9.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <span class="margin1 bgYellow padding2">Академија за програмирање</span>
                                    <h4 class="card-title bold margin1">Име на проектот стои овде во две линии</h4>
                                    <p class="card-text margin1">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот </p>
                                    <p class="bold margin1 date">Април-Октомври 2019</p>
                                <div class="flexRight">
                                <a href="#" class="btn btn-danger ">Дознај повеќе</a>
                                </div>  
                            </div>
                        </div>
                    </div>

                        <div class="col-md-4 card-holder developer">
                            <div class="card">
                                <img class="cardImg"
                                                src="pic/development10.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <span class="margin1 bgYellow padding2">Академија за програмирање</span>
                                    <h4 class="card-title bold margin1">Име на проектот стои овде во две линии</h4>
                                    <p class="card-text margin1">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот </p>
                                    <p class="bold margin1 date">Април-Октомври 2019</p>
                                <div class="flexRight">
                                <a href="#" class="btn btn-danger ">Дознај повеќе</a>
                                </div>  
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 card-holder marketing">
                            <div class="card">
                                <img class="cardImg"
                                                src="pic/marketing1.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <span class="margin1 bgYellow padding2">Академија за маркетинг</span>
                                    <h4 class="card-title bold margin1">Име на проектот стои овде во две линии</h4>
                                    <p class="card-text margin1">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот </p>
                                    <p class="bold margin1 date">Април-Октомври 2019</p>
                                <div class="flexRight">
                                <a href="#" class="btn btn-danger ">Дознај повеќе</a>
                                </div>  
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 card-holder marketing">
                            <div class="card">
                                <img class="cardImg"
                                                src="pic/marketing2.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <span class="margin1 bgYellow padding2">Академија за маркетинг</span>
                                    <h4 class="card-title bold margin1">Име на проектот стои овде во две линии</h4>
                                    <p class="card-text margin1">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот </p>
                                    <p class="bold margin1 date">Април-Октомври 2019</p>
                                <div class="flexRight">
                                <a href="#" class="btn btn-danger ">Дознај повеќе</a>
                                </div>  
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 card-holder marketing">
                            <div class="card">
                                <img class="cardImg"
                                                src="pic/marketing3.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <span class="margin1 bgYellow padding2">Академија за маркетинг</span>
                                    <h4 class="card-title bold margin1">Име на проектот стои овде во две линии</h4>
                                    <p class="card-text margin1">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот </p>
                                    <p class="bold margin1 date">Април-Октомври 2019</p>
                                <div class="flexRight">
                                <a href="#" class="btn btn-danger ">Дознај повеќе</a>
                                </div>  
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 card-holder marketing">
                            <div class="card">
                                <img class="cardImg"
                                                src="pic/marketing4.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <span class="margin1 bgYellow padding2">Академија за маркетинг</span>
                                    <h4 class="card-title bold margin1">Име на проектот стои овде во две линии</h4>
                                    <p class="card-text margin1">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот </p>
                                    <p class="bold margin1 date">Април-Октомври 2019</p>
                                <div class="flexRight">
                                <a href="#" class="btn btn-danger ">Дознај повеќе</a>
                                </div>  
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 card-holder marketing">
                            <div class="card">
                                <img class="cardImg"
                                                src="pic/marketing5.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <span class="margin1 bgYellow padding2">Академија за маркетинг</span>
                                    <h4 class="card-title bold margin1">Име на проектот стои овде во две линии</h4>
                                    <p class="card-text margin1">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот </p>
                                    <p class="bold margin1 date">Април-Октомври 2019</p>
                                <div class="flexRight">
                                <a href="#" class="btn btn-danger ">Дознај повеќе</a>
                                </div>  
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 card-holder marketing">
                            <div class="card">
                                <img class="cardImg"
                                                src="pic/marketing6.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <span class="margin1 bgYellow padding2">Академија за маркетинг</span>
                                    <h4 class="card-title bold margin1">Име на проектот стои овде во две линии</h4>
                                    <p class="card-text margin1">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот </p>
                                    <p class="bold margin1 date">Април-Октомври 2019</p>
                                <div class="flexRight">
                                <a href="#" class="btn btn-danger ">Дознај повеќе</a>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
   
            <div class="container-fluid bgDarkGrey height">
                <div class="row flexColumn text-center textWhite height10vh">
                   <p>Изработено од  <span style="font-size:150%;color:red;">&hearts;</span> од студентите на Brainster</p>
                   </div>
             </div>


            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
            <script src="js/main.js"></script>
        </body>
    

    </html>