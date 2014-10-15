<!DOCTYPE html>
<!--
这个是通用的网页模板，需要注意。该模板定义了一个完整的网页需要包含的部分。
-->
<html>
    <head>
        <title>创新案例数据库</title>

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
        <div id="headerImg" class="width">创新案例数据库</div>
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
                    <span class="searchTitle">根据公司修改 </span>
                    <?php 
                    $attributes = array('class' => 'form-horizontal');
                    echo form_open('casecontroller/selectCaseByDepartment', $attributes); 
                    ?>
                        <select name = "queryDepartment">
                            <?php foreach($queryData['queryDepartment'] as $item) { echo "<option value =".$item->eName." >".$item->eName; } ?>
                        </select>
                        <input type= "submit" value="Ok" class="btn btn-primary btn-success"/>
                    <?php echo form_close(); ?>
                </div>
            </div>
            <!--<a href = "?php echo site_url('casecontroller/caseStatistics') ?>"> Stastics </a>-->  
            <!------------------搜索结果界面--------------------->
            <div class="searchResults">
                <table class="recordTables">
                    <tr>
                        <th  class="shortTD">案例ID</th>
                        <!--
                        <th class="MiddleTD">department</th>
                        <th class="MiddleTD">sector</th>
                        <th class="MiddleTD">类别</th>
                        <th class="tinyTD">手机</th>
                        <!--<th class="MiddleTD">传真</th>-->
                        <th class="MiddleTD">title</th>
                        <th class="MiddleTD">abstract</th>
                        <th class="tinyTD">cSolution</th>
                        <th class="tinyTD">sEmployed</th>
                        <th class="tinyTD">sImplementation</th>
                        <!--<th Modified class="MiddleTD">qq</th>-->
                        <th class="editCol">操作</th>
                    </tr>
                    <?php
                        foreach($records as $rec) { 
                            $modifyURL = site_url('casecontroller/loadCase?cID=').$rec->cID;
                            $deleteURL = site_url('casecontroller/deleteCase?cID=').$rec->cID;
                            $exportURL = site_url('casecontroller/exportCase?cID=').$rec->cID;
                            $export2pdfURL = site_url('casecontroller/pdf?cID=').$rec->cID;
                            $importURL = site_url('casecontroller/exportCase?cID=').$rec->cID;
                        ?>
                    <tr>
                        <td class="shortTD"><?php echo $rec->cID ?></td>
                        <td class="MiddleTD" title="<?php echo $rec->title ?>"><?php echo $rec->title ?></td>
                        <td class="tinyTD" title='<?php echo $rec->abstract ?>'><?php echo $rec->abstract ?></td>
                        <td class="tinyTD"><?php echo $rec->cSolution ?></td>
                        <td class="tinyTD"><?php echo $rec->sEmployed ?></td>
                        <!--<td class="MiddleTD"><?php // echo $rec->faxNumber ?></td>-->
                        <td class="MiddleTD"><?php echo $rec->sImplementation ?></td>
                        <!--<td class="MiddleTD" title="php // echo $rec->qq ?>">php echo $rec->qq ?></td>-->

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
                    <?php $addURL = site_url('casecontroller/addCase?isFirst=1'); ?>
                    <a href = "<?php print $addURL?>">添加新的技术案例</a>
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
