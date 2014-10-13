<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php echo form_open('studentcontroller/addStudent'); ?>
      <fieldset>
             <legend>培训学员信息</legend>
             <label>姓名：<input type = "text" name = "sName"></label><br/>
             <label>性别：<input type = "text" name = "sSex"></label><br/>
             <label>参加工作时间：<input type = "text" name = "startWorkTime"></label><br/>
             <label>现从事专业：<input type = "text" name = "cMajor"></label><br/>
             <label>出生年月：<input type = "text" name = "birthday"></label><br/>
             <label>行政职务：<input type = "text" name = "eTitle"></label><br/>
             <label>工作单位：<input type = "text" name = "company"></label><br/>
             <label>所在部门：<input type = "text" name = "department"></label><br/>
             <label>办公联系电话：<input type = "text" name = "telePhone"></label><br/>
             <label>手机：<input type = "text" name = "mobilePhone"></label><br/>
             <label>单位传真：<input type = "text" name = "eMail"></label><br/>
             <label>E-mail/QQ：<input type = "text" name = "qq"></label><br/>
             <label>通讯地址：<input type = "text" name = "address"></label><br/>
             <label>学历：<input type = "text" name = "education"></label><br/>
             <label>毕业院校：<input type = "text" name = "graduateSchool"></label><br/>
             <label>专业：<input type = "text" name = "major"></label><br/>                                       
      </fieldset>
      
      <br/>
      
      <input type = "submit" value = "确定"/>
<?php echo form_close(); ?>
</body>
</html>