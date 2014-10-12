<!DOCTYPE html>
<!--
这个是通用的网页模板，需要注意。该模板定义了一个完整的网页需要包含的部分。
-->
<html>
    <head>
        <title>技术难题</title>

        <meta charset="UTF-8">
        <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
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

            <?php 
            $attributes = array('class' => 'dd', 'id' => 'addNewProblemForm');
            echo form_open('problemcontroller/addProblem', $attributes); 
            ?>
            
            <div class="addNewProblemForm">
                <div class="info">
                    <div class="title">企业基本信息</div>
                    <div class="infoLine">
                        <span>企业名称：</span><input type = "text" name = "eName" class="form-control">
                        <span>联系人：</span><input type = "text" name = "contact" class="form-control">
                        <span>行业：</span><input type = "text" name = "eCategory" class="form-control">
                    </div>
                    
                    <div  class="infoLine">
                        <span>手机：</span><input type = "text" name = "mobilePhone" class="form-control">
                        <span>座机：</span><input type = "text" name = "phone" class="form-control">
                        <span>传真：</span><input type = "text" name = "faxNumber" class="form-control">
                    </div>
                    
                    <div class="infoLine">
                        <span>E-mail：</span><input type = "text" name = "eMail" class="form-control">
                        <span>QQ：</span><input type = "text" name = "qq" class="form-control">
                        <span>邮编：</span><input type = "text" name = "postCode" class="form-control">
                    </div>
                    
                    <div class="infoLine">
                        <span>地址：</span><input type = "text" name = "address" class="form-control Long">
                    </div>
                    
                    <div>
                        <span>主要产品：</span><input type = "text" name = "mainProducts" class="form-control Long"> 
                    </div>
                    
                </div>
                
                <br/>
                <div class="info infoMiddle">
                    
                    <div class="title">技术难题情况</div>
                    
                    <div class="infoLine">
                        <span>难题名称：</span><input type = "text" name = "pName" class="form-control MiddleLong">
                        <span>所属领域：</span><input type = "text" name = "pCategory" class="form-control">
                    </div>
                       
                    <div class="infoLine">
                        <span>负责人：</span><input type = "text" name = "principal" class="form-control">
                        <span>联系电话：</span><input type = "text" name = "phone2" class="form-control">
                        <span>传真：</span><input type = "text" name = "faxNumber2" class="form-control">
                    </div>
                        
                    <div class="infoLine">
                        
                    </div>
                    
                    <div class="infoLine">
                        <span>难题背景：</span><input type = "text" name = "background" class="form-control Long">
                    </div>
                    
                    
                    <div class="infoLine">
                        <span>难题描述：</span><textarea type = "textarea" rows="3" name = "description" class="form-control Long"></textarea>
                    </div>
                        
                </div>
                
            </div>
      
            
      
            <input type = "submit" value = "确定" class="btn btn-primary btn-success"/>
        <?php echo form_close(); ?>
            
        </div>
        <div id="footer" class="width">
            
        </div>
    </body>
</html>
