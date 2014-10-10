<!DOCTYPE html>
<!--
这个是通用的网页模板，需要注意。该模板定义了一个完整的网页需要包含的部分。
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
	<script src="./www/js/jquery1.83.js"></script>
        
        <script type="text/javascript">
            $(document).ready(function() {
              $("#header").load("./application/views/www/layout/header.html");
              $("#menu").load("./application/views/www/layout/menu.html");
//              $("#content").load("./application/views/www/page/loginContent.php");
              $("#footer").load("./application/views/www/layout/footer.html");
            });
        </script>
        
        <link rel="stylesheet" type="text/css" href="./www/css/layout.css" media="screen, projection, tv " />
        <link rel="stylesheet" type="text/css" href="./www/css/html.css" media="screen, projection, tv " />
        <link rel="stylesheet" type="text/css" href="./www/css/index.css" media="screen, projection, tv " />
        <link href="./www/css/bootstrap.css" rel="stylesheet" type="text/css" />
        
        <style type="text/css">
        <!--
        .style2 {color: #627E9A}
        .style3 {color: #62CC3C}
        .style6 {color: #5C8096}
        -->
          </style>
          
    </head>
    
    <body>
        <div id="header" class="width"></div>
        <div id="headerImg" class="width">公司技术信息后台管理系统</div>
        <div id="menu" class="width"></div>
        <div id="content" class="width">
            
            <div class="loginLines">

            <!--<form id="loginForm" action="logincontroller.php/LoginController/login" method="post" class="form-horizontal">-->

            <?php 
            $attributes = array('class' => 'form-horizontal', 'id' => 'loginForm');
            echo form_open('logincontroller/login', $attributes); 
            ?>
                <input type = "hidden" name = "submited" value = "true"/>
                <div class="updateLine loginTitle text">
                    请首先登录后台信息管理系统...
                </div>

                <div class="updateLine">
                    <span class="text">邮箱：<span class="warning warningNickName" id="warningEmail">*</span></span>
                    <input type="text" name="username" id="loginEmail" class="form-control input" placeholder="输入邮箱" />
                </div>

                <div class="updateLine">
                    <span class="text">密码：<span class="warning old_password_msg input_msg" id="warningPassword">*</span></span>
                    <input type="password" class="form-control old_password input" id="loginPassword" placeholder="输入密码" name='user.password'>
                </div>

                <div class="updateLine" style="margin-top: 25px; ">
                    <input type="submit" class="btn btn-primary btn-success" id="lgbtn" value="登陆" onclick="return checkLoginForm()"/>
                </div>

            <!--</form>-->
            <?php echo form_close(); ?>

        </div>
            
        </div>
        <div id="footer" class="width"></div>
    </body>
    
    
    <script type="text/javascript">

    function checkLoginForm() {
//        return checkLoginEmail() && checkLoginPwd();
        return true;
    }

    function checkLoginEmail() {

        if ($("#loginEmail").attr('value') != "") {
            var pattern = /^(?:[a-z\d]+[_\-\+\.]?)*[a-z\d]+@(?:([a-z\d]+\-?)*[a-z\d]+\.)+([a-z]{2,})+$/i;
            var email = $("#loginEmail").val();
            if (!pattern.test(email)) {
                $("#warningEmail").text("电子邮件格式错误！");
                return false;
            }
        } else {
            $("#warningEmail").text("电子邮件不能为空！");
            return false;
        }
        $("#warningEmail").text("");
        return true;
    }

    function checkLoginPwd() {
        if ($("#loginPassword").val() == "") {
            $("#warningPassword").text("密码不能为空！");
            return false;
        }
        $("#warningPassword").text("");
        return true;
    }

</script>
    
</html>
