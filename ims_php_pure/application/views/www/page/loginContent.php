

<div class="loginLines">

    <!--<form id="loginForm" action="logincontroller.php/LoginController/login" method="post" class="form-horizontal">-->
    $attributes = array('class' => 'form-horizontal', 'id' => 'loginForm');

    <?php echo form_open('logincontroller/login', $attributes); ?>
        <input type = "hidden" name = "submited" value = "true"/>
        <div class="updateLine loginTitle text">
            请首先登录后台信息管理系统...
        </div>
        
        <div class="updateLine">
            <span class="text">邮箱：<span class="warning warningNickName" id="warningEmail">*</span></span>
            <input type="text" name="user.email" id="loginEmail" class="form-control input" placeholder="输入邮箱" />
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