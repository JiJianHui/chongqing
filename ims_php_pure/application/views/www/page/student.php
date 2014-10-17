<!DOCTYPE html>
<!--
这个是通用的网页模板，需要注意。该模板定义了一个完整的网页需要包含的部分。
-->
<html>
    <head>
        <title>创新人才管理数据库</title>

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

            <!------------------搜索界面--------------------->
            <div class="searchAreas">
                <!--按照名字搜索-->
                <div class="searchLine">
                    <span class="searchTitle">按照公司搜索: </span>
                    <?php 
                    $attributes = array('class' => 'form-horizontal', 'id' => 'searchByCompanyForm');
                    echo form_open('studentcontroller/selectStudentByCompany', $attributes); 
                    ?>
                        <select name = "queryCompany">
                            <?php foreach($queryData['queryCompany'] as $item) { echo "<option value =".$item->company." >".$item->company; } ?>
                        </select>
                        <input type= "submit" value="Ok" class="btn btn-primary btn-success"/>
                    <?php echo form_close(); ?>
                </div>
                
                <!--按照类别搜索-->
                <div class="searchLine">
                    <span class="searchTitle">按照人才名字搜索:</span>
                    <?php 
                    $attributes = array('class' => 'form-horizontal', 'id' => 'searchByStudentNameForm');
                    echo form_open('studentcontroller/selectStudentBySName', $attributes); 
                    ?>
                        <select name = "querySName">
                            <?php foreach($queryData['querySName'] as $item) { echo "<option value =".$item->sName." >".$item->sName; } ?>
                        </select>
                        <input type= "submit" value="Ok" class="btn btn-primary btn-success"/>
                    <?php echo form_close(); ?>
                </div>
                
                <!--按照联系人搜索-->
                
            </div>
            
            <a href = "<?php echo site_url('studentcontroller/studentStatistics')?>"> Stastics </a>--> 
            
            <!------------------搜索结果界面--------------------->
            <div class="searchResults">
                <table class="recordTables">
                    <tr>
                        <th  class="shortTD">人才ID</th>
                        <th class="tinyTD">姓名</th>
                        <th class="shortTD">性别</th>
                        <th class="shortTD">司龄</th>
                        <!--<th class="tinyTD">生日</th>-->
                        <!--<th class="MiddleTD">传真</th>-->
                        <!--<th class="MiddleTD">背景描述</th>-->
                        <th class="MiddleTD">专业</th>
                        <th class="MiddleTD">职业</th>
                        <th class="MiddleTD">公司</th>
                        <th class="editCol">操作</th>
                    </tr>
                    <?php
                        foreach($records as $rec) { 
                            $modifyURL = site_url('studentcontroller/loadStudent?sID=').$rec->sID;
                            $deleteURL = site_url('studentcontroller/deleteStudent?sID=').$rec->sID;
                            $exportURL = site_url('studentcontroller/exportStudent?sID=').$rec->sID;
                            $export2pdfURL = site_url('studentcontroller/pdf?sID=').$rec->sID;
                            $importURL = site_url('studentcontroller/exportStudent?sID=').$rec->sID;
                        ?>
                    <tr>
                        <td class="shortTD"><?php echo $rec->sID ?></td>
                        <td class="tinyTD" title="<?php echo $rec->sName ?>"><?php echo $rec->sName ?></td>
                        <td class="shortTD" title='<?php echo $rec->sSex ?>'><?php echo $rec->sSex ?></td>
                        <td class="shortTD"><?php echo $rec->startWorkTime ?></td>
                        <!--<td class="MiddleTD">?php echo $rec->birthday ?></td>-->
                        <!--<td class="MiddleTD">php echo $rec->faxNumber</td>-->
                        <!--<td class="MiddleTD">php echo $rec->bgDescription ?></td>-->
                        <td class="MiddleTD" title="<?php echo $rec->cMajor ?>"><?php echo $rec->cMajor ?></td>
                        <td class="MiddleTD" title="<?php echo $rec->eTitle ?>"> <?php echo $rec->eTitle ?></td>
                        <td class="MiddleTD"><?php echo $rec->company ?></td>

                        <td class="editCol"><a href = "<?php print $deleteURL?>" onclick="return confirm('确定删除?');">删除</a>
                        <a href = "<?php print $modifyURL?>">修改</a> 
                        <a href = "<?php print $exportURL?>">导出word</a>
                        <a href = "<?php print $export2pdfURL?>">导出pdf</a> 
                        </td>
                    </tr>
                       <?php } ?>
                    </table>
                <div style="clear:both;"></div>
                <div class="fileAddDiv">
                    <?php $addURL = site_url('studentcontroller/addStudent?isFirst=1'); ?>
                    <a href = "<?php print $addURL?>">添加新的人才</a>
                    <div class="uploadFormDiv">
                    <?php
                        echo form_open_multipart(site_url('upload/upload_file'));
                        echo form_upload('userfile');
                        echo form_submit('upload', '上传文件');
                    ?>    
                    </div>
                </div>
            </div>
            
        </div>
        <div id="footer" class="width">
            
        </div>
    </body>

</html>
