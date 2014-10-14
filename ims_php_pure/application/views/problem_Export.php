<?php
header("Conteng-Type: application/vnd.msword");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment; filename=sampleword.doc");
?>
难题编号 <?php echo $records[0]->pID ?><pr>
企业名称 <?php echo $records[0]->eName ?><pr>
领域 <?php echo $records[0]->eCategory ?><pr>
地址 <?php echo $records[0]->eAddress ?><pr>
邮编 <?php echo $records[0]->ePostCode ?><pr>    
联系人 <?php echo $records[0]->contact ?><pr>
手机 <?php echo $records[0]->mobilePhone ?><pr>
座机 <?php echo $records[0]->telePhone ?><pr>
传真 <?php echo $records[0]->faxNumber ?><pr>
EMail <?php echo $records[0]->eMail ?><pr>
qq <?php echo $records[0]->qq  ?><pr>
主要产品 <?phpe echo $records[0]->mainProducts  ?><pr>
问题名称 <?php echo $records[0]->pName ?><pr>       
领域 <?php echo $records[0]->pCategory ?><pr>
联系人 <?php echo $records[0]->cName ?><pr>
座机 <?php echo $records[0]->cTelePhone ?><pr>
传真 <?php echo $records[0]->pFaxNumber ?><pr>
背景描述 <?php echo $records[0]->bgDescription ?><pr>
问题描述 <?php echo $records[0]->pDescription ?><pr>