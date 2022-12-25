<!DOCTYPE html>
<?php 
    session_start(); 
    include('../php/db.php');

    if(!isset($_SESSION['isSuccessLogin'])){
        $_SESSION['isSuccessLogin'] = false;
    }
?>
<html>

<head>
    <title>Rental-Of-school-supplies</title>
    <link rel="stylesheet" href="../css/main.css" type="text/css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap');
    </style>
    <script src="../js/main.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="../jquery-fadethis-master/libs/jquery/jquery.js"></script>
    <script src="../jquery-fadethis-master/dist/jquery.fadethis.min.js"></script>

</head>

<body>
    <p class="main">충북대학교<span class="main_dep"> 소프트웨어학부</span></p>
    <div class="logo">
        <a href="main.php"><img src="../src/logo.PNG" alt="logo" height="120px"></a>
        <span class="title">학생회 <span>물품대여</span></span>
    </div>
    <div class="sub_title">
        <ul>
            <?php 
                if($_SESSION['isSuccessLogin']){ //로그인 성공시 -> 로그아웃 출현 
                    echo '<li><a href="../php/logout.php">log out</a></li> 
                            <li><a href="./mypage.php">my page</a></li>';
                }else{
                    echo '<li><a href="./singIn_Up.php">sign in / sign up</a></li>';
                }  
            ?>         
        </ul>
    </div>

    <nav class="navbar">
        <ul>
            <li><a href="product_list_All.php">물품 목록</a></li>
            <li><a href="product_req.php">물품 신청</a></li>
            <li><a href="location.php">찾아오시는 길</a></li>
            <li><a href="team_intro.php">팀 소개</a></li>
        </ul>
    </nav>

    <section class="main_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="intro-text">학부 생활 중
                        <span class="intro-color">
                            필요한 많은 물품들</span>
                            <br>하나하나 구비하기 어려우셨나요?</p>
                </div>
            </div>
        </div>
        <div class="main_rent">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <a class="rent-text">대여하기  >></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="main_item">
        <div class="container">
            <div class="row">
                <div class="col-xs-4"><img src="../src/umbrella.jpeg" alt="umbrella" class="item_image"></div>
                <div class="col-xs-4"><img src="../src/supplementaryBattery.jpeg" alt="bettery" class="item_image"></div>
                <div class="col-xs-4"><img src="../src/blanket.jpeg" alt="blanket" class="item_image"></div>
            </div>
        </div>
    </section>

    <section class="main_site">
        <div class="container" style="display: flex;">
            <div class="site-1">
                <img class="main_site_logo" src="../src/cbnulogo.png" alt="cbnulogo">
                <h3>관련 사이트</h3>
            </div>
            <div class="site-2">
                <ul class="site-name">
                    <li><a href="https://www.chungbuk.ac.kr/site/www/main.do" target="_blank" rel="noopener"><img src="../src/famlogo1.png" alt="충북대학교"></a></li>
                    <li><a href="https://eis.cbnu.ac.kr/cbnuLogin" target="_blank" rel="noopener"><img src="../src/famlogo2.png" alt="충북대학교 개신누리"></a></li>
                    <li><a href="https://cbnu.blackboard.com/" target="_blank" rel="noopener"><img src="../src/famlogo3.png" alt="충북대학교 이러닝시스템"></a></li>
                    <li><a href="https://cieat.cbnu.ac.kr/clientMain/a/t/main.do" target="_blank" rel="noopener"><img src="../src/famlogo4.png" alt="충북대학교 씨앗"></a></li>
                    <li><a href="https://ece.cbu.ac.kr/" target="_blank" rel="noopener"><img src="../src/famlogo5.png" alt="충북대학교 전자정보대학"></a></li>
                    <li><a href="https://sw7up.cbnu.ac.kr/home" target="_blank" rel="noopener"><img src="../src/famlogo6.png" alt="충북대학교 SW중심대학사업단"></a></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <h6>(Inc)3Idiots</h6>
                    <p class="text-justify">
                        Business registration number: 120-00-12345<br>
                        hosting services: 3Idiots Corporation | Student Council Rental Business Report Number:
                        1234-cbnu-56789<br>
                        28644 1, Chungdae-ro, Seowon-gu, Cheongju-si, Chungcheongbuk-do (S4-1, College of electrical and
                        computer engineering BID.3)<br>
                        Customer Service: 1, Chungdae-ro, Seowon-gu, Cheongju-si, Chungcheongbuk-do (S4-1, College of
                        electrical and computer engineering BID.3)</p>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2022 All Rights Reserved by.
                    </p>
                </div>
            </div>
        </div>
    </footer>
</body>