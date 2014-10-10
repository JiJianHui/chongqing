<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php echo form_open('problemcontroller/modifyProblem'); ?>
        <input type="hidden" name="pID" value="<?php echo $records[0]->pID ?>"/>
        <fieldset>
             <legend>企业基本信息</legend>
             <label>企业名称：<input type = "text" name = "eName" value="<?php echo $records[0]->eName ?>"></label><br/>
             <label>行业：<input type = "text" name = "eCategory" value="<?php echo $records[0]->eCategory ?>"></label><br/>
             <label>地址：<input type = "text" name = "eAddress" value="<?php echo $records[0]->eAddress ?>"></label><br/>
             <label>邮编：<input type = "text" name = "ePostCode" value="<?php echo $records[0]->ePostCode ?>"></label><br/>
             <label>联系人：<input type = "text" name = "contact" value="<?php echo $records[0]->contact ?>"></label><br/>
             <label>手机：<input type = "text" name = "mobilePhone" value="<?php echo $records[0]->mobilePhone ?>"></label><br/>
             <label>座机：<input type = "text" name = "telePhone" value="<?php echo $records[0]->telePhone ?>"></label><br/>
             <label>传真：<input type = "text" name = "faxNumber" value="<?php echo $records[0]->faxNumber ?>"></label><br/>
             <label>E-mail：<input type = "text" name = "eMail" value="<?php echo $records[0]->eMail ?>"></label><br/>
             <label>QQ：<input type = "text" name = "qq" value="<?php echo $records[0]->qq ?>"></label><br/>
             <label>企业主要产品：<input type = "text" name = "mainProducts" value="<?php echo $records[0]->mainProducts ?>"></label><br/>

             <legend>技术难题情况</legend>
             <label>技术难题名称：<input type = "text" name = "pName" value="<?php echo $records[0]->pName ?>"></label><br/>
             <label>所属领域：<input type = "text" name = "pCategory" value="<?php echo $records[0]->pCategory ?>"> </label><br/>
             <label>负责人：<input type = "text" name = "contactName" value="<?php echo $records[0]->contactName ?>"></label><br/>
             <label>传真：<input type = "text" name = "pFaxNumber" value="<?php echo $records[0]->pFaxNumber ?>"></label><br/>
             <label>技术难题背景：<input type = "text" name = "bgDescription" value="<?php echo $records[0]->bgDescription ?>"></label><br/>
             <label>技术难题问题描述：<input type = "text" name = "pDescription" value="<?php echo $records[0]->pDescription ?>"></label><br/>
                                       
      </fieldset>
      
      <br/>
      
      <input type = "submit" value = "确定"/>
<?php echo form_close(); ?>
</body>
</html>