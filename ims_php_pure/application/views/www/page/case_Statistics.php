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

        按照企业领域进行统计<br/>
        <?php 
            $i = 0;
            while($i < count($statistics['eCategories'])) {
                echo $i."  <   ".count($statistics['eCategories']);
                $pCate = $statistics['eCategories'][$i];
                echo "企业领域  ".$pCate."<br/>";
                
                $j = 0;
                while($j < count($statistics['cByECategory'][$i])) {
                    $pBC = $statistics['cByECategory'][$i][$j];
                    echo "案例编号   ".$pBC->cID.'题目   '.$pBC->title.'描述   '.$pBC->description."<br/>";
                    $j = $j + 1;
                } 
                $i = $i + 1;
                echo "<br/>";
            }
        ?>
        
        按照联系人进行统计<br/>
        <?php 
            $i = 0;
            while($i < count($statistics['eContact'])) {
                $pCate = $statistics['eContact'][$i];
                echo "联系人  ".$pCate."<br/>";
                
                $j = 0;
                while($j < count($statistics['cByEContact'][$i])) {
                    $pBC = $statistics['cByEContact'][$i][$j];
                    echo "案例编号   ".$pBC->cID.'题目   '.$pBC->title.'描述   '.$pBC->description."<br/>";
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
