<!DOCTYPE html>
<!--
这个是通用的网页模板，需要注意。该模板定义了一个完整的网页需要包含的部分。
-->
<html>
    <head>
        <title>Template</title>

        
        <script type="text/javascript">
            $(document).ready(function() {
//              $("#header").load("./application/views/www/layout/header.html");
              $("#menu").load("/ims_php_pure/application/views/www/layout/menu.html");
              $("#footer").load("/ims_php_pure/application/views/www/layout/footer.html");
            });
        </script>
        
        <?php include '/ims_php_pure/application/views/www/layout/includeForLayout.php';?>
    </head>
    
    <body>
        <!--<div id="header" class="width"></div>-->
        <div id="headerImg" class="width">公司技术信息后台管理系统</div>
        <div id="menu" class="width"></div>
        <div id="content"></div>
        <div id="footer"></div>
    </body>
    
</html>
