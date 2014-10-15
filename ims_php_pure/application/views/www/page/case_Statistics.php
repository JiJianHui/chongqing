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

        Statistics by enterprise category<br/>
        <?php 
            $i = 0;
            echo count($statistics['eCategories']);
            while($i < count($statistics['eCategories'])) {
                $pCate = $statistics['eCategories'][$i];
                echo $pCate."\xA";
                
                $j = 0;
                while($j < count($statistics['cByCategory'][$i])) {
                    $pBC = $statistics['cByCategory'][$i][$j];
                    echo $pBC->cID.'   '.$pBC->title.'  '.$pBC->description."\xA";
                    $j = $j + 1;
                } 
                $i = $i + 1;
            }
        ?>
        
        Statistics by contact name<br/>
        <?php 
            $i = 0;
            while($i < count($statistics['eContact'])) {
                $pCate = $statistics['eContact'][$i];
                echo $pCate.'<br/>';
                
                $j = 0;
                while($j < count($statistics['cByEContact'][$i])) {
                    $pBC = $statistics['cByEContact'][$i][$j];
                    echo $pBC->cID.'   '.$pBC->title.'  '.$pBC->description."\xA";
                }
                
                $i = $i + 1;
            }
        ?>        
        
        </div>
        <div id="footer" class="width">
            
        </div>
    </body>
</html>
