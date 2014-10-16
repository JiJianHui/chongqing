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
        <div id="headerImg" class="width"><span>企业技术难题数据库</span></div>
        <div id="menu" class="width">   
            <?php 
            chdir( dirname(__FILE__) );
            require( '../layout/menu.php' );
            ?>
        </div>
        <div id="content" class="width">

        按照问题所属领域进行统计<br/>
        <?php 
            $i = 0;
            while($i < count($statistics['pCategories'])) {
                $pCate = $statistics['pCategories'][$i];
                echo "问题所属领域 ".$pCate."<br/>";
                
                $j = 0;
                while($j < count($statistics['pByCategory'][$i])) {
                    $pBC = $statistics['pByCategory'][$i][$j];
                    echo "难题编号".$pBC->pID.'   企业名称'.$pBC->eName.'   问题描述'.$pBC->pDescription."<br/>";
                    $j = $j + 1;
                } 
                
                echo "<br/>";
                $i = $i + 1;
            }
        ?>
        
        按照联系人姓名进行统计<br/>
        <?php 
            $i = 0;
            while($i < count($statistics['cNames'])) {
                $pCate = $statistics['cNames'][$i];
                echo "联系人姓名".$pCate.'<br/>';
                
                $j = 0;
                while($j < count($statistics['pByCName'][$i])) {
                    $pBC = $statistics['pByCName'][$i][$j];
                    echo "难题编号".$pBC->pID.'   企业名称'.$pBC->eName.'   问题描述'.$pBC->pDescription."<br/>";
                    $j = $j + 1;
                } 
                
                echo "<br/>";
                $i = $i + 1;
            }
        ?>        
        
        按照企业类别进行统计<br/>   
        <?php 
            $i = 0;
            while($i < count($statistics['eCategories'])) {
                $pCate = $statistics['eCategories'][$i];
                echo "企业类别".$pCate."<br/>";
                
                $j = 0;
                while($j < count($statistics['pByECategory'][$i])) {
                    $pBC = $statistics['pByECategory'][$i][$j];
                    echo "难题编号".$pBC->pID.'   企业名称'.$pBC->eName.'   问题描述'.$pBC->pDescription."<br/>";
                    $j = $j + 1;
                } 
                
                echo "<br/>";
                $i = $i + 1;
            }
        ?>
        
        </div>
        <div id="footer" class="width">
            
        </div>
    </body>
</html>
