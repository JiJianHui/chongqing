<!DOCTYPE html>
<!--
这个是通用的网页模板，需要注意。该模板定义了一个完整的网页需要包含的部分。
-->
<html>
    <head>
        <title>技术难题</title>

        <meta charset="UTF-8">
        <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">Modified-->
	<script src="<?php echo base_url()?>www/js/jquery1.83.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>www/css/layout.css" media="screen, projection, tv " />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>www/css/html.css" media="screen, projection, tv " />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>www/css/index.css" media="screen, projection, tv " />
        <link href="<?php echo base_url()?>/www/css/bootstrap.css" rel="stylesheet" type="text/css" />
        
        <style type="text/css">
        <!--
        .style2 {color: #627E9A}
        .style3 {color: #62CC3C}
        .style6 {color: #5C8096}
        -->
          </style>
    </head>
    
    <body>
        <!--<div id="header" class="width"></div>-->
        <div id="headerImg" class="width">公司技术信息后台管理系统</div>
        <div id="menu" class="width">   
            <?php 
            chdir( dirname(__FILE__) );
            require( '../layout/menu.php' );
            ?>
        </div>
        <div id="content" class="width">

        按照公司进行统计<br/>
        <?php 
            $i = 0;
            while($i < count($statistics['companies'])) {
                $pCate = $statistics['companies'][$i];
                echo "公司名称 ".$pCate."<br/>";
                
                $j = 0;
                while($j < count($statistics['sByCompany'][$i])) {
                    $pBC = $statistics['sByCompany'][$i][$j];
                    echo "学生编号  ".$pBC->sID.'   学生姓名'.$pBC->sName.'   出生日期'.$pBC->birthday."<br/>";
                    $j = $j + 1;
                } 
                $i = $i + 1;
                
                echo "<br/>";
            }
        ?>
        
        按照部门进行统计<br/>
        <?php 
            $i = 0;
            while($i < count($statistics['departments'])) {
                $pCate = $statistics['departments'][$i];
                echo "部门  ".$pCate.'<br/>';
                
                $j = 0;
                while($j < count($statistics['sByDepartment'][$i])) {
                    $pBC = $statistics['sByDepartment'][$i][$j];
                    echo "学生编号  ".$pBC->sID.'   学生姓名'.$pBC->sName.'   出生日期'.$pBC->birthday."<br/>";
                    $j = $j + 1;
                } 
                $i = $i + 1;
                
                echo "<br/>";
            }
        ?>        
        
        </div>
        <div id="footer" class="width">
            
        </div>
    </body>
</html>
