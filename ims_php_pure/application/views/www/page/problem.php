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

                        <!------------------搜索界面--------------------->
            <div class="searchAreas">
                <!--按照名字搜索-->
                <div class="searchLine">
                    <span class="searchTitle">Search By Name: </span>
                    <?php 
                    $attributes = array('class' => 'form-horizontal', 'id' => 'searchByNameForm');
                    echo form_open('problemcontroller/selectProblemByEName', $attributes); 
                    ?>
                        <select name = "queryEName">
                            <?php foreach($queryData['queryEName'] as $item) { echo "<option value =".$item->eName." >".$item->eName; } ?>
                        </select>
                        <input type= "submit" value="Ok" class="btn btn-primary btn-success"/>
                    <?php echo form_close(); ?>
                </div>
                
                <!--按照类别搜索-->
                <div class="searchLine">
                    <span class="searchTitle">Search By Category:</span>
                    <?php 
                    $attributes = array('class' => 'form-horizontal', 'id' => 'searchByCategoryForm');
                    echo form_open('problemcontroller/selectProblemByPCategory', $attributes); 
                    ?>
                        <select name = "queryPCategory">
                            <?php foreach($queryData['queryCategory'] as $item) { echo "<option value =".$item->pCategory." >".$item->pCategory; }?>
                        </select>
                        <input type= "submit" value="Ok" class="btn btn-primary btn-success"/>
                    <?php echo form_close(); ?>
                </div>
                
                                                <!--按照联系人搜索-->
                <div class="searchLine">
                    <span class="searchTitle">Search By Contact Name: </span>
                    <?php 
                    $attributes = array('class' => 'form-horizontal', 'id' => 'searchByContactForm');
                    echo form_open('problemcontroller/selectProblemByContactName', $attributes); 
                    ?>
                        <select name = "queryContactName">
                            <?php  foreach($queryData['queryCName'] as $item) { echo "<option value =".$item->cName." >".$item->cName; } ?>
                        </select>
                        <input type= "submit" value="Ok" class="btn btn-primary btn-success"/>
                    <?php echo form_close(); ?>
                </div>
                
            </div>
            
            <!------------------搜索结果界面--------------------->
            <div class="searchResults">
                <table class="recordTables">
                    <tr>
                        <th  class="shortTD">难题ID</th>
                        <th class="MiddleTD">公司名称</th>
                        <th class="MiddleTD">标题</th>
                        <th class="MiddleTD">类别</th>
                        <th class="tinyTD">联系人</th>
                        <!--<th class="MiddleTD">传真</th>-->
                        <!--<th class="MiddleTD">背景描述</th>-->
                        <th class="MiddleTD">问题描述</th>
                        <th class="editCol">操作</th>
                    </tr>
                    <?php
                        foreach($records as $rec) { 
                            $modifyURL = site_url('problemcontroller/loadProblem?pID=').$rec->pID;
                            $deleteURL = site_url('problemcontroller/deleteProblem?pID=').$rec->pID;
                            $exportURL = site_url('problemcontroller/exportProblem?pID=').$rec->pID;
                            $export2pdfURL = site_url('problemcontroller/pdf?pID=').$rec->pID;
                            $importURL = site_url('problemcontroller/exportProblem?pID=').$rec->pID;
                        ?>
                    <tr>
                        <td class="shortTD"><?php echo $rec->pID ?></td>
                        <td class="MiddleTD" title="<?php echo $rec->eName ?>"><?php echo $rec->eName ?></td>
                        <td class="MiddleTD" title='<?php echo $rec->pName ?>'><?php echo $rec->pName ?></td>
                        <td class="MiddleTD"><?php echo $rec->pCategory ?></td>
                        <td class="tinyTD"><?php echo $rec->contact ?></td>
                        <!--<td class="MiddleTD">php echo $rec->faxNumber</td>-->
                        <!--<td class="MiddleTD">php echo $rec->bgDescription ?></td>-->
                        <td class="MiddleTD" title="<?php echo $rec->pDescription ?>"><?php echo $rec->pDescription ?></td>

                        <td class="editCol"><a href = "<?php print $deleteURL?>" onclick="alert();">删除</a>
                        <a href = "<?php print $modifyURL?>">修改</a> 
                        <a href = "<?php print $exportURL?>">导出word</a>
                        <a href = "<?php print $export2pdfURL?>">导出pdf</a> 
                        </td>
                    </tr>
                       <?php } ?>
                    </table>
                <div style="clear:both;"></div>
                <div class="fileAddDiv">
                    <?php $addURL = site_url('problemcontroller/addProblem?isFirst=1'); ?>
                    <a href = "<?php print $addURL?>">添加新的技术难题</a>
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
