<!DOCTYPE html>
<!--
这个是通用的网页模板，需要注意。该模板定义了一个完整的网页需要包含的部分。
-->
<html>
    <head>
        <title>更改创新人才</title>

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
        <div id="headerImg" class="width">创新人才数据库</div>
        <div id="menu" class="width">   
            <?php 
            chdir( dirname(__FILE__) );
            require( '../layout/menu.php' );
            ?>
        </div>
        <div id="content" class="width">

            <?php 
            $attributes = array('class' => 'dd');
            echo form_open('studentcontroller/addStudent', $attributes); 
            ?>
            
            <div class="addNewProblemForm">
                <div class="info">
                    <div class="title">创新人才基本信息</div>
                    <div class="infoLine">
                        <span>姓名：</span><input type = "text" name = "sName" class="form-control"  value="<?php echo $records[0]->sName ?>">
                        <span>性别：</span><input type = "text" name = "sSex" class="form-control"  value="<?php echo $records[0]->sSex ?>">
                        <span>生日：</span><input type = "text" name = "birthday" class="form-control" value="<?php echo $records[0]->birthday ?>">
                    </div>
                    
                    <div  class="infoLine">
                        
                        <span>毕业院校：</span><input type = "text" name = "gSchool" class="form-control" value="<?php echo $records[0]->gSchool ?>">
                        <span>学历：</span><input type = "text" name = "education" class="form-control" value="<?php echo $records[0]->education ?>">
                        <span>专业：</span><input type = "text" name = "major" class="form-control" value="<?php echo $records[0]->major ?>">
                        
                    </div>
                    
                    <div class="infoLine"></div>
                    
                    <div class="infoLine middleWide">
                        <span>公司：</span><input type = "text" name = "company" class="form-control" value="<?php echo $records[0]->company ?>">
                        <span>部门：</span><input type = "text" name = "department" class="form-control" value="<?php echo $records[0]->department ?>">
                        <span>职位：</span><input type = "text" name = "eTitle" class="form-control" value="<?php echo $records[0]->eTitle ?>">
                    </div>

                    
                    <div  class="infoLine">
                        <span>手机：</span><input type = "text" name = "mobilePhone" class="form-control" value="<?php echo $records[0]->mobilePhone ?>">
                        <span>座机：</span><input type = "text" name = "telePhone" class="form-control" value="<?php echo $records[0]->telePhone ?>">
                        <!--<span>传真：</span><input type = "text" name = "faxNumber" class="form-control" value="php echo $records[0]->faxNumber ?>">-->
                    </div>
                    
                    <div class="infoLine"></div>
                    
                    <div class="infoLine middleWide">
                        <span>E-mail：</span><input type = "text" name = "eMail" class="form-control" value="<?php echo $records[0]->eMail ?>">
                        <span>QQ：</span><input type = "text" name = "qq" class="form-control" value="<?php echo $records[0]->qq ?>">
                        <!--<span>邮编：</span><input type = "text" name = "postCode" class="form-control">-->
                        <span>司龄：</span><input type = "text" name = "startWorkTime" class="form-control" value="<?php echo $records[0]->startWorkTime ?>">
                    </div>
                    
                    <div class="infoLine">
                        <span>通信地址：</span><input type = "text" name = "address" class="form-control Long" value="<?php echo $records[0]->address ?>">
                    </div>
                    
                    
                </div>
                
                <br/>
                
            </div>
      
            
      
            <input type = "submit" value = "确定" class="btn btn-primary btn-success"/>
        <?php echo form_close(); ?>
            
        </div>
        <div id="footer" class="width">
            
        </div>
    </body>
</html>
