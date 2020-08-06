<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$db = "Project1";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db);




if($_SERVER["REQUEST_METHOD"] == "POST") {
    $employee_name = strtolower($_POST['name']);
    $company_name = strtolower($_POST['company']);
    $email = strtolower($_POST['email']);
    $number = $_POST['phone'];
    $academy = $_POST['academy'];
   
    $regex = "/^[^0-9][_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";

    if (!isset($employee_name) && empty($employee_name))  {
        echo "Ве молиме да го внесете вашето име, полето е задолжително";
    }
    if(!isset($company_name) && empty($company_name)) {
        echo "Ве молиме да го внесете името на Вашата компанија, полето е задолжително";
    }
    if(!isset($email) && empty($email) && !preg_match($regex, $email)) {
        echo "Ве молиме да ја внесете адресата на Вашата електронска пошта, полето е задолжително";
    }
    if(!isset($number) && empty($number) && !is_numeric($number)) {
        echo "Ве молиме да го внесете бројот за контакт, полето е задолжително";
    }
    if(!isset($academy) && empty($academy)) {
            echo "Ве молиме да изберете тип на студент, полето е задолжително";
        
    }
    
    

    $sql= " INSERT INTO company_info (employe_name, company_name, company_email, company_phone, students_academy) VALUES ('$employee_name', '$company_name', '$email', '$number', '$academy')";
    
    if (mysqli_query($conn, $sql)) {
        echo "Вашето барање е проследено";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
   

}   


$conn -> close();

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Contact</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" media="screen and (min-width: 768px)" href="../style/mobile.css">
        <link rel="stylesheet" media="screen and (max-width: 425px)" href="../style/mobile.css">
        <link rel="stylesheet" media="screen and (max-width: 768px)" href="../style/mobile.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-11">
                    <div class="row rowAlign">
                    <div class="col-xs-1">
                         <a href="../index.php"><img class="logo logoSm" src="../pic/logo.png"></a>
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
                        <button class="btn btn-danger navButton"><a class="textWhite" href="contact.php">Вработи наш студент</a></button>
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
                            <a class="textWhite btn btn-danger btn-xs col-xs-offset-1" href="contact.php">Вработи наш студент</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="borderHr">
        <h1 class="bold flexRow marginTB3">Вработи наши студенти</h1>
        <div class="container">
            <div class="row marginTop marginBottom">
            <form class="col-sm-10 col-sm-offset-1" method="POST" action="">
        
                <div class="row">
                    <div class="col-sm-6">
                        <label class="marginTop1" for="name">Име и презиме</label>
                        <input name="name" id="name" class="width100 marginbottom2 select" type="text" placeholder="Вашето име и презиме">
                    </div>
                    <div class="col-sm-6">
                        <label class="marginTop1" for="company">Име на компанија</label>
                        <input name="company" id="company" class="width100 marginbottom2" type="text" placeholder="Името на вашата компанија">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <label class="marginTop1" for="email">Контакт имејл</label>
                        <input name="email" id="email" class="width100 marginbottom2" type="email" placeholder="Контакт имејл на вашата компанија">
                    </div>
                    <div class="col-sm-6">
                        <label class="marginTop1" for="phone">Контакт телефон</label>
                        <input name="phone" id="phone" class="width100 marginbottom2" type="number" placeholder="Контакт телефон на вашата компанија">
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-sm-6">
                        <label class="marginTop1" for="student">Тип на студент</label>
                        <select name="academy" class="width100" id="student">
                            <option >Изберете тип на студент </option>
                            <option name="marketing" value="marketing">Студенти од маркетинг</option>
                            <option name="development" value="development">Студенти од програмирање</option>
                            <option name="data" value="data">Студенти од data science </option>
                            <option name="design" value="design">Студенти од дизајн</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-danger btn-block contactButton marginTop5">ИСПРАТИ</button>
                    </div>
                </div>
            </form>
            </div>
         </div>
    
        <div class="container-fluid bgDarkGrey height">
         <div class="row flexColumn text-center textWhite height10vh">
            <p>Изработено од  <span style="font-size:150%;color:red;">&hearts;</span> од студентите на Brainster</p>
            </div>
        </div>

    
    




        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="../js/main.js"></script> 
    </body>
</html>