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
            <ul>
            <li><a href="/ims_php_pure/index.php/problemcontroller/getProblem">企业技术难题</a></li>
            <li><a href="/ims_php_pure/index.php/studentcontroller/getStudent" class="forum" >创新人才管理</a></li>
            <li><a href="/ims_php_pure/index.php/casecontroller/getCase" >创新案例</a></li>
            </ul>
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
                    $attributes = ['class' => 'form-horizontal', 'id' => 'searchByContactForm'];
                    echo form_open('problemcontroller/selectProblemByContactName', $attributes); 
                    ?>
                        <select name = "queryContactName">
                            <?php  foreach($queryData['queryCName'] as $item) { echo "<option value =".$item->contactName." >".$item->contactName; } ?>
                        </select>
                        <input type= "submit" value="Ok" class="btn btn-primary btn-success"/>
                    <?php echo form_close(); ?>
                </div>
                
            </div>
            
            <!------------------搜索结果界面--------------------->
            <div class="searchResults">
                <table class="recordTables">
                    <tr>
                        <th>难题ID</th>
                        <th>公司ID</th>
                        <th>标题</th>
                        <th>类别</th>
                        <th>联系人</th>
                        <th>传真</th>
                        <th>背景描述</th>
                        <th>问题描述</th>
                        <th>操作</th>
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
                            <td><?php echo $rec->pID ?></td>
                            <td><?php echo $rec->eName ?></td>
                            <td><?php echo $rec->pName ?></td>
                            <td><?php echo $rec->pCategory ?></td>
                            <td><?php echo $rec->contact ?></td>
                            <td><?php echo $rec->faxNumber ?></td>
                            <td><?php echo $rec->bgDescription ?></td>
                            <td><?php echo $rec->pDescription ?></td>
                            
                            <td class="editCol"><a href = "<?php print $deleteURL?>">删除</a>
                            <a href = "<?php print $modifyURL?>">修改</a> 
                            <a href = "<?php print $exportURL?>">导出word</a>
                            <a href = "<?php print $export2pdfURL?>">导出pdf</a> 
                            </td>
                    </tr>
                       <?php } ?>
                    </table>
            </div>
            
        </div>
        <div id="footer" class="width"></div>
    </body>
</html>
