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
            $attributes = array('class' => 'dd', 'id' => 'modifyNewProblemForm');
            echo form_open('problemcontroller/modifyProblem', $attributes); 
            ?>
            <input type="hidden" name="pID" value="<?php echo $records[0]->pID ?>"/>
            <div class="addNewProblemForm">
                <div class="info">
                    <div class="title">企业基本信息</div>
                    <div class="infoLine">
                        <span>企业名称：</span><input type = "text" name = "eName" value="<?php echo $records[0]->eName ?>" class="form-control">
                        <span>联系人：</span><input type = "text" name = "contact"  value="<?php echo $records[0]->contact ?>" class="form-control">
                        <span>行业：</span><input type = "text" name = "eCategory"  value="<?php echo $records[0]->eCategory ?>" class="form-control">
                    </div>
                    
                    <div  class="infoLine">
                        <span>手机：</span><input type = "text" name = "mobilePhone"  value="<?php echo $records[0]->mobilePhone ?>" class="form-control">
                        <span>座机：</span><input type = "text" name = "telePhone"  value="<?php echo $records[0]->telePhone ?>" class="form-control">
                        <span>传真：</span><input type = "text" name = "faxNumber"  value="<?php echo $records[0]->faxNumber ?>" class="form-control">
                    </div>
                    
                    <div class="infoLine">
                        <span>E-mail：</span><input type = "text" name = "eMail" class="form-control"  value="<?php echo $records[0]->eMail ?>">
                        <span>QQ：</span><input type = "text" name = "qq" class="form-control"  value="<?php echo $records[0]->qq ?>">
                        <span>邮编：</span><input type = "text" name = "ePostCode" class="form-control"  value="<?php echo $records[0]->ePostCode ?>">
                    </div>
                    
                    <div class="infoLine">
                        <span>地址：</span><input type = "text" name = "eAddress" class="form-control Long"  value="<?php echo $records[0]->eAddress ?>">
                    </div>
                    
                    <div>
                        <span>主要产品：</span><input type = "text" name = "mainProducts" class="form-control Long"  value="<?php echo $records[0]->mainProducts ?>"> 
                    </div>
                    
                </div>
                
                <br/>
                <div class="info infoMiddle">
                    
                    <div class="title">技术难题情况</div>
                    
                    <div class="infoLine">
                        <span>难题名称：</span><input type = "text" name = "pName" class="form-control MiddleLong"  value="<?php echo $records[0]->pName ?>">
                        <span>所属领域：</span><input type = "text" name = "pCategory" class="form-control"  value="<?php echo $records[0]->pCategory ?>">
                    </div>
                       
                    <div class="infoLine">
                        <span>负责人：</span><input type = "text" name = "contactName" class="form-control"  value="<?php echo $records[0]->contactName ?>">
                        <!--<span>联系电话：</span><input type = "text" name = "pFaxNumber" class="form-control"  value="php echo $records[0]->eCategory ?>">-->
                        <span>传真：</span><input type = "text" name = "pFaxNumber" class="form-control"  value="<?php echo $records[0]->pFaxNumber ?>">
                    </div>
                        
                    <div class="infoLine">
                        
                    </div>
                    
                    <div class="infoLine">
                        <span>难题背景：</span><input type = "text" name = "bgDescription" class="form-control Long"  value="<?php echo $records[0]->bgDescription ?>">
                    </div>
                    
                    
                    <div class="infoLine">
                        <span>难题描述：</span>
                        <textarea rows="3" name = "pDescription" class="form-control Long"><?php echo $records[0]->pDescription ?></textarea>
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
