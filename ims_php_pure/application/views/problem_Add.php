<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php echo form_open('problemcontroller/addProblem'); ?>
      <fieldset>
             <legend>企业基本信息</legend>
             <label>企业名称：<input type = "text" name = "eName"></label><br/>
             <label>行业：<input type = "text" name = "eCategory"></label><br/>
             <label>地址：<input type = "text" name = "address"></label><br/>
             <label>邮编：<input type = "text" name = "postCode"></label><br/>
             <label>联系人：<input type = "text" name = "contact"></label><br/>
             <label>手机：<input type = "text" name = "mobilePhone"></label><br/>
             <label>座机：<input type = "text" name = "phone"></label><br/>
             <label>传真：<input type = "text" name = "faxNumber"></label><br/>
             <label>E-mail：<input type = "text" name = "eMail"></label><br/>
             <label>QQ：<input type = "text" name = "qq"></label><br/>
             <label>企业主要产品：<input type = "text" name = "mainProducts"></label><br/>

             <legend>技术难题情况</legend>
             <label>技术难题名称：<input type = "text" name = "pName"></label><br/>
             <label>所属领域：<input type = "text" name = "pCategory"></label><br/>
             <label>负责人：<input type = "text" name = "principal"></label><br/>
             <label>联系电话：<input type = "text" name = "phone2"></label><br/>
             <label>传真：<input type = "text" name = "faxNumber2"></label><br/>
             <label>技术难题背景：<input type = "text" name = "background"></label><br/>
             <label>技术难题问题描述：<input type = "text" name = "description"></label><br/>
                                       
      </fieldset>
      
      <br/>
      
      <input type = "submit" value = "确定"/>
<?php echo form_close(); ?>
</body>
</html>