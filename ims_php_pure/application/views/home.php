<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<fieldset>
     <legend>请选定要操作的数据库</legend>
     <a href = "<?php echo site_url('problemcontroller/getProblem') ?>"><label>技术问题</label></a>
     <a href = "<?php echo site_url('studentcontroller/getStudent') ?>"><label>创新人才</label></a>
     <a href = "<?php echo site_url('casecontroller/getCase') ?>"><label>创新案例</label></a>
</fieldset>
    
    <script type="text/javascript">
        window.location.href = <?php site_url('problemcontroller/getProblem') ?>
        window.location.reload();
    </script>
    
</body>
</html>