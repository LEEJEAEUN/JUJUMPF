<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width" intial-scale="1">
        <!--스타일 시트 참조 / css폴더의 bootstrap.css참조-->

<title> PHP 게시판 웹 사이트 </title>
<link rel="stylesheet" href="./css/bootstrap.css">
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.1/js/bootstrap.min.js"></script>
<script src="./LEE/js/jquery-migrate-main/login.js"></script>
<!--js파일에 login.js파일을 참조한다.-->
</head>

<body>

    <!--표준 네비게이션 바 (회면상단에 위치, 회면에 의존하여 확대 및 축소)-->
    <nav class="navbar navbar-default">
    <div class="navbar-header">
    <!--Collapse : 제목을 클릭하면 해당내용이 펼쳐지고 다른내용은 접히는 특수효과 -->
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
     data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="main.php">PHP 게시판 웹 사이트</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="active"><a href="main.php">메인</a></li>
            <li><a href="list.php">게시판</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                aria-haspopup="true" aria-expanded="false">접속 하기<span class="caret"></span></a>
                <ul class="dropdown-menu">
                <li class="active"><a href="login.php">로그인</a></li>
                <li><a href="join.php">회원가입</a></li>
                </ul>
            </li>
        </ul>
    </div>
    </nav>
    <div class="container">
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
        <div class="jumbotron" style="padding-top: 20px;">

        <form name="loginSbmt" id="loginSbmt" method="post" action="login_ok.php">   
        <h3 style="text-align: center">로그인 화면</h3>
            <div class="col-lg-4"></div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="아이디"
                     name="id" maxlength="15">
            </div>

            <div class="form-group">
                <input type="password" class="form-control" placeholder="비밀번호"
                     name="pass" maxlength="20">
            </div>
        <!--name이 'id'인 아이디 정보와 name이 'pass'인 비밀번호 정보를 로그인버튼을 누르면 
        post방식으로 'login_ok.php'로 전송된다.-->

        <!--'login_ok.php'에서는 받아온 정보를 db의 정보와 일치하는지를 판단히여
        로그인을 할지 안할지 결정해주는 역할을 한다. -->
          
        <a href="#">
            <span class="btn btn-primary form-control"
                 onclick="check_input()">로그인</span></a>
        </form>
    </div>
    </div>
    </div>

</body>
</html>






