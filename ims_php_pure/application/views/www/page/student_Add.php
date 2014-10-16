<!DOCTYPE html>
<!--
这个是通用的网页模板，需要注意。该模板定义了一个完整的网页需要包含的部分。
-->
<html>
    <head>
        <title>创新人才管理数据库</title>

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
          
          <script type="text/javascript">
            $(function() {
                if (window.PIE) {
                    $('.rounded').each(function() {
                        PIE.attach(this);
                    });
                }
            });          
          </script>          
        
        <script src="<?php echo base_url()?>www/js/PIE.js"></script>
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>www/css/IEstyle.css" media="screen, projection, tv " />
        <![endif]-->
          
          
    </head>
    
    <body>
        <!--<div id="header" class="width"></div>-->
        <div id="headerImg" class="width"><span>创新人才管理数据库</span></div>
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
                        <span>姓名：</span><input type = "text" name = "sName" class="form-control rounded ">
                        <span>性别：</span><input type = "text" name = "sSex" class="form-control rounded ">
                        <span>生日：</span><input type = "text" name = "birthday" class="form-control rounded ">
                    </div>
                    
                    <div  class="infoLine">
                        
                        <span>毕业院校：</span><input type = "text" name = "gSchool" class="form-control rounded ">
                        <span>学历：</span><input type = "text" name = "education" class="form-control rounded ">
                        <span>专业：</span><input type = "text" name = "major" class="form-control rounded ">
                        
                    </div>
                    
                    <div class="infoLine"></div>
                    
                    <div class="infoLine middleWide">
                        <span>公司：</span><input type = "text" name = "company" class="form-control rounded ">
                        <span>部门：</span><input type = "text" name = "department" class="form-control rounded ">
                        <span>职位：</span><input type = "text" name = "eTitle" class="form-control rounded ">
                    </div>

                    
                    <div  class="infoLine">
                        <span>手机：</span><input type = "text" name = "mobilePhone" class="form-control rounded ">
                        <span>座机：</span><input type = "text" name = "telePhone" class="form-control rounded ">
                        <span>传真：</span><input type = "text" name = "faxNumber" class="form-control rounded ">
                    </div>
                    
                    <div class="infoLine"></div>
                    
                    <div class="infoLine middleWide">
                        <span>E-mail：</span><input type = "text" name = "eMail" class="form-control rounded ">
                        <span>QQ：</span><input type = "text" name = "qq" class="form-control rounded ">
                        <!--<span>邮编：</span><input type = "text" name = "postCode" class="form-control rounded ">-->
                        <span>司龄：</span><input type = "text" name = "startWorkTime" class="form-control rounded ">
                    </div>
                    
                    <div class="infoLine">
                        <span>通信地址：</span><input type = "text" name = "address" class="form-control rounded  Long">
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
