<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>

<?php echo form_open('logincontroller/login'); ?>
      <input type = "hidden" name = "submited" value = "true"/>
      
      <fieldset>
             <legend>登陆</legend>
             <label>用户名：<input type = "text" name = "username"></label>
             <label>密码：<input type = "text" name = "password"></label>
      </fieldset>
      
      <br/>
      
      <input type = "submit" value = "确定"/>
<?php echo form_close(); ?>

</body>
</html>