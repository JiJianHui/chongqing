<!DOCTYPE html>
<!--
这个是通用的网页模板，需要注意。该模板定义了一个完整的网页需要包含的部分。
-->
<html>
    <head>
        <title>添加技术案例</title>

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
            echo form_open('casecontroller/addCase', $attributes); 
            ?>
            
            <div class="addNewProblemForm">
                <div class="info">
                    <div class="title">项目概要</div>
                    <div class="infoLine">
                        <span>案例题目：</span><textarea name="title" rows="5" class="form-control Long" value="<?php echo $records[0]->title ?>"><?php echo $records[0]->title ?></textarea>
                    </div>
                    <div class="infoLine">
                        <span>案例概要：</span><textarea name="abstract" rows="5" class="form-control Long" value="<?php echo $records[0]->abstract ?>"><?php echo $records[0]->abstract ?></textarea>
                    </div>
                    <div class="infoLine middleWide"></div>
                    <div class="infoLine">
                        <span>案例描述：</span><textarea name="description" rows="5" class="form-control Long" value="<?php echo $records[0]->description ?>"><?php echo $records[0]->description ?></textarea>
                    </div>
                    
                    <div  class="infoLine">
                        <span>解题过程：</span><textarea name="course" rows="5" class="form-control Long" value="<?php echo $records[0]->course ?>"><?php echo $records[0]->course ?></textarea>
                    </div>
                    <div class="infoLine  middleWide">
                        <span>概念方案：</span><textarea name="cSolution" rows="5" class="form-control Long" value="<?php echo $records[0]->cSolution ?>"><?php echo $records[0]->cSolution ?></textarea>
                    </div>
                    <div class="infoLine">
                        <span>采用方案：</span><textarea name="sEmployed" rows="5" class="form-control Long" value="<?php echo $records[0]->sEmployed ?>"><?php echo $records[0]->sEmployed ?></textarea>
                    </div>
                    
                    <div class="infoLine middleWide">
                        <span>方案实现：</span><textarea name="sImplementation" rows="5" class="form-control Long" value="<?php echo $records[0]->sImplementation ?>"></textarea>
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
