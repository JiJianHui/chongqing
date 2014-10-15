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
        <div id="headerImg" class="width">企业技术难题数据库</div>
        <div id="menu" class="width">   
            <?php 
            chdir( dirname(__FILE__) );
            require( '../layout/menu.php' );
            ?>
        </div>
        <div id="content" class="width">

        Statistics by problem category<br/>
        <?php 
            $i = 0;
            while($i < count($statistics['pCategories'])) {
                $pCate = $statistics['pCategories'][$i];
                echo $pCate."\xA";
                
                $j = 0;
                while($j < count($statistics['pByCategory'][$i])) {
                    $pBC = $statistics['pByCategory'][$i][$j];
                    echo $pBC->pID.'   '.$pBC->eName.'  '.$pBC->pDescription."\xA";
                    $j = $j + 1;
                } 
                $i = $i + 1;
            }
        ?>
        
        Statistics by contact name<br/>
        <?php 
            $i = 0;
            while($i < count($statistics['cNames'])) {
                $pCate = $statistics['cNames'][$i];
                echo $pCate.'<br/>';
                
                $j = 0;
                while($j < count($statistics['pByCName'][$i])) {
                    $pBC = $statistics['pByCName'][$i][$j];
                    echo $pBC->pID.'   '.$pBC->eName.'  '.$pBC->pDescription.'<br/>';
                    $j = $j + 1;
                } 
                $i = $i + 1;
            }
        ?>        
        
        Statistics by enterprise category<br/>   
        <?php 
            $i = 0;
            while($i < count($statistics['eCategories'])) {
                $pCate = $statistics['eCategories'][$i];
                echo $pCate."\xA";
                
                $j = 0;
                while($j < count($statistics['pByECategory'][$i])) {
                    $pBC = $statistics['pByECategory'][$i][$j];
                    echo $pBC->pID.'   '.$pBC->eName.'  '.$pBC->pDescription."\xA";
                    $j = $j + 1;
                } 
                $i = $i + 1;
            }
        ?>
        
        </div>
        <div id="footer" class="width">
            
        </div>
    </body>
</html>
